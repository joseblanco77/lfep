<script id="cajaverdePaginas">
var cajaverdePaginasNombre   = $('#nombre');
var cajaverdePaginasSlug     = $('#slug');
var cajaverdePaginasRefresh  = $('#regenerar-slug');

var cajaverdePaginas = {
    
    editorEvents () {
        var cajaverdePaginasEditor   = $('.ql-editor').first();
        var cajaverdePaginasTextarea = $('#contenido_textarea');
        
        cajaverdePaginasEditor.bind("DOMSubtreeModified", function(){
            cajaverdePaginasTextarea.html(cajaverdePaginasEditor.html());
        });
    },

    slugEvents () {
        cajaverdePaginasSlug.on('focus blur', function() {
            if (cajaverdePaginasSlug.val() === '') {
                cajaverdePaginasSlug.val(cajaverdePaginas.slugGenerator());
            }
        });
        cajaverdePaginasNombre.on('blur', function() {
            if (cajaverdePaginasSlug.val() === '') {
                cajaverdePaginasSlug.val(cajaverdePaginas.slugGenerator());
            }
        });
        cajaverdePaginasRefresh.on('click', function() {
            if (cajaverdePaginasNombre.val() !== '') {
                cajaverdePaginasSlug.val(cajaverdePaginas.slugGenerator());
            }
        });
    },

    /**
     * https://gist.github.com/mathewbyrne/1280286
     */
    slugify (str) {
        str = str.replace(/^\s+|\s+$/g, ''); // trim
        str = str.toLowerCase();

        // remove accents, swap ñ for n, etc
        var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
        var to   = "aaaaeeeeiiiioooouuuunc------";

        for (var i=0, l=from.length ; i<l ; i++)
            str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));


        str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
            .replace(/\s+/g, '-') // collapse whitespace and replace by -
            .replace(/-+/g, '-'); // collapse dashes

        return str;
    },

    slugGenerator () {
        return cajaverdePaginas.slugify(cajaverdePaginasNombre.val());
    },

    mediaGalleryEvents () {
        var imageContainers = $('#modal-media .images-container .image-container');
        
        imageContainers.on('click', function(){
            imageContainers.removeClass('active');
            $(this).addClass('active');
        });
        $(document).on('click', '.dz-preview', function(){
            $('.dz-preview').each(function(){
                $(this).removeClass('active');
            });
            $(this).addClass('active');
        });
        $(document).on('click', '#gallery .image', function(){
            $('#gallery .image').each(function(){
                $(this).removeClass('active');
            });
            $(this).addClass('active');
        });

        $('#insertimageoneditor').on('click', function(){
            if ($('#uploadtab').hasClass('active')) {
                cajaverdePaginas.insertUploaded();
            }
            if ($('#gallerytab').hasClass('active')) {
                cajaverdePaginas.insertStored();
            }
        })

    },

    manageUploadedFile(file) {
        try {
            var response = JSON.parse(file.xhr.responseText);

            if(response.message === 'ok') {
                $(file.previewElement).attr('data-path', response.image);
                return;
            }

            var message = (response.errors.file).join('\n');
            alert(message);
            var errorContainer = $(file.previewElement).find('.dz-error-message').first();
            errorContainer.find('span').first().html(message);
            return;
        } catch(e) {
            console.log('e',e)
        }
    },

    insertUploaded () {
        var cajaverdePaginasEditor = $('.ql-editor').first();
        var active = $('.dz-preview.active');
        if(active.length === 1) {
            var image = $('.dz-preview.active').data('path');
            cajaverdePaginasEditor.append('<img src="'+image+'">');
            $('#modal-media').modal('hide');
        } else {
            alert('Seleccione una imagen.')
        }
    },

    insertStored () {
        var cajaverdePaginasEditor = $('.ql-editor').first();
        var active = $('#gallery .image.active');
        if(active.length === 1) {
            var image = $('#gallery .image.active').data('path');
            cajaverdePaginasEditor.append('<img src="'+image+'">');
            $('#modal-media').modal('hide');
        } else {
            alert('Seleccione una imagen.')
        }
    },

    init () {
        cajaverdePaginas.editorEvents();
        cajaverdePaginas.slugEvents();
        cajaverdePaginas.mediaGalleryEvents();
    }

}


$(function(){
    cajaverdePaginas.init();
});
    
</script>