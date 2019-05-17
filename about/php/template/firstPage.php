<!-- landing page -->
<div class="container" id="main-page">

    <!-- professionnal info-->
    <div class="profissional-info">
        <div class="availibility">
            <i class="fa fa-battery-full"></i>
            <span> <?= $lang[$_SESSION['lang']][$po->getStat()] ?></span>
        </div>
        <div class="projectCounter">

        </div>
    </div>
    <!-- /professionnal info-->

    <!-- presoanl info-->
    <div class="personnal-info">

        <div class="email">
            <i class="fa fa-paper-plane"></i>
            <span><?php echo $po->getEmail() ?> </span>
        </div>

        <div class="Github">
            <i class="fa fa-github"></i>
            <span>github.com/44a6z22</span>
        </div>

        <div class="twitter">
            <i class="fa fa-twitter"></i>
            <span>44a6z2@</span>
        </div>

    </div>
    <!-- /presoanl info-->

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