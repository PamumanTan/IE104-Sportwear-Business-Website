<?php 
    function SaleReportItem($year, $month, $week, $count_product, $sale) {
        return '
            <tr>
                <td class="cell-center" >
                    <input type="checkbox" name="check-one" />
                </td>
                <td class="cell-center">'.$year.'</td>
                <td class="cell-center">'.$month.'</td>
                <td class="cell-center">'.$week.'</td>
                <td class="cell-center">'.$count_product.'</td>
                <td class="cell-center">'.$sale.'</td>
                <td class="cell-center cell-action">
                    <a href="#" target="_blank">
                        <img class="item-img" src="../../../assets/images/detail.svg" alt="detail" />
                    </a>
                    <a href="#" target="_blank">
                        <img class="item-img" src="../../../assets/images/printer.svg" alt="printer" />
                    </a>
                </td>
            </tr>
        ';
    }
?>