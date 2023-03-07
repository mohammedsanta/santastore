<div class="inputForm">
    <form method="POST">
        <?php if(app()->session->hasFlash('success')): ?>
        <p class="success-message"><?= @app()->session->getFlash('success');endif; ?></p>
        <label for=""><?= $text_table_idiot_itemname ?></label>
        <input type="text" name="ItemName" value="<?= old('ItemName') ?>">
        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['ItemName'][0];endif; ?></p>
        <label for=""><?= $text_table_idiot_datebuy ?></label>
        <input type="date" name="ItemdateBuy" value="<?= old('ItemdateBuy') ?>">
        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['ItemdateBuy'][0];endif; ?></p>
        <label for=""><?= $text_table_idiot_about ?></label>
        <input type="text" name="ItemAbout" value="<?= old('ItemAbout') ?>">
        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['ItemAbout'][0];endif; ?></p>
        <input type="submit" name="submit" value="submit">
    </form>
</div>