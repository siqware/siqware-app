<div class="navbar navbar-expand-md navbar-dark bg-dark navbar-static">
    <div class="navbar-brand">
        <a href="index.html" class="d-inline-block">
            <img src="{{asset('dashboard/material/main_assets/images/logo_light.png')}}" alt="">
        </a>
    </div>

    <div class="d-md-none">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>
        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto language-switch">
            <li class="nav-item">
                <a href="javascript:void(0);" class="navbar-nav-link english">
                    <img src="{{asset('dashboard/material/main_assets/images/lang/gb.png')}}" class="img-flag mr-2" alt="">
                    English
                </a>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0);" class="navbar-nav-link khmer">
                    <img src="{{asset('dashboard/material/main_assets/images/lang/kh.png')}}" class="img-flag mr-2" alt="">
                    Khmer
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link">
                    <i class="icon-bell2"></i>
                    <span class="d-md-none ml-2">Notifications</span>
                    <span class="badge badge-mark border-white ml-auto ml-md-0"></span>
                </a>
            </li>

            <li class="nav-item dropdown dropdown-user">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="{{asset('dashboard/material/main_assets/images/image.png')}}" class="rounded-circle" alt="">
                    <span>Victoria</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="#" class="dropdown-item"><i class="icon-user-plus"></i> My profile</a>
                    <a href="#" class="dropdown-item"><i class="icon-coins"></i> My balance</a>
                    <a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                    <a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</div>
