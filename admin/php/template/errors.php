<?php
function    error($err)
{
    $res = "";

    switch ($err) {
        case 0:
            $res = Errors::$USER_NOT_FOUND;
            break;
        case 3:
            $res = Errors::$LOGIN_FIRST;
            break;
        case 102:
            $res = Errors::$INPUTS_EMPTY;
            break;
            
        default:
            $res = Errors::$USER_NOT_FOUND;
            break;
    }

    return $res;
}
?>

<div class="col-md-6 offset-md-3 danger">
    <div class="alert alert-danger" role="alert">
        <?php
        echo error($err);
        ?>
    </div>
</div>
<script>
    let danger = document.querySelector('.danger');

    setTimeout(() => {
        danger.style.transition = "1s";
        danger.style.opacity = 0;
    }, 500);
    setTimeout(() => {
        danger.style.display = "none";
    }, 1500);
</script>