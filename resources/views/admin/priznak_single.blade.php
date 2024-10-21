@include('layout.header')
<body class="app sidebar-mini">
<style>
    /* Container for the custom select */
    .custom-select {
        position: relative;
        display: inline-block;
        width: 100%;
    }

    /* Box that mimics the appearance of a select */
    .select-box {
        padding: 5px;
        background-color: #fff;
        cursor: pointer;
        overflow: hidden;
        background-color: #42364e;
        margin-top: -5px;
    }

    /* Hidden options (ul) container */
    .options-container {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        border: 1px solid #ccc;
        background-color: #42364e;
        z-index: 1000;
        max-height: 200px;
        overflow-y: auto;
    }

    /* Individual option (li) styling */
    .option {
        padding: 10px;
        cursor: pointer;
        border-bottom: 1px solid #eee;
        white-space: normal; /* Allow wrapping of text */
        word-wrap: break-word;
    }

    /* Hover effect for options */
    .option:hover {
        background-color: #f1f1f1;
        color: black;
    }

    /* Hide last border for the last option */
    .option:last-child {
        border-bottom: none;
    }

    /* Arrow on the select box */
    .select-box::after {
        content: '▼';
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
    }

    /* Active state of the select box */
    .select-box.active::after {
        content: '▲';
    }
</style>

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
                        <img src="../assets/images/faces/female/25.jpg" alt="user-img" class="avatar avatar-md brround">
                    </div>
                    <div class="user-info">
                        <div class="mb-2">
                            <a href="index-2.html#" class="" data-toggle="" aria-haspopup="true" aria-expanded="false"> <span class="font-weight-semibold text-white">Павел Алексеев</span>  </a>
                            <br><span class="text-gray">Главный админ</span>
                        </div>
                    </div>
                </div>
            </div>

        </aside>

        <!-- Main Content-->
        <div class="app-content  my-3 my-md-5">
            <div class="side-app">
                <div class="page-header">
                    <h4 class="page-title">Признак No. {{$priznak->priznak_id}}</h4>
{{--                    <h5><a href="{{route('getPriznaksListPage')}}">Признаки</a></h5>--}}
{{--                                        <ol class="breadcrumb">--}}
{{--                                            <li class="breadcrumb-item"><a href="#">Продукция</a></li>--}}
{{--                    --}}{{--                        <li class="breadcrumb-item active" aria-current="page">D001</li>--}}
{{--                    --}}{{--                        <li class="breadcrumb-item active" aria-current="page">Признаки</li>--}}
{{--                                        </ol>--}}
                </div>
                <form  method="post" action="{{route('addPriznakOption')}}" class="card">
                    @csrf
                    <div class="card-header">
                        <h3 class="card-title">Редактировать признак</h3>
                    </div>
                    <div class="card-body">
                        <p>База 2023</p>
                        <div class="custom-select" >
                            <input class="baza2023" type="hidden" name="baza2023_0" value="{{$priznak->baza}}">
                            <div class="select-box">{{$priznak->baza}}</div>
                            <ul class="options-container" >
                                <li class="option" >Щелочное концентрированное низкопенное средство для регулярного мытья полов с умеренной степенью загрязнения</li>
                                <li class="option" >Щелочное концентрированное низкопенное средство для мытья полов с умеренной степенью загрязнения</li>
                                <li class="option" >Щелочное концентрированное низкопенное средство для мытья полимерных полов</li>
                                <li class="option" >Щелочное концентрированное низкопенное средство для мытья полов с сильной степенью загрязнения</li>

                            </ul>
                        </div>

                        <br>
                        <p style="margin-top: 20px;">Этикетка 1л_23г</p>
                        <div class="custom-select" >
                            <input class="baza2023" type="hidden" name="baza2023_0" value="{{$priznak->etiketka_1l}}">
                            <div class="select-box">{{$priznak->etiketka_1l}}</div>
                            <ul class="options-container" >
                                <li class="option" >Щелочное концентрированное низкопенное средство для регулярного мытья полов с умеренной степенью загрязнения</li>
                                <li class="option" >Щелочное концентрированное низкопенное средство для мытья полов с умеренной степенью загрязнения</li>
                                <li class="option" >Щелочное концентрированное низкопенное средство для мытья полимерных полов</li>
                                <li class="option" >Щелочное концентрированное низкопенное средство для мытья полов с сильной степенью загрязнения</li>

                            </ul>
                        </div>

                    </div>
                    <div class="card-footer text-right">
                        <div class="d-flex">
                            <button type="submit" class="btn btn-primary ml-auto">Сохранить</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        // Function to initialize the custom select dropdowns
        function initializeCustomSelects() {
            const customSelects = document.querySelectorAll('.custom-select');

            customSelects.forEach(select => {
                const selectBox = select.querySelector('.select-box');
                const optionsContainer = select.querySelector('.options-container');
                const options = optionsContainer.querySelectorAll('.option');


                // Toggle dropdown on click
                selectBox.addEventListener('click', () => {
                    // Close all other open dropdowns
                    customSelects.forEach(otherSelect => {
                        const otherOptionsContainer = otherSelect.querySelector('.options-container');
                        const otherSelectBox = otherSelect.querySelector('.select-box');
                        if (otherSelect !== select) {
                            otherOptionsContainer.style.display = 'none';
                            otherSelectBox.classList.remove('active');
                        }
                    });

                    optionsContainer.style.display = optionsContainer.style.display === 'block' ? 'none' : 'block';
                    selectBox.classList.toggle('active');
                });

                // Update selected value and close dropdown on option click
                options.forEach(option => {
                    option.addEventListener('click', (e) => {
                        let inp = selectBox.previousElementSibling;
                        selectBox.textContent = e.target.textContent;
                        inp.value = e.target.textContent;
                        optionsContainer.style.display = 'none';
                        selectBox.classList.remove('active');
                    });
                });
            });

            // Close dropdown if clicked outside
            window.addEventListener('click', (e) => {
                if (!e.target.closest('.custom-select')) {
                    customSelects.forEach(select => {
                        const optionsContainer = select.querySelector('.options-container');
                        const selectBox = select.querySelector('.select-box');
                        optionsContainer.style.display = 'none';
                        selectBox.classList.remove('active');
                    });
                }
            });
        }

        // Initialize all custom selects when the DOM is ready
        document.addEventListener('DOMContentLoaded', initializeCustomSelects);
    </script>
    <!--footer-->
@include('layout.footer')
<!-- Mirrored from laravel.spruko.com/adminor/Leftmenu-Icon-DarkSidebar-Dark/index by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 May 2020 09:02:51 GMT -->
    </html>