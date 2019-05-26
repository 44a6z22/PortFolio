<!--
Lets start with a single html5 progress element. Currently our progress bar is in the indeterminate state. Lets change the status by adding 'max' and 'value' attribute to our progress element.

We are almost done styling a single progress bar, except adding fallback technique for browsers that do not support progress element. The idea is to simulate the visual styles of the progress bar using `div` and `span`.

Note:- To imitate the older browsers and help us style the fallback technique, we wil temporarily comment-out the progress tag.
-->


<?php

// $skill = new Skill($connection);
// $res = $skill->getSkills();

?>
<div class="skillsContainer">
    <ul class="skills">
        <li>
            <h2>Frontend</h2>

            <?php
            $res = $skill->getSkillsByType('frontEnd');
            foreach ($res as $r) {
                ?>
                <!-- HTML5 -->
                <p style="width:<?= $r['persentage'] ?>%" data-value="<?= $r['persentage'] ?>"><?= $r['skillName'] ?></p>
                <progress max="100" value="<?= $r['persentage'] ?>" class="html5">
                    <!-- Browsers that support HTML5 progress element will ignore the html inside `progress` element. Whereas older browsers will ignore the `progress` element and instead render the html inside it. -->
                    <div class="progress-bar">
                        <span style="width: <?= $r['persentage'] ?>%"><?= $r['persentage'] ?>%</span>
                    </div>
                </progress>

            <?php
        }
        ?>



        </li>
        <li>
            <h2>Backend</h2>

            <?php
            $res = $skill->getSkillsByType('backEnd');
            foreach ($res as $r) {
                ?>
                <!-- HTML5 -->
                <p style="width:<?= $r['persentage'] ?>%" data-value="<?= $r['persentage'] ?>"><?= $r['skillName'] ?></p>
                <progress max="100" value="<?= $r['persentage'] ?>" class="html5">
                    <!-- Browsers that support HTML5 progress element will ignore the html inside `progress` element. Whereas older browsers will ignore the `progress` element and instead render the html inside it. -->
                    <div class="progress-bar">
                        <span style="width: <?= $r['persentage'] ?>%"><?= $r['persentage'] ?>%</span>
                    </div>
                </progress>

            <?php
                }
            ?>

        </li>
    </ul>
</div>