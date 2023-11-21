<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>MVC - PHP</title>
        <link rel="stylesheet" type="text/css" href="<?php echo SITE_ROOT?>css/main_style.css">
        <?php if($viewData['style']) echo '<link rel="stylesheet" type="text/css" href="'.$viewData['style'].'">'; ?>
    </head>
    <body>
        <header style="background: linear-gradient(90deg, rgba(238,174,202,1) 0%, rgba(148,175,233,1) 100%);">
            <div id="user"><em><?= $_SESSION['userlastname']." ".$_SESSION['userfirstname'] ?></em></div>
            <h1 class="header">Szoftverleltár alkalmazás</h1>
        </header>
        <nav style="background: linear-gradient(321deg, rgba(238,174,202,1) 0%, rgba(148,175,233,1) 100%);">
            <?php echo Menu::getMenu($viewData['selectedItems']); ?>
        </nav>
        <aside  class="col col-md col-lg" style="background: linear-gradient(90deg, rgba(63,94,251,1) 0%, rgba(252,79,70,1) 100%);">
                <p></p>
        </aside>
        <section class="col col-md col-lg"  style="background: linear-gradient(321deg, rgba(238,174,202,1) 0%, rgba(148,175,233,1) 100%);">
            <?php if($viewData['render']) include($viewData['render']); ?>
        </section>
        <footer style="background: linear-gradient(90deg, rgba(238,174,202,1) 0%, rgba(148,175,233,1) 100%);">&copy; Szoftverleltár Bt. <?= date("Y") ?></footer>
    </body>
</html>
