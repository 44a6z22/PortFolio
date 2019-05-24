    <?php
    $p = new Project($connection);

    if (isset($_GET['id'])) {
        $p->setId($_GET['id']);
        $p->getProject();
    }


    ?>
    <form method="post" action="php/actions/addProject.php">
        <input type="text" name="id" hidden value="<?= $p->getId() ?>">
        <div class="form-group">
            <label for="exampleFormControlInput1">name</label>
            <input type="text" class="form-control" name="name" id="exampleFormControlInput1" value="<?= $p->getName(); ?>">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">project type</label>
            <select class="form-control" name="type" id="exampleFormControlSelect1">
                <option> website </option>
                <option> mobile app </option>
                <option> Browser game </option>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">realisation date</label>
            <input type="text" class="form-control" name="date" id="exampleFormControlInput1" value="<?= $p->getDate() ?>">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Link</label>
            <input type="text" class="form-control" name="link" id="exampleFormControlInput1" value="<?= $p->getLink() ?>">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">project Owner</label>
            <select class="form-control" name="owner" id="exampleFormControlSelect1">
                <option value="2"> hamza </option>
            </select>
        </div>


        <?php
            if (isset($_GET['page']) && isset($_GET['id'])) {
        ?>
            <button type="submit" name="update" class="btn btn-primary btn-block">update</button>
        <?php
            } else {
        ?>
            <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
        <?php
            }
        ?>
    </form>