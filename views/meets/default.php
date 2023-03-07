<div class='name-page'>
    <h1>Meets</h1>
</div>

<a class="a-create" href="/meets/create">Create</a>

<table>

    <thead>
        <th><?= $text_table_meetsdate ?></th>
        <th><?= $text_table_meetslocation ?></th>
        <th><?= $text_table_meetscontroller ?></th>
    </thead>

    <tbody>

        <?php
            if(!empty($meets)){
                foreach($meets as $meet){


        ?>

        <tr>

            <td><?= $meet->MeetDate ?></td>
            <td><?= $meet->MeetLocation ?></td>
            <td>
                <a href="meets/edit/<?= $meet->MeetId ?>"></a>
                <a href="meets/delete/<?= $meet->MeetId ?>">D</a>
            </td>

        </tr>



        <?php
                }
            }
            ?>

    </tbody>

</table>