<div class="inputForm">
    <?php if(app()->session->hasFlash('success')): ?>
    <p class="success-message"><?= app()->session->getFlash('success');endif; ?>
    <form method="POST">
        <label for=""><?= $text_table_need_itemname ?></label>
        <input type="text" name="ItemName" value="<?= old('ItemName') ?>">
        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['ItemName'][0];endif; ?></p>
        <label for=""><?= $text_table_need_numberneed ?></label>
        <input type="number" name="NumberNeeds" value="<?= old('NumberNeeds') ?>">
        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['NumberNeeds'][0];endif; ?></p>
        <label for=""><?= $text_table_need_numbersold ?></label>
        <input type="number" name="NumberSold" value="<?= old('NumberSold') ?>">
        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['NumberSold'][0];endif; ?></p>
        <input type="submit" name="submit" value="submit">
    </form>
</div>