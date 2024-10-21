<footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-md-12 col-sm-12 mt-3 mt-lg-0 text-center">
                {{--                    Copyright © 2024 All rights reserved.--}}
            </div>
        </div>
    </div>
</footer>
<!-- End Footer-->		</div>
<!-- End Page -->
<!-- Back to top -->
<a href="#top" id="back-to-top" style="display: inline;"><i class="fa fa-angle-up"></i></a>

<!-- Dashboard Core -->
<script src="../assets/js/vendors/jquery-3.2.1.min.js"></script>
<script src="../assets/js/vendors/bootstrap.bundle.min.js"></script>
<script src="../assets/js/vendors/jquery.sparkline.min.js"></script>
<script src="../assets/js/vendors/selectize.min.js"></script>
<script src="../assets/js/vendors/jquery.tablesorter.min.js"></script>
<script src="../assets/js/vendors/circle-progress.min.js"></script>
<script src="../assets/plugins/rating/jquery.rating-stars.js"></script>

<!-- Fullside-menu Js-->
<script src="../assets/plugins/toggle-sidebar/sidemenu.js"></script>

<!-- Dashboard Core -->
<script src="../assets/js/index1.js"></script>
<!--Morris.js Charts Plugin -->
<script src="../assets/plugins/morris/raphael-min.js"></script>
<script src="../assets/plugins/morris/morris.js"></script>

<!-- Custom scroll bar Js-->
<script src="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Switcher Js-->
<script src="../assets/switcher/js/switcher.js"></script>

<!-- Custom Js-->
<script src="../assets/js/custom-dark.js"></script>


<script>
    function adjustWidth(selectElement) {
        // Создаем временный элемент для вычисления ширины текста
        var tempOption = document.createElement('span');
        //tempOption.style.visibility = 'hidden';
        tempOption.style.wordWrap = 'break-word'; // Отключаем переносы строк
        document.body.appendChild(tempOption);

        // Вычисляем ширину для всех опций и выбираем самую длинную
        var maxWidth = 0;
        for (var i = 0; i < selectElement.options.length; i++) {
            tempOption.textContent = selectElement.options[i].text;
            var width = tempOption.offsetWidth;
            if (width > maxWidth) {
                maxWidth = width;
            }
        }

        maxWidth+=100;

        // Устанавливаем ширину select
        selectElement.style.width = maxWidth + 'px';

        // Удаляем временный элемент
        document.body.removeChild(tempOption);
    }

    // Настроим ширину select при загрузке страницы
    window.onload = function() {
        var selectElement = document.getElementById('example-select');
        adjustWidth(selectElement);
    };
</script>
</body>
