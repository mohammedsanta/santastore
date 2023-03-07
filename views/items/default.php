

<style>

    table {
        margin: 115px auto;
        width: 75%;
    }

    thead {
        background-color: #04AA6D;
    }

    tr {
        text-align: center;
    }

    tr:nth-child(even){
        background-color: #f2f2f2;
    }

    tbody tr:hover{
        background-color: #b7b7b7;
    }
    

</style>

<a class="a-create" href="/items/create">create</a>

<table>

    <thead>
        <th><?= $text_table_items_name ?></th>
        <th><?= $text_table_items_price ?></th>
        <th><?= $text_table_items_datebuy ?></th>
        <th><?= $text_table_items_datesold ?></th>
        <th><?= $text_table_items_sold ?></th>
        <th><?= $text_table_items_cost ?></th>
        <th><?= $text_table_items_image ?></th>
        <th><?= $text_table_items_controller ?></th>
    </thead>

    <tbody>

        <?php foreach($data['items'] as $item): ?>
        <tr>



            <td><?= $item->ItemName; ?></td>
            <td><?= $item->ItemPrice; ?>.E</td>
            <td><?= $item->ItemDateBuy; ?></td>
            <td><?= $item->ItemSold; ?></td>
            <td><?= $item->ItemCost; ?></td>
            <td><?= $item->ItemDateSold; ?></td>
            <td><?= $item->ItemImg; ?></td>
            <td>E/D</td>


        </tr>
        <?php endforeach; ?>

    </tbody>

</table>