<style>
    /* Sidebar */
    #sidebar-wrapper {
        z-index: 1;
        width: 0;
        height: 100%;
        overflow-y: hidden;
        background: rgb(248, 249, 250);
        opacity: 0.9;
        transition: all .5s;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        position: fixed;
    }

    /* Main Content */
    #page-content-wrapper {
        width: 100%;
        position: absolute;
        padding: 15px;
        transition: all .5s;
    }

    #menu-toggle {
        transition: all .3s;
        font-size: 30px;
    }

    /* Change the width of the sidebar to display it*/
    #wrapper.menuDisplayed #sidebar-wrapper {
        width: 250px;
    }

    #wrapper.menuDisplayed #page-content-wrapper {
        padding-left: 270px;
    }

    /* Sidebar styling */
    .sidebar-nav {
        padding: 0;
        list-style: none;
        transition: all .5s;
        width: 100%;
        text-align: center;
        font-size: 17px
    }

    .sidebar-nav li {
        line-height: 40px;
        width: 100%;
        transition: all .3s;
        padding: 10px;
    }

    .sidebar-nav li a,
    .sidebar-nav #logout {
        display: block;
        text-decoration: none;
        color: rgb(33, 32, 105);
        border-radius: 8px;
        transition: all .3s;
        cursor: pointer;
    }

    .sidebar-nav li a:hover,
    .sidebar-nav #logout:hover,
    .active-nav {
        background: rgb(33, 32, 105) !important;
        color: rgb(248, 249, 250) !important;
    }

    .sidebar-nav #logout:hover {
        background: rgb(202, 38, 38) !important;
        color: rgb(248, 249, 250) !important;
    }
</style>

<div x-bind:class="toggle ? 'menuDisplayed' : null" id="wrapper" x-data="{ toggle: true }">
    <!-- Sidebar -->
    <div class="border-end" id="sidebar-wrapper">
        <ul class="sidebar-nav mx-3">
            <img class="img-fluid mb-5 mt-3" src="/images/idea-forge.svg" alt="123" style="width: 150px; height: 150px;">
            <li>
                <a class="{{ Request::is('dashboard') ? 'active-nav' : null }}" href="{{ route('dashboard.home') }}"><i class="ti ti-category me-3"></i>Home</a>
            </li>
            <li>
                <a class="{{ Request::is('dashboard/team') ? 'active-nav' : null }}" href="{{ route('dashboard.team') }}"><i class="ti ti-users-group me-3"></i>Team</a>
            </li>
            <li>
                <a class="{{ Request::is('dashboard/startup') ? 'active-nav' : null }}" href="{{ route('dashboard.startup') }}"><i class="ti ti-rocket me-3"></i>Startup</a>
            </li>
            <li>
                <a class="{{ Request::is('dashboard/profile') ? 'active-nav' : null }}" href="{{ route('dashboard.profile') }}"><i class="ti ti-user me-3"></i>Profile</a>
            </li>
            <hr class="mx-2">
            <li>
                <div class="text-danger" id="logout" x-on:click="$('#logout').html(`<span class='spinner-border spinner-border-sm'></span>`); location.href = `{{ route('logout') }}`"><i class="ti ti-logout me-3"></i>Logout</div>
            </li>
        </ul>
    </div>

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between align-items-center">

                        <button class="btn" id="menu-toggle" x-on:click="toggle = !toggle">
                            <i class="ti" x-bind:class="toggle ? 'ti-x' : 'ti-menu-2'"></i>
                        </button>

                        <div class="row px-3" style="cursor: pointer" x-on:click="location.href = `{{ route('dashboard.profile') }}`">
                            <div class="col-auto">
                                <img class="rounded-circle article-img" id="img" src="{{ auth()->user()->avatar }}" alt="{{ auth()->user()->name }}'s avatar" width="40">
                            </div>
                            <div class="d-block col-auto my-0">
                                <h6 class="fw-bold my-0">{{ auth()->user()->name }}</h6>
                                <p class="text-secondary my-0">{{ auth()->user()->email }}</p>
                            </div>
                        </div>

                    </div>
                    @yield('main')
                </div>
            </div>
        </div>
    </div>
</div>
