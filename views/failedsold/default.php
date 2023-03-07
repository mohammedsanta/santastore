<div class='name-page'>
    <h1>Failed Sold</h1>
</div>

<a class="a-create" href="/failedsold/create">Create</a>

<table>

    <thead>
        <th><?= $text_table_item_name ?></th>
        <th><?= $text_table_customer_name ?></th>
        <th><?= $text_table_reasone ?></th>
        <th><?= $text_table_date ?></th>
        <th><?= $text_table_items_controller ?></th>
    </thead>

    <tbody>

        <?php
            if(!empty($faileds)){
                foreach($faileds as $failed){


        ?>

        <tr>

            <td><?= $failed->ItemName ?></td>
            <td><?= $failed->CustomerName ?></td>
            <td><?= $failed->Reasone ?></td>
            <td><?= $failed->Date ?></td>
            <td>

                    <a href="/failedsold/edit/<?= $failed->FailedId ?>">E</a>
                    <a href="/failedsold/delete/<?= $failed->FailedId ?>">D</a>

            </td>

            

        </tr>



        <?php
                }
            }
            ?>

    </tbody>

</table>