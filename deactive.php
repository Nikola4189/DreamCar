<?php 
    require_once 'BASE/db.php';

    $id = $_GET['deactive_id'];
    $is_active = $_GET['is_active'];

    if ($is_active == 'Aktivan') {
        $is_active = '0';
    } else if($is_active == 'Suspendovan') {
        $is_active = '1';
    }

    $update = "UPDATE used_car.`user` SET is_active = ? WHERE user_id = ?";
    $stmt = mysqli_prepare($connect, $update);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $is_active, $id);
        $execute = mysqli_stmt_execute($stmt);

        if($execute){
            header("location:profile_list.php");
        } else {
            $error[] = 'GRESKA! Izmena nije izvrsena.';
        }
    } else {
        $error[] = 'GRESKA! Izmena nije izvrsena.';
    }

