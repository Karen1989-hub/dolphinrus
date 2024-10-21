@include('layout.header')
<body class="app sidebar-mini">


<!-- Switcher -->
<div class="switcher-wrapper">
    <div class="demo_changer">
{{--        <div class="demo-icon bg_dark">--}}
{{--            <i class="fa fa-cog fa-spin text_primary"></i>--}}
{{--        </div>--}}
        <div class="form_holder sidebar-right1">
            <div class="row">
                <div class="predefined_styles">
                    <h4>Versions</h4>
                    <div class="swichermainleft p-4">
                        <div class="pl-3 pr-3">
                            <a class="btn btn-primary btn-block" href="https://laravel.spruko.com/adminor/Leftmenu-Icon-LightSidebar/index">Left Menu</a>
                            <a class="btn btn-secondary btn-block" href="https://laravel.spruko.com/adminor/Horizontal-Light/index">Horizontal</a>
                        </div>
                    </div>
                    <div class="swichermainleft border-top text-center p-4">
                        <div class="p-3">
                            <a class="btn btn-danger btn-block mt-0" href="http://laravel.spruko.com/adminor/">View Demo</a>
                            <a class="btn btn-warning btn-block" href="https://themeforest.net/item/adminor-laravel-admin-template/26435876">Buy Now</a>
                            <a class="btn btn-info btn-block" href="https://themeforest.net/user/sprukosoft/portfolio">Our Portfolio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Switcher -->

<div id="global-loader" ></div>
<div class="page" >
    <div class="page-main">
        @include('layout.menu')
        <!-- Sidebar menu-->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
        <aside class="app-sidebar">
            <div class="app-sidebar__user">
                <div class="dropdown user-pro-body">
                    <div>
                        <img src="assets/images/faces/female/25.jpg" alt="user-img" class="avatar avatar-md brround">
                    </div>
                    <div class="user-info">
                        <div class="mb-2">
                            <a href="index-2.html#" class="" data-toggle="" aria-haspopup="true" aria-expanded="false"> <span class="font-weight-semibold text-white">Павел Алексеев</span>  </a>
                            <br><span class="text-gray">Главный админ</span>
                        </div>
                    </div>
                </div>
            </div>
{{--            <ul class="side-menu">--}}
{{--                <li class="slide">--}}
{{--                    <a class="side-menu__item" data-toggle="slide" href="index-2.html#"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">Продукция</span><i class="angle fa fa-angle-right"></i></a>--}}
{{--                    <ul class="slide-menu">--}}
{{--                        <li><a class="slide-item" href="index.html">BASIC</a></li>--}}
{{--                        <li><a class="slide-item" href="index.html">SANI MAX</a></li>--}}
{{--                        <li><a class="slide-item" href="index.html">SANI DELICATE</a></li>--}}
{{--                        <li><a class="slide-item" href="index.html">PHIN</a></li>--}}
{{--                        <li><a class="slide-item" href="index.html">AKTIV</a></li>--}}
{{--                        <li><a class="slide-item" href="index.html">DEKALZER</a></li>--}}
{{--                        <li><a class="slide-item" href="index.html">DRY DEZ</a></li>--}}
{{--                        <li><a class="slide-item" href="index.html">SOFT</a></li>--}}
{{--                        <li><a class="slide-item" href="index.html">DEZO PROM CIP</a></li>--}}

{{--                    </ul>--}}
{{--                </li>--}}

{{--            </ul>--}}
        </aside>

        <!-- Main Content-->
        <div class="app-content  my-3 my-md-5">
            <div class="side-app">
{{--                Hlebniy kroshka--}}
                <div class="page-header">
{{--                    <h4 class="page-title">Продукция</h4>--}}
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="#">Продукция</a></li>

                    </ol>
                </div>

                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Список продуктов</h3>
                            </div>
                            <div class="table-responsive">
{{--                                card-table--}}
                                <table class="table  table-vcenter text-nowrap" border="1">
                                    <thead >
                                    <tr>
                                        <th>Оглавление</th>
                                        <th>Переход на лист</th>
                                        <th>Пометки</th>
                                        <th>Правки внесены в этикетку и ТО</th>
                                        <th>Правки внесены только в базу</th>
                                        <th></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">D001</th>
                                        <td><a href="{{route('getPriznaksListPage')}}" class="btn btn-link">BASIC</a></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><a href="" class="btn btn-danger">Удалить</a></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">D010</th>
                                        <td><a href="" class="btn btn-link">SANI MAX</a></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><a href="" class="btn btn-danger">Удалить</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">D014</th>
                                        <td><a href="" class="btn btn-link">SANI DELICATE</a></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><a href="" class="btn btn-danger">Удалить</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">D023</th>
                                        <td><a href="" class="btn btn-link">PHIN</a></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><a href="" class="btn btn-danger">Удалить</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">D027</th>
                                        <td><a href="" class="btn btn-link">AKTIV</a></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><a href="" class="btn btn-danger">Удалить</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">D076</th>
                                        <td><a href="" class="btn btn-link">DEKALZER</a></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><a href="" class="btn btn-danger">Удалить</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">D334</th>
                                        <td><a href="" class="btn btn-link">DRY DEZ</a></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><a href="" class="btn btn-danger">Удалить</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">L410</th>
                                        <td><a href="" class="btn btn-link">SOFT</a></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><a href="" class="btn btn-danger">Удалить</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">K007</th>
                                        <td><a href="" class="btn btn-link">DEZO PROM CIP</a></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><a href="" class="btn btn-danger">Удалить</a></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- table-responsive -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--footer-->
    @include('layout.footer')
<!-- Mirrored from laravel.spruko.com/adminor/Leftmenu-Icon-DarkSidebar-Dark/index by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 May 2020 09:02:51 GMT -->
</html>