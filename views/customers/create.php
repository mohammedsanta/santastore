

<div class="inputForm">

    <p class="success-message"><?= @app()->session->getFlash('success'); ?></p>


    <form method="POST" enctype="multipart/form-data">
        <label for=""><?= $text_table_customername ?></label>
        <input type="text" name="CustomerName" value="<?= old('CustomerName') ?>">

        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['CustomerName'][0];endif; ?></p>

        <label for=""><?= $text_table_customernubmer ?></label>
        <input type="text" name="CustomerNumber" value="<?= old('CustomerNumber') ?>">

        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['CustomerNumber'][0];endif; ?></p>

        <label for=""><?= $text_table_customeraccount ?></label>
        <input type="text" name="CustomerAccount" value="<?= old('CustomerAccount') ?>">

        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['CustomerAccount'][0];endif; ?></p>

        <label for=""><?= $text_table_customerrefere ?></label>
        <input type="text" name="CustomerReferer" value="<?= old('CustomerReferer') ?>">

        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['CustomerReferer'][0];endif; ?></p>

        <label for=""><?= $text_table_customerage ?></label>
        <input type="text" name="CustomerAge" value="<?= old('CustomerAge') ?>">

        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['CustomerAge'][0];endif; ?></p>

        <label for=""><?= $text_table_customeraddress ?></label>
        <input type="text" name="CustomerAddress" value="<?= old('CustomerAddress') ?>">

        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['CustomerAddress'][0];endif; ?></p>

        <label for=""><?= $text_table_customeris ?></label>
        <input type="text" name="CustomerIs" value="<?= old('CustomerIs') ?>">

        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['CustomerIs'][0];endif; ?></p>

        <label for=""><?= $text_table_customerabout ?></label>
        <input type="text" name="CustomerAbout" value="<?= old('CustomerAbout') ?>">

        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['CustomerAbout'][0];endif; ?></p>

        <label for=""><?= $text_table_customerpicture ?></label>
        <input type="file" name="CustomerPicture">

        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['CustomerPicture'][0];endif; ?></p>

        <input type="submit" name="submit" value="submit">
    </form>
</div>