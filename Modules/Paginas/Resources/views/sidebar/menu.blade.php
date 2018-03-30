@hasanyrole('admin_paginas|editor_paginas')
<li{!! printIfRequestIs('admin/paginas*') !!}>
    <a href="{{ route('cajaverde.paginas.index') }}"> 
        <i class="fa fa-pencil"></i> Páginas de contenido 
    </a>
</li>
@endhasanyrole
