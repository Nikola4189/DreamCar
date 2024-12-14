<?php
require_once 'BASE/db.php';

if(isset($_GET['deleteid'])){
    $id= $_GET['deleteid'];

    $delete = "DELETE FROM used_car.`article` WHERE article_id = $id";
    $result = mysqli_query($connect,$delete);

    if($result){
        header('location:edit_page.php');
    }else{
        die(mysqli_errno($connect));
    }
}

?>