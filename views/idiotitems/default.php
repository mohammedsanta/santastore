<div class='name-page'>
    <h1>Idiot Items</h1>
</div>

<a class="a-create" href="/idiotitems/create">Create</a>

<table>

    <thead>
        <th><?= $text_table_idiot_itemname ?></th>
        <th><?= $text_table_idiot_datebuy ?></th>
        <th><?= $text_table_idiot_about ?></th>
        <th><?= $text_table_idiot_controller ?></th>
    </thead>

    <tbody>

        <?php
            if(!empty($idiotitems)){
                foreach($idiotitems as $idiotitem){


        ?>

        <tr>

            <td><?= $idiotitem->ItemName ?></td>
            <td><?= $idiotitem->ItemdateBuy ?></td>
            <td><?= $idiotitem->ItemAbout ?></td>
            <td>

                    <a href="/idiotitems/edit/<?= $idiotitem->ItemId ?>">E</a>
                    <a href="/idiotitems/delete/<?= $idiotitem->ItemId ?>">D</a>

            </td>

            

        </tr>



        <?php
                }
            }
            ?>

    </tbody>

</table>