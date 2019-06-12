<?php
$p = new Skill($connection);
    $fSelected = ''; 
    $bSelected = '';

if (isset($_GET['skillId'])) {

    $p->setId($_GET['skillId']);
    $p->getSkill();
    
    if ($p->getType() == 'FrontEnd')
    {
        $fSelected = 'selected';
        $bSelected = '';
    }
    else 
    {
        $fSelected = '';
        $bSelected = 'selected';
    }
    echo $p->getType();
}
?>

<form method="post" action="php/actions/addSkill.php">
    <input type="text" name="id" hidden value="<?= $p->getId() ?>">
    <div class="form-group">
        <label for="exampleFormControlInput1">name</label>
        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" value="<?= $p->getName(); ?>">
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect1">skill type</label>
        <select class="form-control" name="type" id="exampleFormControlSelect1">
            <option value="FrontEnd" <?= $fSelected ?> > front-end </option>
            <option value="BackEnd"<?= $bSelected ?>> back-end </option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">persentage</label>
        <input type="text" class="form-control" name="persentage" id="exampleFormControlInput1" value="<?= $p->getPersentage() ?>">
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect1">project Owner</label>
        <select class="form-control" name="owner" id="exampleFormControlSelect1">
            <option value="2"> hamza </option>
        </select>
    </div>


    <?php
    if (isset($_GET['page']) && isset($_GET['skillId'])) {
        ?>
        <button type="submit" name="updateSkill" class="btn btn-primary btn-block">update</button>
    <?php
} else {
    ?>
        <button type="submit" name="addSkill" class="btn btn-primary btn-block">Submit</button>
    <?php
}
?>
</form>