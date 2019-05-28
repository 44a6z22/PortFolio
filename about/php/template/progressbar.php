<div class="set-size charts-container">


    <?php
    $res = $skill->getSkillsByType('frontEnd');
    foreach ($res as $r) {
        ?>
        <!-- HTML5 -->
        <!-- <p style="width:<?= $r['persentage'] ?>%" data-value="<?= $r['persentage'] ?>"><?= $r['skillName'] ?></p>
        <progress max="100" value="<?= $r['persentage'] ?>" class="html5">
            <div class="progress-bar">
                <span style="width: <?= $r['persentage'] ?>%"><?= $r['persentage'] ?>%</span>
            </div>
        </progress> -->
        

    <?php
}
?>

</div>