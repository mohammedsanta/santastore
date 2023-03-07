<div class="inputForm">
    <?php if(app()->session->hasFlash('success')): ?>
    <p class="success-message"><?= @app()->session->getFlash('success');endif; ?></p>
    <form method="POST">
        <label for=""><?= $text_table_item_name ?></label>
        <input type="text" name="ItemName" value="<?= old('ItemName'); ?>">
        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['ItemName'][0];endif; ?></p>
        <label for=""><?= $text_table_customer_name ?></label>
        <input type="text" name="CustomerName" value="<?= old('CustomerName'); ?>">
        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['CustomerName'][0];endif; ?></p>
        <label for=""><?= $text_table_reasone ?></label>
        <input type="text" name="Reasone" value="<?= old('Reasone'); ?>">
        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['Reasone'][0];endif; ?></p>
        <label for=""><?= $text_table_date ?></label>
        <input type="date" name="Date" value="<?= old('Date'); ?>">
        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['Date'][0];endif; ?></p>
        <input type="submit" name="submit" value="submit">
    </form>
</div>