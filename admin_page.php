<?php
    require_once "BASE/db.php";

    session_start();
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">

    <title>admin_page</title>
</head>
<body>
    <div class="container">

        <div class="content">

            <h2>Zdravo, <span>admine</span><?php isset($_SESSION["admin_name"]) ? $admin = $_SESSION["admin_name"]  : $admin=''; echo $admin?></h2>
             <h1>Dobro mi došao !<span></span></h1>
            <br>
            <br>

            <div class="card" id="gear">
                <img src="Icon/gear.png" alt="zupčanik">

                <a href="edit_page.php" class="btn"> UREDI ARIKLE </a>
            </div>
            <div class="card" id="sold_car">
                <img src="Icon/sold_car.png" alt="sold car">

                <a href="sell_car_list.php" class="btn"> VIDI PRODATE </a>
            </div>
            <div class="card" id="statistics">
                <img src="Icon/statistika.png" alt="statistika">

                <a href="Statistic/html/statistika_dashboard.php" class="btn"> STATISTIKA </a>
            </div>
            <div class="card" id="add_user">
                <img src="Icon/plus.png" alt="plus">

                <a href="add_admin.php" class="btn"> DODAJ ADMINA </a>
            </div>
            <div class="card" id="user_acc">
                <img src="Icon/user.png" alt="man">

                <a href="profile_list.php" class="btn"> PPREGLEDAJ PROFILE </a>
            </div>
            <div class="card" id="x">
                <img src="Icon/x.png" alt="X">
                <a href="logout.php" class="btn"> IZLAZ </a>
            </div>
        </div>
    </div>
    
</body>
</html>














