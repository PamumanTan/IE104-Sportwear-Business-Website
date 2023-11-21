<?php
    function CustomerItem($id, $name, $total_payment, $count_purchase) {
        return '
            <tr>
                <td class="cell-center" >
                    <input type="checkbox" name="check-one" />
                </td>
                <td class="cell-center" >'.$id.'</td>
                <td class="list-container__name">'.$name.'</td>
                <td>'.$total_payment.'</td>
                <td>'.$count_purchase.'</td>
                <td class="cell-center">
                    <a href="#" target="_blank">
                        <img class="item-img" src="../../assets/images/detail.svg" alt="customer infomation detail" />
                    </a>
                </td>
            </tr>
        ';
    }
?>