
<div class="inputForm">
    <form method="POST" enctype="multipart/form-data">
        <label for=""><?= $text_table_items_name ?></label>
        <input type="text" name="ItemName" value="<?= old('ItemName'); ?>">
        <?php if (app()->session->hasFlash('errors')): ?>
            <p class="errors-message">
        <?= @app()->session->getFlash('errors')['ItemName'][0]; ?>
        </p>
        <?php endif; ?>
        <label for=""><?= $text_table_items_price ?></label>
        <?php if(app()->session->hasFlash('errors')):?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['ItemPrice'][0] ;endif;?></p>
        <input type="text" name="ItemPrice" value="<?= old('ItemPrice'); ?>">
        <label for=""><?= $text_table_items_datebuy ?></label>
        <?php if(app()->session->hasFlash('errors')):?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['ItemDateBuy'][0] ;endif;?> </p>
        <input type="date" name="ItemDateBuy" value="<?= old('ItemDateBuy'); ?>">
        <label for=""><?= $text_table_items_datesold ?></label>
        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['ItemSold'][0];endif; ?></p>
        <input type="text" name="ItemSold" value="<?= old('ItemSold'); ?>">
        <label for=""><?= $text_table_items_sold ?></label>
        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['ItemCost'][0];endif; ?></p>
        <input type="text" name="ItemCost" value="<?= old('ItemCost'); ?>">
        <label for=""><?= $text_table_items_cost ?></label>
        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['ItemDateSold'][0];endif; ?></p>
        <input type="date" name="ItemDateSold" value="<?= old('ItemDateSold'); ?>">
        <label for=""><?= $text_table_items_image ?></label>
        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['ItemImg'][0];endif; ?></p>
        <input type="file" name="ItemImg" value="<?= old('ItemImg'); ?>">
        <input type="submit" name="submit" value="submit">
    </form>
</div>