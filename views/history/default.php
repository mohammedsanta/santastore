<div class='name-page'>
    <h1>History</h1>
</div>


<table>

    <thead>
        <th><?= $text_table_action_id ?></th>
        <th><?= $text_table_action_name ?></th>
        <th><?= $text_table_action_date ?></th>
        <th><?= $text_table_action_privilege ?></th>
    </thead>

    <tbody>

        <?php
            if(!empty($actions)){
                foreach($actions as $action){


        ?>

        <tr>
            <td><?= $action->ActionId ?></td>
            <td><?= $action->Action ?></td>
            <td><?= $action->ActionDate ?></td>
            <td><?= $action->ActionPrivileges ?></td>
        </tr>



        <?php
                }
            }else {

                ?>
                <td colspan="7">No Data Yet</td>
                <?php

            }
            ?>

    </tbody>

</table>