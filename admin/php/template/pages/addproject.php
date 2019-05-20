  

    <form method="post" action="php/actions/addProject.php">

        <div class="form-group">
            <label for="exampleFormControlInput1">name</label>
            <input type="text" class="form-control" name="name" id="exampleFormControlInput1">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">project type</label>
            <select class="form-control" name="type" id="exampleFormControlSelect1">
                <option value="1"> website </option>
                <option value="2"> mobile app </option>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">realisation date</label>
            <input type="text" class="form-control" name="date" id="exampleFormControlInput1">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Link</label>
            <input type="text" class="form-control" name="link" id="exampleFormControlInput1">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">project Owner</label>
            <select class="form-control" name="owner" id="exampleFormControlSelect1">
                <option value="2"> hamza </option>
            </select>
        </div>




        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
    </form>