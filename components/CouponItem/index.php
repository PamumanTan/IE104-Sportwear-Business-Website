<?php
    function CouponItem($id, $percent, $product_type, $start_date, $end_date) {
        echo '
            <tr>
                <td class="cell-center" >
                    <input type="checkbox" name="check-one" />
                </td>
                <td class="cell-center" >'.$id.'</td>
                <td class="cell-center">'.$percent.'</td>
                <td class="list-container__name cell-center">'.$product_type.'</td>
                <td class="cell-center">'.$start_date.'</td>
                <td class="cell-center">'.$end_date.'</td>
                <td class="cell-center cell-action">
                    <a onclick="openUpdateModal('.$id.')" href="">
                        <img src="/assets/images/detail.svg" alt="customer infomation detail" />
                    </a>
                    <a onclick="deleteCoupon('.$id.')" href="">
                        <img src="/assets/images/delete.svg" alt="customer infomation detail" />
                    </a>
                </td>
            </tr>
        ';
    }
?>