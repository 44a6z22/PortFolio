<!-- DataTables Example -->
<div class="card mb-4" id="skills">
    <div class="card-header">
        <i class="fas fa-table"></i>
        SKILLS
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>type</th>
                        <th> % </th>
                        <th>discription</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>type</th>
                        <th> % </th>
                        <th>discription</th>
                        <th>actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    for ($i = 0; $i < 3; $i++) {

                        ?>
                        <tr>
                            <td>CSS</td>
                            <td>hard skill</td>
                            <td>70</td>
                            <td>$i can manjfdsf dsfhsdlns</td>
                            <?php
                            if ($level == 1) 
                            {
                            ?>
                                <td>
                                    <a href="" class="btn btn-warning">update</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            <?php
                                }
                            ?>
                        </tr>

                    <?php

                }
                ?>

                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>