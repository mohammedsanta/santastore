<div class='name-page'>
    <h1>Users</h1>
</div>

<a class="a-create" href="/users/create">Create</a>

<table>

    <thead>
        <th><?= $text_table_users_username ?></th>
        <th><?= $text_table_users_firstname ?></th>
        <th><?= $text_table_users_lastname ?></th>
        <th><?= $text_table_users_email ?></th>
        <th><?= $text_table_usercontroller ?></th>
    </thead>

    <tbody>

        <?php
            if(!empty($data)){
                foreach($users as $user){


        ?>
            <td><?= $user->Username ?></td>
            <td><?= $user->FirstName ?></td>
            <td><?= $user->LastName ?></td>
            <td><?= $user->Email ?></td>
            <td>

                    <a href="/users/edit/<?= $user->UserId ?>">E</a>
                    <a href="/users/delete/<?= $user->UserId ?>">D</a>

            </td>

            

        </tr>



        <?php
                }
            }
            ?>

    </tbody>

</table>