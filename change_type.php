<?php 
    require_once 'BASE/db.php';

    $id = $_GET['change_id'];
    $user_type = $_GET['user_type'];

    if ($user_type == 'Administrator') {
        $user_type = 'user';
        $update = "UPDATE used_car.user SET user_type = ? WHERE user_id = ?";
        $stmt = mysqli_prepare($connect, $update);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $user_type, $id);
            $execute = mysqli_stmt_execute($stmt);

            if($execute){
                header("location:profile_list.php");
            } else {
                $error[] = 'GRESKA! Izmena nije izvrsena.';
            }
        } else {
            $error[] = 'GRESKA! Izmena nije izvrsena.';
        }
    } else {
        header("location:profile_list.php");
    }





