<?php
    require_once "BASE/db.php";

    $query = "SELECT * FROM `used_car`.`user`";

    $result = mysqli_query($connect,$query);

    $profiles = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

    mysqli_close($connect); 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view sell articles</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS\edit_page_style.css">
</head>
<body>
    <header>
        <img src="Icon\Dream_car.png" alt="logo">
        <h2>KORISNICI</h2>
        <a href="admin_page.php"><img id="exit" src="Icon/x.png" alt="IZLAZ"></a>
    </header>
    <div class="container">
            <table class="table">
                <thead>
                  <tr>
                  <th scope="col"> </th>
                    <th scope="col">ID</th>
                    <th scope="col">IME</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">TELEFON</th>
                    <th scope="col">ADRESA</th>
                    <th scope="col">TIP KORISNIKA</th>
                    <th scope="col">ODOBREN</th>
                    <th scope="col">OPERACIJE</th>
                  </tr>
                </thead>
                <tbody>
              <?php foreach($profiles as $profile): 
                  isset($profile["user_id"]) ? $id = $profile["user_id"] : $id = "error";
                  isset($profile["full_name"]) ? $full_name = $profile["full_name"] : $title = "";
                  isset($profile["email"]) ? $email = $profile["email"] : $email = "";
                  isset($profile["phone"]) ? $phone = $profile["phone"] : $phone = "nepoznat broj";
                  isset($profile["addres"]) ? $addres = $profile["addres"] : $addres = "nepoznata adresa";
                  
                  isset($profile["user_type"]) ? $user_type = match ($profile["user_type"]) {
                    "user" => "Kupac",
                    "admin" => "Administrator"} : $user_type = "error";
                  isset($profile["is_active"]) ? $is_active = match ($profile["is_active"]) {
                    "0" => "Suspendovan",
                    "1" => "Aktivan"} : $is_active = "error";
              ?>
                  <tr>
                    <th scope="row"> </th>
                    <td> <?php echo $id ?> </td>
                    <td> <?php echo $full_name ?> </td>
                    <td> <?php echo $email ?> </td>
                    <td> <?php echo $phone ?> </td>
                    <td> <?php echo $addres ?> </td>
                    <td> <?php echo $user_type ?> </td>
                    <td> <?php echo $is_active ?> </td>
                    <td> 
                    <form method="post">
                      <button type="submit" formaction="deactive.php?deactive_id=<?php echo $id ?>&is_active=<?php echo $is_active?>" class="btn btn-danger text-light">AKTIVIRAJ/DEAKTIVIRAJ</button>  
                      <!-- Pažnja !!! Naredna komanda menja korisnički tip admina u korisnika nepovratno, korisnik nemože ponovo postati admin !!! -->
                      <button type="submit" formaction="change_type.php?change_id=<?php echo $id ?>&user_type=<?php echo $user_type?>" class="btn btn-primary text-light">PROMENI TIP</button> 
                    </form>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
    </div>
    <footer>
        &copy; Dizajnirao i izradio Nikola Novaković | 2021203493 | 2024
    </footer>
</body>
</html>
