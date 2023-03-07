<div class='name-page'>
    <h1>Customers</h1>
</div>

<a class="a-create" href="/customers/create">create</a>

<table>

    <thead>
        <th><?= $text_table_customername ?></th>
        <th><?= $text_table_customernubmer ?></th>
        <th><?= $text_table_customeraccount ?></th>
        <th><?= $text_table_customerrefere ?></th>
        <th><?= $text_table_customerage ?></th>
        <th><?= $text_table_customeraddress ?></th>
        <th><?= $text_table_customeris ?></th>
        <th><?= $text_table_customerabout ?></th>
        <th><?= $text_table_customerpicture ?></th>
        <th><?= $teble_controller ?></th>
    </thead>

    <tbody>

        <?php
                if(!empty($data)){
                foreach($data as $customer){


        ?>

        <tr>

            <td>
                <a href="/customers/profile/<?= $customer->CustomerId ?>"><?= $customer->CustomerName ?></a>
            </td>
            <td><?= $customer->CustomerNumber ?></td>
            <td><?= $customer->CustomerAccount ?></td>
            <td><?= $customer->CustomerReferer ?></td>
            <td><?= $customer->CustomerAge ?></td>
            <td><?= $customer->CustomerAddress ?></td>
            <td><?= $customer->CustomerIs ?></td>
            <td><?= $customer->CustomerAbout ?></td>
            <td>
                <div>
                    <img src="<?= $customer->CustomerPicture ?>" class="disply-Picture">
                </div>
            </td>
            <td>
                <a href="/customers/edit/<?= $customer->CustomerId ?>">E</a>
                <a href="/customers/delete/<?= $customer->CustomerId ?>">D</a>
            </td>

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