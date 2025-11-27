@php
    use Illuminate\Support\Facades\Route;
@endphp
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo mb-2">
        <a href="{{ route('dashboard') }}" class="app-brand-link">
                @if (isset(setting()->black_logo) && !empty(setting()->black_logo))
                    <img src="{{ asset('admin/assets/settings') }}/{{ setting()->black_logo }}" class="img-fluid dark-logo img-logo" alt="{{ setting()->black_name }}" />
                    <img src="{{ asset('admin/assets/settings') }}/{{ setting()->white_logo }}" class="img-fluid light-logo img-logo" alt="{{ setting()->white_name }}" />
                @else
                    <img src="{{ asset('admin/assets/img/branding/logo.png') }}" class="img-fluid light-logo img-logo" alt="{{ appName() }}" />
                    <img src="{{ asset('admin/assets/img/branding/logo.png') }}" class="img-fluid dark-logo img-logo" alt="{{ appName() }}" />
                @endif
            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
                <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
            </a>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1 my-1">
        <li class="menu-item {{ Route::is('dashboard') ? 'active' : ''}}">
            <a href="{{ route('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>
        @can('custom_notifications-list')
            <li class="menu-item {{ Route::is('custom_notifications.*') ? 'active open' : ''}}">
                <a href="{{ route('custom_notifications.index') }}" class="menu-link">
                    <i class="menu-icon tf-icons ti ti-bell"></i>
                    <div data-i18n="Notifications">Notifications</div>
                </a>
            </li>
        @endcan
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Apps &amp; Services</span>
        </li>
        {{-- @canany(['about_us-list']) --}}
            <li class="menu-item {{Route::is('about_us.*')
                                    ? 'active open' : ''}}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons ti ti-settings"></i>
                    <div data-i18n="Settings">Settings</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ Route::is('about_us.*') ? 'active' : ''}}">
                        <a href="{{ route('about_us.index') }}" class="menu-link">
                            <div data-i18n="About Us">About Us</div>
                        </a>
                    </li>
                </ul>
            </li>
        {{-- @endcanany --}}
    </ul>
</aside>
