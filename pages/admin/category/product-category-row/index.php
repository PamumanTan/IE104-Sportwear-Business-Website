<?php
function ProductCategoryRow($id, $name, $amount)
{
    echo '
            <tr class="category-management-table-row">
                <th><input type="checkbox" class="category-row"></th>
                <th><label class="category-row">' . $id . '</label></th>
                <th><label class="category-row">' . $name . '</label></th>
                <th><label class="category-row">' . $amount . '</label></th>
                <th>
                    <img src="../../../assets/images/detail.svg" alt="detail">
                    <img src="../../../assets/images/delete.svg" alt="detail">
                </th>
            </tr>
        ';
}
