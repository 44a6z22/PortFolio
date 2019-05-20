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
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>type</th>
                        <th>release date</th>
                        <th>Link</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    for ($i = 0; $i < 3; $i++) {

                        ?>
                        <tr>
                            <td>youcode </td>
                            <td>website</td>
                            <td>2018/01/01</td>
                            <td>github.com/44a6z22/websiteLink</td>
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