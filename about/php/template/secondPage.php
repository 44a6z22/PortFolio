<!-- info sec  -->
<div style="display:none;" id="secondary-page">

    <!-- about sec -->
    <div class=" blue about">
        <div class="about--title">
            <h1 name='about'><?= $lang[$_SESSION['lang']]['about'] ?></h1>
        </div>
        <div class="content about--content">
            <?php
                include "php/template/about.php";
            ?>
        </div>

        <a href="#" class="arrow arrow-up about"><i class="fa fa-angle-down fa-lg"></i></a>
    </div>
    <!-- /about sec -->


    <!-- work sec -->
    <div class=" white skills">
        <div class="skills--title">
            <a href="#skills-sec">
                <h1 name='skills'><?= $lang[$_SESSION['lang']]['skills'] ?></h1>
            </a>

        </div>
        <div class="content skills--content">
            <?php
                include "php/template/skills.php";
            ?>
        </div>

        <a href="#" class="arrow arrow-down skills"><i class="fa fa-angle-up fa-lg"></i></a>
    </div>
    <!-- /work sec -->


</div>
<!-- /info  sec  -->