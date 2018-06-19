<script>
var agregarFormCampo             = $('.agregar_form_campo');
var formCamposContainer          = $('#contactoCampoModal .modal-content').first();
var cajaverdeFormulariosSlug     = $('#slug');
var cajaverdeFormulariosTitulo   = $('#titulo');
var cajaverdeFormulariosRefresh  = $('#regenerar-slug');

var cajaverdeFormularios = {

    agregarCampo (tipo, formulario) {
        $.get(
            '/',
            {
                tipo: tipo,
                formulario: formulario
            },
            function(campo){
                formCamposContainer.html(campo);
            }
        );
    },

    agregarCamposEvents () {
        agregarFormCampo.on('click', function() {
            cajaverdeFormularios.agregarCampo($(this).data('tipo'), $(this).data('formulario'));
        });
        $('#contactoCampoModal').on('hidden.bs.modal', function (e) {
            formCamposContainer.html('');
        })
    },

    slugEvents () {
        cajaverdeFormulariosSlug.on('focus blur', function() {
            if (cajaverdeFormulariosSlug.val() === '') {
                cajaverdeFormulariosSlug.val(cajaverdeFormularios.slugGenerator());
            }
        });
        cajaverdeFormulariosTitulo.on('blur', function() {
            if (cajaverdeFormulariosSlug.val() === '') {
                cajaverdeFormulariosSlug.val(cajaverdeFormularios.slugGenerator());
            }
        });
        cajaverdeFormulariosRefresh.on('click', function() {
            if (cajaverdeFormulariosTitulo.val() !== '') {
                cajaverdeFormulariosSlug.val(cajaverdeFormularios.slugGenerator());
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
        return cajaverdeFormularios.slugify(cajaverdeFormulariosTitulo.val());
    },

    init () {
        cajaverdeFormularios.agregarCamposEvents();
        cajaverdeFormularios.slugEvents();
    }

};

$(function (){
    cajaverdeFormularios.init();
});
</script>