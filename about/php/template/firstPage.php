<!-- landing page -->
<div class="container" id="main-page">

    <div class="listIcon" id="menu">
        <label for="ok">
            <i class="fa fa-bars "></i>
        </label>
        <input type="checkbox" id="ok" hidden >

        <?php include "sidemenu.php"; ?>
    </div>

    <?php
    include "info.php";
    ?>


    <!-- TITLE-->
    <div class="center">
        <h2 id='title'>

            <span id="lastName">
                <?= $lang[$_SESSION['lang']]['firstName'] ?>
            </span>
            <?= $lang[$_SESSION['lang']]['lastName'] ?>
        </h2>

        <h5 id="subTitle"> <?= $lang[$_SESSION['lang']]['fullstack'] ?></h5>
    </div>
    <!-- /TITLE-->


</div>
<!-- /landing page -->