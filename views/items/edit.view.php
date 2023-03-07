<div class="inputForm">
    <form method="POST">
        <label for=""><?= $text_table_itemname ?></label>
        <input type="text" name="ItemName" id="" value="<?= $item->ItemName ?>">
        <label for=""><?= $text_table_itemprice ?></label>
        <input type="text" name="ItemPrice" id="" value="<?= $item->ItemPrice ?>">
        <label for=""><?= $text_table_itemdatebuy ?></label>
        <input type="date" name="ItemDateBuy" id="" value="<?= $item->ItemDateBuy ?>">
        <label for=""><?= $text_table_itemsold ?></label>
        <input type="text" name="ItemSold" id="" value="<?= $item->ItemSold ?>">
        <label for=""><?= $text_table_itemcost ?></label>
        <input type="text" name="ItemCost" id="" value="<?= $item->ItemCost ?>">
        <label for=""><?= $text_table_itemdatesold ?></label>
        <input type="date" name="ItemDateSold" id="" value="<?= $item->ItemDateSold ?>">
        <label for=""><?= $text_table_itemimg ?></label>
        <input type="text" name="ItemImg" id="" value="<?= $item->ItemImg ?>">
        <input type="submit" name="submit" value="submit">
    </form>
</div>