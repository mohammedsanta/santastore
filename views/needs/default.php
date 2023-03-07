<div class='name-page'>
    <h1>Needs</h1>
</div>

<a class="a-create" href="/needs/create">Create</a>

<table>

    <thead>
        <th><?= $text_table_need_itemname ?></th>
        <th><?= $text_table_need_numberneed ?></th>
        <th><?= $text_table_need_numbersold ?></th>
        <th><?= $text_table_need_controller ?><s/th>
    </thead>

    <tbody>

        <?php
            if(!empty($needs)){
                foreach($needs as $need){


        ?>

        <tr>

            <td><?= $need->ItemName ?></td>
            <td><?= $need->NumberNeeds ?></td>
            <td><?= $need->NumberSold ?></td>
            <td>

                    <a href="/needs/edit/<?= $need->ItemId ?>">E</a>
                    <a href="/needs/delete/<?= $need->ItemId ?>">D</a>

            </td>

            

        </tr>



        <?php
                }
            }
            ?>

    </tbody>

</table>