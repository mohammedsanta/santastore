<div class="inputForm">
    <?php if(app()->session->hasFlash('success')): ?>
    <p class="success-message"><?= @app()->session->getflash('success');endif; ?></p>
    <form method="POST">
        <label for=""><?= $text_table_users_username ?></label>
        <input type="text" name="Username" id="" value="<?= @$_POST['Username'] ?>">
        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getflash('errors')['Username'][0];endif; ?></p>
        <label for=""><?= $text_table_users_firstname ?></label>
        <input type="text" name="FirstName" id="">
        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getflash('errors')['FirstName'][0];endif; ?></p>
        <label for=""><?= $text_table_users_lastname ?></label>
        <input type="text" name="LastName" id="">
        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getflash('errors')['LastName'][0];endif; ?></p>
        <label for=""><?= $text_table_users_password ?></label>
        <input type="password" name="Password" id="">
        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getflash('errors')['Password'][0];endif; ?></p>
        <label for=""><?= $text_table_users_cpassword ?></label>
        <input type="password" name="CPassword" id="">
        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getflash('errors')['CPassword'][0];endif; ?></p>
        <label for=""><?= $text_table_users_email ?></label>
        <input type="email" name="Email" id="">
        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getflash('errors')['Email'][0];endif; ?></p>
        <label for=""><?= $text_table_users_cemail ?></label>
        <input type="email" name="CEmail" id="">
        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getflash('errors')['CEmail'][0];endif; ?></p>
        <input type="submit" name="submit" value="submit">
    </form>
</div>