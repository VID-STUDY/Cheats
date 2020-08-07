<nav id="sidebar">
    <!-- Sidebar Scroll Container -->
    <div id="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="content-header content-header-fullrow px-15">
                <!-- Mini Mode -->
                <div class="content-header-section sidebar-mini-visible-b">
                    <!-- Logo -->
                    <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                    <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                                </span>
                    <!-- END Logo -->
                </div>
                <!-- END Mini Mode -->

                <!-- Normal Mode -->
                <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    <!-- END Close Sidebar -->

                    <!-- Logo -->
                    <div class="content-header-item">
                        <a class="link-effect font-w700" href="{{ route('admin.index') }}">
                            <i class="si si-fire text-primary"></i>
                            <span class="font-size-xl text-dual-primary-dark">Lar</span><span class="font-size-xl text-primary">avael</span>
                        </a>
                    </div>
                    <!-- END Logo -->
                </div>
                <!-- END Normal Mode -->
            </div>
            <!-- END Side Header -->

            <!-- Side User -->
            <div class="content-side content-side-full content-side-user px-10 align-parent">
                <!-- Visible only in mini mode -->
                <div class="sidebar-mini-visible-b align-v animated fadeIn">
                    <img class="img-avatar img-avatar32" src="{{ asset('assets/img/avatars/avatar0.jpg') }}" alt="{{ auth()->user()->name }}">
                </div>
                <!-- END Visible only in mini mode -->

                <!-- Visible only in normal mode -->
                <div class="sidebar-mini-hidden-b text-center">
                    <a class="img-link" href="#">
                        <img class="img-avatar" src="{{ asset('assets/img/avatars/avatar0.jpg') }}" alt="{{ auth()->user()->name }}">
                    </a>
                    <ul class="list-inline mt-10">
                        <li class="list-inline-item">
                            <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="#">{{ \Auth::user()->name }}</a>
                        </li>
                        <li class="list-inline-item">
                            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                            <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                <i class="si si-drop"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <form action="{{ route('admin.logout') }}" method="post">
                                @csrf
                                <button class="link-effect text-dual-primary-dark" style="background-color: transparent; border: none;">
                                    <i class="si si-logout"></i>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- END Visible only in normal mode -->
            </div>
            <!-- END Side User -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li>
                        <a @if($isHomePage) class="active" @endif href="{{ route('admin.index') }}">
                            <i class="si si-cup"></i>
                            <span class="sidebar-mini-hide">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/" target="_blank">
                            <i class="si si-map"></i>
                            <span class="sidebar-mini-hide">На сайт</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">
                        <span class="sidebar-mini-visible">К</span>
                        <span class="sidebar-mini-hidden">Контент</span>
                    </li>
                    <li>
                        <a href="{{ route('admin.games.index') }}" @if (request()->is('admin/games*')) class="active" @endif>
                            <i class="si si-game-controller"></i>
                            <span class="sidebar-mini-hide">Игры</span>
                        </a>
                        <a href="{{ route('admin.cheats.index') }}" @if (request()->is('admin/cheats*')) class="active" @endif>
                            <i class="fa fa-cogs"></i>
                            <span class="sidebar-mini-hide">Читы</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>
<!-- END Sidebar -->
