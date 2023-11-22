<?php 
    include "../../../helpers/saleReport/timeNavBarActive.php";
    function TimeNavBar() {
        return '
            <div class="time-navbar">
                <a href=".?t=week" class="time-navbar__item '.addIfActive('week').'">Tuần</a>
                <a href=".?t=month" class="time-navbar__item '.addIfActive('month').'">Tháng</a>
                <a href=".?t=quarter" class="time-navbar__item '.addIfActive('quarter').'">Quý</a>
                <a href=".?t=year" class="time-navbar__item '.addIfActive('year').'">Năm</a>
            </div>
        ';
    }
?>
