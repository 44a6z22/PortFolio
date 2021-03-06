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
                    $res = $skills->getSkills();
                    foreach ($res as $r) {

                        ?>
                        <tr>
                            <td><?= $r['skillName'] ?></td>
                            <td><?= $r['skillType'] ?></td>
                            <td><?= $r['persentage'] ?>%</td>
                            <td><?= $r['skillName'] ?></td>
                            <?php
                            if ($level == 1) {
                                ?>
                                <td>
                                    <a href="?page=addSkill&skillId=<?= $r['id']?>" class=" btn btn-warning">update</a>
                                    <a href= "php/actions/delete.php?skillId=<?= $r['id']?>" class="btn btn-danger">Delete</a>
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