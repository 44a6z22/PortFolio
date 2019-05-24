<!-- DataTables Example -->
<div class="card mb-4" id="projects">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Projects
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>type</th>
                        <th>release date</th>
                        <th>Link</th>
                        <th>actions</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>type</th>
                        <th>release date</th>
                        <th>Link</th>
                        <th>actions</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php

                    $result = $project->getProjects();

                    foreach ($result as $res) {
                        ?>
                        <tr>
                            <td><?= $res['projectName']; ?> </td>
                            <td><?= $res['projectType']; ?></td>
                            <td><?= $res['realisationDate']; ?></td>
                            <td><a href="https://<?= $res['link']; ?>"><?= $res['link']; ?></a></td>
                            <?php
                            if ($level == 1) {
                                ?>
                                <td>
                                    <a href="?page=addproject&id=<?= $res['id']; ?>" class="btn btn-warning">update</a>
                                    <a href="php/actions/deleteProject.php?id=<?= $res['id']; ?>" class="btn btn-danger">Delete</a>

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