<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="javascript:void(0)" class="brand-link">
        <img src="{{ asset('admin/images/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin/images/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::guard('admin')->user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        @include('admin.active-class')
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                @if (Session::get('page') == 'dashboard')
                    @php
                        $active = 'active';
                    @endphp
                @else
                    @php
                        $active = '';
                    @endphp
                @endif
                <li class="nav-item ">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ $active }}">
                        <i class="fas fa-th nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    @if (Session::get('page') == 'change-password' || Session::get('page') == 'update-details')
                        @php
                            $active = 'active';
                        @endphp
                    @else
                        @php
                            $active = '';
                        @endphp
                    @endif
                    <a href="#" class="nav-link {{ $active }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Settings
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        @if (Session::get('page') == 'change-password')
                            @php
                                $active = 'active';
                            @endphp
                        @else
                            @php
                                $active = '';
                            @endphp
                        @endif
                        <li class="nav-item">
                            <a href="{{ route('admin.changePassword') }}" class="nav-link {{ $active }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Change Password</p>
                            </a>
                        </li>
                        @if (Session::get('page') == 'update-details')
                            @php
                                $active = 'active';
                            @endphp
                        @else
                            @php
                                $active = '';
                            @endphp
                        @endif
                        <li class="nav-item">
                            <a href="{{ route('admin.updatedetails') }}" class="nav-link {{ $active }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Update Admin Details</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @if (Session::get('page') == 'cms-pages')
                    @php
                        $active = 'active';
                    @endphp
                @else
                    @php
                        $active = '';
                    @endphp
                @endif
                <li class="nav-item">
                    <a href="{{ route('admin.cmsPages') }}" class="nav-link {{ $active }}">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Cms Pages
                        </p>
                    </a>
                </li>
                @if (Session::get('page') == 'leads')
                    @php
                        $active = 'active';
                    @endphp
                @else
                    @php
                        $active = '';
                    @endphp
                @endif
                <li class="nav-item">
                    <a href="{{ route('admin.leads') }}" class="nav-link {{ $active }}">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Leads
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
