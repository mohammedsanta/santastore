<div class="inputForm">
    <form method="POST">
        <p class="success-message"><?= app()->session->getFlash('success'); ?></p>
        <label for="">date</label>
        <input type="date" name="MeetDate" value="<?= old('MeetDate') ?>">

        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['MeetDate'][0];endif; ?></p>
        
        <label for="">location</label>
        <input type="text" name="MeetLocation" value="<?= old('MeetDate') ?>">

        <?php if(app()->session->hasFlash('errors')): ?>
        <p class="errors-message"><?= @app()->session->getFlash('errors')['MeetLocation'][0];endif; ?></p>

        <input type="submit" name="submit" value="submit">
    </form>
</div>