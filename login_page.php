<?php
require_once 'BASE\db.php';

session_start();

if(isset($_POST['submit'])){

    $full_name = mysqli_real_escape_string($connect, $_POST['full_name']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $pass = md5($_POST['password']);


    $select = " SELECT * FROM  used_car.user WHERE email = '$email' && password_hesh = '$pass' && is_active = '1' ";

    $result = mysqli_query($connect, $select);

    if(mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);

        if($row['user_type'] == 'admin'){

            $_SESSION['admin_name'] = $row['full_name'];
            header('location:admin_page.php');
        }
        elseif($row['user_type'] == 'user'){

            $_SESSION['user_name'] = $row['full_name'];
            header('location:index.php');
        }

    }
    else{
        $errors[] = 'Netačna vam je lozinka ili vam je pogrešan email !';
    }

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login_page</title>

    <link rel="stylesheet" href="CSS/form_style.css">

</head>
<body>
    <div class="form_container">
        <form action="" method="post">
            <h3>Prijavi se</h3>
            <?php
                if(isset($errors)){
                    foreach($errors as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
            ?>
            <input type="text" name="full_name" required placeholder="Unesite ime, razmak i prezime">
            <input type="email" name="email" required placeholder="Unesite svoj email">
            <input type="password" name="password" required placeholder="Unesite šifru">
            </select>
            <input type="submit" name="submit" value="login" class="login_form_btn">
            <p>Ako nemaš nalog <a href="registration_page.php">registruj se.</a></p>
        </form>

    </div>
</body>
</html>