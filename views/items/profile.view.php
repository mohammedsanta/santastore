<div class="container">

    <div class="info">

        <h1>Name</h1>

        <img src="\<?= $item->ItemImg ?>" alt="" class="profile-picture">

    </div>

    <div class="details">

        <p><?= $text_table_itemname ?></p>
        <div><?= $item->ItemPrice ?></div>
        <p><?= $text_table_itemprice ?></p>
        <div><?= $item->ItemDateBuy ?></div>
        <p><?= $text_table_itemdatebuy ?></p>
        <div><?= $item->ItemSold ?></div>
        <p><?= $text_table_itemsold ?></p>
        <div><?= $item->ItemCost ?></div>
        <p><?= $text_table_itemcost ?></p>
        <div><?= $item->ItemDateSold ?></div>
        <p><?= $text_table_itemdatesold ?></p>

    </div>


</div>