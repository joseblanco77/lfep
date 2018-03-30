<header class="header">
    <div class="header-block header-block-collapse d-lg-none d-xl-none">
        <button class="collapse-btn" id="sidebar-collapse-btn">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    {{-- @include('cajaverde::layouts.header-search') --}}
    <div class="header-block header-block-nav">
        <ul class="nav-profile">
            {{-- @include('cajaverde::layouts.header-notifications') --}}
            @include('cajaverde::layouts.header-user')
        </ul>
    </div>
</header>