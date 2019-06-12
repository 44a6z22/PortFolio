    <div class="flex-container">

        <div class="aboutme">

            <!-- profile picture -->
            <div class="profilePic">
                <img src="assets/images/pic.jpg" class="rounded-img">
            </div>
            <!-- /profile picture -->



            <!-- description -->
            <div class="discription">
                <p> <?= $lang[$_SESSION['lang']]['desc'] ?> </p>
            </div>
            <!-- /description -->

            <!-- resume  -->
            <div class="resume">
                <!-- <img src="" alt="" class="resume-img"> -->
                <a class="btn btn-resume" href="assets/attachement/cv.pptx"  id="resume">RESUME</a>
            </div>
            <!-- /resume -->
            <!-- more -->
            <div class="moreAbout">
                <div class="projects">
                    <h3>Tp Projects</h3>
                    <ul>
                        <?php
                        $project = new Project($connection);
                        $res = $project->getProjects();
                        foreach ($res as $r) {
                            ?>
                            <li>
                                <a class="button" href="<?= $r['link'] ?>"> <?= $r['projectName'] ?></a>


                            </li>
                        <?php
                    }
                    ?>
                    </ul>

                </div>
                <div class="otherstuff">
                    <div class="hobbies">
                        <h3><?= $lang[$_SESSION['lang']]['hobbie'] ?></h3>
                        <p>
                            Sports (footbal, tennis, hockeyball), Music, Web technologies, Coding )
                        </p>
                    </div>

                    <div class="addons">
                        <h3><?= $lang[$_SESSION['lang']]['browsers'] ?> / IDE</h3>
                        <p>
                            Firefox & Chrome / Sublime Text & Visual Studio
                        </p>
                    </div>
                </div>
            </div>
            <!-- /more -->

            <!-- map -->
            <div class="map-container">
                <?php

                include "map.php";
                ?>
            </div>
            <!-- /map -->

        </div>
    </div>