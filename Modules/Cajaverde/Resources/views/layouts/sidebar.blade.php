<aside class="sidebar">
    <div class="sidebar-container">
        <div class="sidebar-header">
            <div class="brand">
                <img height="50px" src="{{ asset('img/logo_perinola_white.svg') }}"> 
            </div>
        </div>
        <nav class="menu">
            <ul class="sidebar-menu metismenu" id="sidebar-menu">
                <li{!! printIfRouteIs('cajaverde.dashboard') !!}>
                    <a href="{{ route('cajaverde.dashboard') }}">
                        <i class="fa fa-home"></i> Dashboard 
                    </a>
                </li>
                @foreach(Module::all() as $module)
                @if(View::exists(strtolower($module->name).'::sidebar.menu'))
                @include(strtolower($module->name).'::sidebar.menu')
                @endif
                @endforeach
                {{--
                <li>
                    <a href="">
                        <i class="fa fa-th-large"></i> Items Manager
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="items-list.html"> Items List </a>
                        </li>
                        <li>
                            <a href="item-editor.html"> Item Editor </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-area-chart"></i> Charts
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="charts-flot.html"> Flot Charts </a>
                        </li>
                        <li>
                            <a href="charts-morris.html"> Morris Charts </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-table"></i> Tables
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="static-tables.html"> Static Tables </a>
                        </li>
                        <li>
                            <a href="responsive-tables.html"> Responsive Tables </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="forms.html">
                        <i class="fa fa-pencil-square-o"></i> Forms </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-desktop"></i> UI Elements
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="buttons.html"> Buttons </a>
                        </li>
                        <li>
                            <a href="cards.html"> Cards </a>
                        </li>
                        <li>
                            <a href="typography.html"> Typography </a>
                        </li>
                        <li>
                            <a href="icons.html"> Icons </a>
                        </li>
                        <li>
                            <a href="grid.html"> Grid </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-file-text-o"></i> Pages
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="login.html"> Login </a>
                        </li>
                        <li>
                            <a href="signup.html"> Sign Up </a>
                        </li>
                        <li>
                            <a href="reset.html"> Reset </a>
                        </li>
                        <li>
                            <a href="error-404.html"> Error 404 App </a>
                        </li>
                        <li>
                            <a href="error-404-alt.html"> Error 404 Global </a>
                        </li>
                        <li>
                            <a href="error-500.html"> Error 500 App </a>
                        </li>
                        <li>
                            <a href="error-500-alt.html"> Error 500 Global </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-sitemap"></i> Menu Levels
                        <i class="fa arrow"></i>
                    </a>
                    <ul class="sidebar-nav">
                        <li>
                            <a href="#"> Second Level Item
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="#"> Third Level Item </a>
                                </li>
                                <li>
                                    <a href="#"> Third Level Item </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"> Second Level Item </a>
                        </li>
                        <li>
                            <a href="#"> Second Level Item
                                <i class="fa arrow"></i>
                            </a>
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="#"> Third Level Item </a>
                                </li>
                                <li>
                                    <a href="#"> Third Level Item </a>
                                </li>
                                <li>
                                    <a href="#"> Third Level Item
                                        <i class="fa arrow"></i>
                                    </a>
                                    <ul class="sidebar-nav">
                                        <li>
                                            <a href="#"> Fourth Level Item </a>
                                        </li>
                                        <li>
                                            <a href="#"> Fourth Level Item </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                --}}
            </ul>
        </nav>
    </div>
</aside>
