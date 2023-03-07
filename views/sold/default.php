<div class='name-page'>
    <h1>Solds</h1>
</div>

<a class="a-create" href="/sold/create">Create</a>

<table>

    <thead>
        <th><?= $text_table_sold_itemid ?></th>
        <th><?= $text_table_sold_itemname ?></th>
        <th><?= $text_table_sold_itemprice ?></th>
        <th><?= $text_table_sold_itemcost ?></th>
        <th><?= $text_table_sold_itemimg ?></th>
        <th><?= $text_table_sold_customerid ?></th>
        <th><?= $text_table_sold_customername ?></th>
        <th><?= $text_table_sold_customernumber ?></th>
        <th><?= $text_table_sold_controller ?></th>
    </thead>

    <tbody>

        <?php
            if(!empty($solds)){
                foreach($solds as $sold){


        ?>

        <tr>

            <td><?= $sold->ItemId ?></td>
            <td><?= $sold->ItemName ?></td>
            <td><?= $sold->ItemPrice ?></td>
            <td><?= $sold->ItemCost ?></td>
            <td><?= $sold->ItemImg ?></td>
            <td><?= $sold->CustomerId ?></td>
            <td><?= $sold->CustomerName ?></td>
            <td><?= $sold->CustomerNumber ?></td>
            <td>E/D</td>

        </tr>



        <?php
                }
            }
            ?>

    </tbody>

</table>