<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{asset('public/backend')}}/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{asset('public/backend')}}/images/logo-dark.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="" class="logo logo-light">

            <span class="logo-lg">
                <h4 class="text-white py-4">বাংলাদেশ<span class="text-success"> ইনস্টিটিউট অব ডার্মাটোলজি </span></h4>

            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>

            <ul class="navbar-nav" id="navbar-nav">
                @auth
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('dashboard')}}">
                        <i class="bx bxs-dashboard"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('doctor_setup_index') }}">
                        <i class="bx bx-user-circle"></i> <span data-key="t-dashboards">Docotor Setup</span>
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('patient_registration') }}">
                        <i class="bx bx-user-circle"></i> <span data-key="t-dashboards">Patient Registration</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('daily_report') }}">
                        <i class="bx bx-user-circle"></i> <span data-key="t-dashboards">Daily Report</span>
                    </a>
                </li>
                @endauth

            </ul>
            <div class="copyright" style="margin-top:200px">
                <p style="color:white;text-align:center">Designed & Developed by <a href="https://iconisl.com" target="_blank"><i><b>Icon Information Systems Ltd. {{ \Carbon\Carbon::now()->format('Y') }}</b></i></a></p>

            </div>
        </div>
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
