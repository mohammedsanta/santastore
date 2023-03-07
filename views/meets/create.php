<div class="inputForm">
    <form method="POST">
        <p class="success-message"><?= app()->session->getFlash('success'); ?></p>
        <label for=""><?= $text_table_meetsdate ?></label>
        <input type="date" name="MeetDate" id="">

        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['MeetDate'][0];endif; ?></p>
        
        <label for=""><?= $text_table_meetslocation ?></label>
        <input type="text" name="MeetLocation" id="">

        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['MeetLocation'][0];endif; ?></p>

        <input type="submit" name="submit" value="submit">
    </form>
</div>