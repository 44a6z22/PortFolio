<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
</ol>

<!-- Icon Cards-->
<div class="row">
    <div class="col-xl-6 col-sm-12 mb-6 mb-3">
        <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">17 skills</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#skills">
                <span class="float-left">View Details</span>
                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>
    <div class="col-xl-6 col-sm-12 mb-6 mb-3">
        <div class=" card text-white bg-warning o-hidden h-100">
            <div class="card-body">
                <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5"><?=$project->count(); ?> projects </div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#projects">
                <span class="float-left">View Details</span>
                <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>

</div>

<?php
include "php/template/projects.php";
include "php/template/skills.php";
?>