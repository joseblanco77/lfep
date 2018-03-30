@hasanyrole('admin_contact_forms|editor_contact_forms|checker_contact_forms')
<li{!! printIfRequestIn(['admin/contacto*']) !!}>
    
    <a href="">
        <i class="fa fa-envelope"></i> Formularios de contacto
        <i class="fa arrow"></i>
    </a>

    <ul class="sidebar-nav">

        <li{!! printIfRequestIs('admin/contacto/mensajes*') !!}>
            <a href="{{ route('cajaverde.contacto.mensajes.index') }}"> 
                <i class="fa fa-envelope-open"></i> Mensajes 
            </a>
        </li>

        @hasanyrole('admin_contact_forms|editor_contact_forms')
        <li{!! printIfRequestIs('admin/contacto/formularios*') !!}>
            <a href="{{ route('cajaverde.contacto.formularios.index') }}"> 
                <i class="fa fa-wpforms"></i> Formularios 
            </a>
        </li>
        @endhasanyrole

    </ul>
    
</li>
@endhasanyrole
