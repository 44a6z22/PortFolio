
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