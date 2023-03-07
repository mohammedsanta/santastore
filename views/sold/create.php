<div class="inputForm">
    <?php if(app()->session->hasFlash('success')): ?>
    <p class="success-message"><?= app()->session->getFlash('success');endif; ?>
    <form method="POST">

        <label for=""><?= $text_table_sold_itemid ?></label>

        <select name="ItemId-ItemName" id="">

            <?php 
            $i = 1;
            foreach ($Item as $table): ?>
                
                <option value="<?=$table->ItemId.'.'.$table->ItemName ?>"><?= $i++ . ':' .   'Item Id:' . 'is->' . $table->ItemId . "  |Item Name:" . 'is->' . $table->ItemName ?></option>
            <?php endforeach ?>
        </select>

        <label for=""><?= $text_table_sold_customername ?></label>
        <select name="CustomerId-CustomerName" id="">

            <?php foreach ($Customer as $table): ?>
            <option value="<?= $table->CustomerId.'.'.$table->CustomerName ?>"><?= 'Customer Id:' . 'is->' . $table->CustomerId . "  |Customer Name:" . 'is->' . $table->CustomerName ?></option>
            <?php endforeach ?>
        </select>

        <input type="submit" name="submit" value="submit">

    </form>
</div>