<?php

require_once "configure.php";

$connect = mysqli_connect(DB_host, DB_user, DB_pass, DB_name); // ("localhost", "root", "", "")

if(mysqli_connect_errno()){
// Vratice poruku i kod greske u log

    error_log("Greška pri konekciji: " . mysqli_connect_errno());
}

