<div class='name-page'>
    <h1>HowMany</h1>
</div>

<table>

    <thead>
        <th><?= $text_table_howmanycustomer ?></th>
        <th><?= $text_table_howmanyfiledsolditem ?></th>
        <th><?= $text_table_howmanyidiotitem ?></th>
        <th><?= $text_table_howmanyitem ?></th>
        <th><?= $text_table_howmanysolditem ?></th>
        <th><?= $text_table_howmanymeets ?></th>
        <th><?= $text_table_howmanyitem ?></th>
        <th><?= $text_table_howmanyusers ?></th>
    </thead>

    <tbody>

        <tr>

            <td><?= $data['customers'] ?></td>
            <td><?= $data['failedItem'] ?></td>
            <td><?= $data['idiotItems'] ?></td>
            <td><?= $data['items'] ?></td>
            <td><?= $data['soldItems'] ?></td>
            <td><?= $data['meets'] ?></td>
            <td><?= $data['items'] ?></td>
            <td><?= $data['users'] ?></td>

        </tr>

    </tbody>

</table>