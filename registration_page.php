<?php
require_once 'BASE\db.php';

if(isset($_POST['submit'])){

    $full_name = mysqli_real_escape_string($connect, $_POST['full_name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $phone = mysqli_real_escape_string($connect, $_POST['phone']);
    $addres = mysqli_real_escape_string($connect, $_POST['addres']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = "user";

    $select = " SELECT * FROM  used_car.user WHERE email = ? ";
    $stmt = mysqli_prepare($connect, $select);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if(mysqli_num_rows($result) > 0) {

            $error[] = 'Korisnik već postoji !';

        } else {

            if($pass != $cpass){
                $error[] = 'Sifra se ne poklapa !';
            } else {
                $insert = "INSERT INTO `used_car`.`user`(full_name, email, phone, addres, password_hesh, user_type) 
                VALUE(?, ?, ?, ?, ?, ?)";
                $stmt = mysqli_prepare($connect, $insert);

                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "ssssss", $full_name, $email, $phone, $addres, $pass, $user_type);
                    $execute = mysqli_stmt_execute($stmt);

                    if($execute){
                        header('location:login_page.php');
                    } else {
                        $error[] = 'GRESKA! Registracija nije izvršena.';
                    }
                } else {
                    $error[] = 'GRESKA! Registracija nije izvršena.';
                }
            };
        };
    } else {
        $error[] = 'GRESKA! Registracija nije izvršena.';
    }
};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration page</title>

    <link rel="stylesheet" href="CSS/form_style.css">

</head>
<body>
   
    <div class="form_container">
        <form action="" method="post">
            <h3>Registruj se</h3>
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
            ?>
            <input type="text" name="full_name" required placeholder="Unesite ime, razmak i prezime">
            <input type="email" name="email" required placeholder="Unesite svoj email">
            <input type="text" name="phone" placeholder="Unesite svoj broj telefona">
            <input type="text" name="addres" required placeholder="Unesite svoj adresu">
            <input type="password" name="password" required placeholder="Unesite šifru">
            <input type="password" name="cpassword" required placeholder="Potvrdite svoju šifru">
             
            <input type="submit" name="submit" value="registruj odmah" class="form_btn">
            <p>Da li već imate nalog ? <a href="login_page.php">prijavi se</a></p>
        </form>

    </div>
</body>
</html>