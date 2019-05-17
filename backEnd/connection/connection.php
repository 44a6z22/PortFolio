<?php

    try {
        $connection = new PDO(DB::$DB_LINK, DB::$DB_LOGIN, DB::$DB_PASS, DB::$DB_OPTIONS);
    } catch (Exeption $e) {
        error_log($e->getMessage());
    }
?>