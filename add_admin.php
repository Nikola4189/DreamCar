<?php
require_once 'BASE\db.php';

if(isset($_POST['submit'])){

    $full_name = mysqli_real_escape_string($connect, $_POST['full_name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $phone = mysqli_real_escape_string($connect, $_POST['phone']);
    $addres = mysqli_real_escape_string($connect, $_POST['addres']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
   # $user_type = $_POST['user_type'];
    $user_type = "admin";

    $select = " SELECT * FROM  used_car.user WHERE email = '$email' ";

    $result = mysqli_query($connect, $select);

    if(mysqli_num_rows($result) > 0) {

        $error[] = 'Ovaj admin već postoji !';

    }
    else{

        if($pass != $cpass){
            $error[] = 'Sifra se ne poklapa !';
        }else{
            $insert = " INSERT INTO used_car.user(full_name, email, phone, addres, password_hesh, user_type) 
            VALUE('$full_name', '$email', '$phone', '$addres', '$pass','$user_type')";

            mysqli_query($connect, $insert);
            header('location:add_admin.php');
        };
    };

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add admin page</title>

    <link rel="stylesheet" href="CSS/form_style.css">

</head>
<body>
    <!--17:22-->
    <div class="form_container">
        <form action="" method="post">
            <h3>Dodaj admina</h3>
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
            ?>
            <input type="text" name="full_name" required placeholder="Unesite ime, razmak i prezime">
            <input type="email" name="email" required placeholder="Unesite email">
            <input type="text" name="phone" required placeholder="Unesite svoj broj telefona">
            <input type="text" name="addres" required placeholder="Unesite svoju adresu">
            <input type="password" name="password" required placeholder="Unesite šifru">
            <input type="password" name="cpassword" required placeholder="Potvrdite šifru">
            
            <input type="submit" name="submit" value="DODAJ" class="form_btn">
            <p>Nazad na administratorsku stranicu<a href="admin_page.php"> << </a></p>
        </form>

    </div>
</body>
</html>