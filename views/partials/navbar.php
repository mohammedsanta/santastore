<header>

<div class="header-top">

    <div>
        <a href="/customers"><?= $header_customer ?></a>
        <a href="/meets"><?= $header_mymeets ?></a>
        <a href="/idiotitems"><?= $header_items ?></a>
    </div>

    <div>

        <?php if(!isset($_SESSION['user_profile'])): ?>
        <a href="/login"><?= $header_login ?></a>
        <?php endif; ?>
        <a href="/users"><?= $header_user ?></a>
        <a href="/language"><?= $header_language ?> </a>
    </div>

    <div>
        <a href="/sold"><?= $header_sold ?></a>
        <a href="/needs"><?= $header_needs ?></a>
        <a href="/history"><?= $header_history ?></a>
    </div>

</div>

<div class="header-bottom">

    <div>
        <a href="/failedsold"><?= $header_failed ?></a>
        <!-- <a href="#"></a> -->
        <a href="/howmany"><?= $header_hotmany ?></a>
    </div>

    <div class="title-container">
        <a href="/items" class='title-santa'><?= @profile('Username') ?></a>
    </div>

    <div>
        <!-- <a href="#"></a> -->
        <a href="/analyze"><?= $header_budgetandanalyze ?></a>
        <a href="/auth/logout"><?= $header_logout ?></a>
    </div>

</div>

</header>