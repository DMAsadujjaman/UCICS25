@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp


<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('public/admin') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Varendra University </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('public/admin') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('profile.edit') }}" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-header">Site Control</li>


                <li class="nav-item {{request()->routeIs('sponsor.view')||request()->routeIs('kns.view') || request()->routeIs('scopes.view') || request()->routeIs('call_fp.view')||request()->routeIs('about.view') || request()->routeIs('chair.view') || request()->routeIs('main_page.top')||request()->routeIs('slider.view') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link"></i>
                        <p>
                            Main Page
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('slider.view') }}"
                                class="nav-link {{ request()->routeIs('slider.view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Slider_section</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('chair.view') }}"
                                class="nav-link {{ request()->routeIs('chair.view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Chair Person @ welcome</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('about.view') }}"
                                class="nav-link {{ request()->routeIs('about.view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>About_section</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('call_fp.view') }}"
                                class="nav-link {{ request()->routeIs('call_fp.view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Call For paper</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('scopes.view') }}"
                                class="nav-link {{ request()->routeIs('scopes.view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Scopes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('kns.view') }}"
                                class="nav-link {{ request()->routeIs('kns.view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Keynote Speaker</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('sponsor.view') }}"
                                class="nav-link {{ request()->routeIs('sponsor.view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sponsors</p>
                            </a>
                        </li>

                        <!-- Other menu items -->
                    </ul>

                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Pages
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('register.view') }}"
                                class="nav-link {{ request()->routeIs('register.view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Registration</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('committees.view') }}"
                                class="nav-link {{ request()->routeIs('committees.view') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Committees</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('submission.view') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Submission Guideline</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('cam_submission.view') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Camera Ready Submission Guideline</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('award.view') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Student Paper Award</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('faq.view') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>FAQ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contact.view') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contact</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Links
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                       
                        <li class="nav-item">
                            <a href="{{ route('download.view') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Downloads</p>
                            </a>
                        </li>
                        
                    </ul>
                </li>
 

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>