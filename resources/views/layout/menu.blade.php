<div class="app-header header py-1 d-flex">
    <div class="container-fluid">
        <div class="d-flex">

            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
            <div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">


                <div class="dropdown d-none d-md-flex" >
                    <a  class="nav-link icon full-screen-link nav-link-bg">
                        <i class="fa fa-expand"  id="fullscreen-button"></i>
                    </a>
                </div>

                <div class="dropdown d-none d-md-flex">
                    <a class="nav-link icon" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="nav-unread bg-warning"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a href="#" class="dropdown-item d-flex pb-3">
                            <div class="notifyimg">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div>
                                <strong>Someone likes our posts.</strong>
                                <div class="small text-muted">3 hours ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex pb-3">
                            <div class="notifyimg">
                                <i class="fa fa-commenting-o"></i>
                            </div>
                            <div>
                                <strong> 3 New Comments</strong>
                                <div class="small text-muted">5  hour ago</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex pb-3">
                            <div class="notifyimg">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <div>
                                <strong> Server Rebooted.</strong>
                                <div class="small text-muted">45 mintues ago</div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-center">View all Notification</a>
                    </div>
                </div>


                <div class="dropdown text-center selector">
                    <a href="#" class="nav-link leading-none" data-toggle="dropdown">
                        <span class="avatar avatar-sm brround cover-image" data-image-src="assets/images/faces/female/25.jpg"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow ">
                        <div class="text-center">
                            <a href="#" class="dropdown-item text-center font-weight-sembold user" data-toggle="dropdown">Павел Алексеев</a>
                            <span class="text-center user-semi-title text-dark">Главный админ</span>
                            <div class="dropdown-divider"></div>
                        </div>
                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon mdi mdi-account-outline"></i> Профиль
                        </a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="{{route('user_logout')}}">
                            <i class="dropdown-icon mdi  mdi-logout-variant"></i> Выйти
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>