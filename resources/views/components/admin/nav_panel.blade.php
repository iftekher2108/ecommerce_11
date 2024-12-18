<div id="layout-menu" class="layout-menu menu-vertical position-relative menu bg-dark bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
                {{-- <img src="" class="m-2" alt="logo"> --}}
                {{ config('app.name') }}
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>

    </div>

    <div class="nav-panel-close p-2 bg-danger text-white rounded-bottom-3 position-absolute end-0">
        <i class='bx bx-x fs-3'></i>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1 bg-dark">

        <!-- Dashboard -->
        <li class="menu-item {{ Request::routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div>{{ __('messages.panel.dashboard') }}</div>
            </a>
        </li>


        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">{{ __('messages.panel.product').' '.__('messages.panel.catalog') }}</span>
        </li>
        <li class="menu-item {{ (Request::routeIs('brand.index') || Request::routeIs('category.index') || Request::routeIs('product.index')) ? 'active' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div>{{ __('messages.panel.product').' '.__('messages.panel.catalog') }}</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Request::routeIs('product.index') ? 'active' : '' }}">
                    <a href="{{ route('product.index') }}" class="menu-link">
                        <div>{{ __('messages.panel.product') }}</div>
                    </a>
                </li>

                <li class="menu-item {{ Request::routeIs('brand.index') ? 'active' : '' }}">
                    <a href="{{ route('brand.index') }}" class="menu-link">
                        <div>{{ __('messages.panel.brand') }}</div>
                    </a>
                </li>

                <li class="menu-item {{ Request::routeIs('category.index') ? 'active' : '' }}">
                    <a href="{{ route('category.index') }}" class="menu-link">
                        <div>{{ __('messages.panel.category') }}</div>
                    </a>
                </li>

            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div>Authentications</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="" class="menu-link" target="_blank">
                        <div>Login</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="" class="menu-link" target="_blank">
                        <div>Register</div>
                    </a>
                </li>

            </ul>
        </li>

        <!-- Users -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">
                Users Permission
            </span>
        </li>
        <!-- Users -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div>Users Settings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="" class="menu-link">
                        <div>Basic Inputs</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="" class="menu-link">
                        <div>Input groups</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Report -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Reports</span>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div>Reports</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="" class="menu-link">
                        <div>Basic Inputs</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="" class="menu-link">
                        <div>Input groups</div>
                    </a>
                </li>
            </ul>
        </li>


        <!-- Settings -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Settings</span>
        </li>

        <li class="menu-item">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div>Settings 1</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div>Settings 2</div>
            </a>
        </li>
    </ul>
</div>
