<?php
session_start();

if (!isset($_SESSION['admin_session'])) {
    header('location: ./?err=3');
}


include "php/template/head.php";
?>

<body>
    <div class="container-fluid " id="dashboard">

        <div class="row">

            <!-- navbar -->
            <div class="navbar">
                <div class="col-md-12">
                        <ul>
                            <li>hdslkfsd</li>
                            <li>fdsfsd</li>
                            <li>qsdqsdqs</li>
                            <li>dqs</li>
                        </ul>
                </div>
            </div>
            <!-- navbar -->

            <!-- side menu -->
            <div class="col-md-2 " id="sidemenu">
                dsjfsdkj
            </div>
            <!-- side menu -->

            <!-- content -->
            <div class="col-md-10">
                <a href="php/actions/logout.php">logout</a>
            </div>
            <!-- /content -->

        </div>

    </div>
</body>

</html>