<div class="leftside-menu">

    <!-- LOGO -->
    <a href="{{ route('/') }}" class="logo text-center logo-light">
        <span class="logo-lg">
            <span class="text-white font-weight-bold">PAYGUARD</span>
        </span>
        <span class="logo-sm">
            <span class="text-white font-weight-bold">PG</span>
        </span>
    </a>

    <!-- LOGO -->
    <a href="{{ route('/') }}" class="logo text-center logo-dark">
        <span class="logo-lg">
            <!-- <img src="assets/images/logo-dark.png" alt="" height="16"> -->
            PAYGUARD
        </span>
        <span class="logo-sm">
            PAYGUARD
            <!-- <img src="assets/images/logo_sm_dark.png" alt="" height="16"> -->
        </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar="">

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>

            <li class="side-nav-item">
                <a href="{{ route('admin.dashboard') }}" class="side-nav-link {{ request()->is('admin/dashboard') ? 'active':' ' }}">
                    <i class="uil-home-alt"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-title side-nav-item">Apps</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#TransactionsTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Transactions </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="TransactionsTasks">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('admin.transactions.search') }}">Search</a>
                        </li>
                        <li>
                            <a href="{{  route('admin.transactions.all') }}">All</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- <li class="side-nav-item">
                <a href="apps-chat.html" class="side-nav-link">
                    <i class="uil-comments-alt"></i>
                    <span> Chat </span>
                </a>
            </li> -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Reports </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTasks">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('/') }}">Transactions</a>
                        </li>
                        <li>
                            <a href="{{ route('/') }}">SMS</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-title side-nav-item">Settings</li>

            <li class="side-nav-item">
                <a href="{{ route('/') }}" class="side-nav-link">
                    <i class="uil-users-alt"></i>
                    <span> User </span>
                </a>
            </li>
            
            <li class="side-nav-item">
                <a href="{{ route('/') }}" class="side-nav-link">
                    <i class="uil-folder-plus"></i>
                    <span> Couriers </span>
                </a>
            </li>

        </ul>

        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>