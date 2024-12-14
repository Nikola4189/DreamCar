<?php
    require_once "BASE/db.php";

    $query = "SELECT * FROM `used_car`.`article` WHERE `is_sell` = '0'";

    $result = mysqli_query($connect,$query);

    $artcles = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

    mysqli_close($connect);

    session_start();
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="CSS/home_page_style.css">
</head>
<body>
    <header>
        <img src="Icon/Dream_car.png" alt="logo">
        <h2>AUTO PRODAVNICA</h2>
        <?php isset($_SESSION["user_name"]) ? $user = $_SESSION["user_name"]  : $user=''; echo $user ?><a id="login_register" href="login_page.php">registuj se / prijavi se</a> 
        <a href="logout.php"><img id="exit" src="IMAGES/x.png" alt="odjavi se"></a>
    </header>

    <div id="forma_filter">
        <form method="post" action="">
            <input type="number" min="1997" max= "<script> document.write(new Date().getFullYear()); </script>" name="from_the_year" placeholder="od godine">
            <input type="number" min="1997" max= "<script> document.write(new Date().getFullYear()); </script>" name="to_the_year" placeholder="do godine">
            <select name="mark">
                <option value="*">Sve</option>
                <option value="renault">Renault</option>
                <option value="peugeot">Peugeot</option>
                <option value="audi">Audi</option>
                <option value="volvo">Volvo</option>
                <option value="range rover">Range Rover</option>
                <option value="bmw">BMW</option>
                <option value="porsche">Porsche</option>
                <option value="lamborgini">Lamborgini</option>
                <option value="avatr">Avatr</option>
                <option value="chevrolet">Chevrolet</option>
                <option value="dodge">Dodge</option>
                <option value="ferrari">Ferrari</option>
                <option value="maserati">Masserati</option>
                <option value="mustang">Mustang</option>
            </select>
            <select name="categiry_id">
                <option value="*">Sve</option>
                <option value="1">Sedan</option>
                <option value="2">SUV</option>
                <option value="3">Cupe</option>
                <option value="4">Karavan</option>
                <option value="5">Super Car</option>
            </select>
            <select name="fuel">
                <option value="dizel">Dizel</option>
                <option value="benzin">Benzin</option>
                <option value="electric">Električni</option>
            </select>
            <input type="submit" name="submit" value="Pretrazi" class="form_btn">
        </form>
    </div>

    <div class="container">

<!--   PROTOTYPE: 
    <div class="card">
            <div class="card_header">
                <h3 class="inline">Naslov</h3>
                <p class="inline">101<b>id</b></p>
            </div>
            <img src="IMAGES/lamborgini_urus.jpg" alt="Lamborgini aventador">
            <div class="card_description">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Vestibulum maximus egestas lacus, in elementum mi viverra ut. Sed vel vehicula lectus, non pharetra ex. Phasellus congue nisl eget iaculis mollis.
                     Phasellus ornare orci ipsum, a efficitur enim malesuada egestas. Suspendisse quis felis et nisl gravida accumsan id non tellus.
                </p>
            </div>
            <div class="card_base_data">
                <p>Lamborgini</p>
                
                <p>Aventador</p>
               
                <p>200 000<span> $</span></p>
            </div>

            
                <input class="card_btn" type="submit" name="submit_buy" value="Kupi">
            

        </div>
-->
    <?php foreach($artcles as $article): 
            isset($article["article_id"]) ? $id = $article["article_id"] : $id = "error";
            isset($article["title"]) ? $title = $article["title"] : $title = "";
            isset($article["image_path"]) ? $img = $article["image_path"] : $img = "";
            isset($article["description"]) ? $description = $article["description"] : $description = "Proizvod nema dodatni opis !";
            isset($article["mark"]) ? $mark = $article["mark"] : $mark = "";
            isset($article["model"]) ? $model = $article["model"] : $model = "";

            isset($article["fuel"]) ? $fuel = $article["fuel"] : $fuel = "dizel";
            isset($article["y_manufacture"]) ? $y_manufacture = $article["y_manufacture"] : $y_manufacture = "";
            isset($article["categiry_id"]) ? $categiry_id = match ($article["categiry_id"]) {
                "1" => "Sedan",
                "2" => "SUV",
                "3" => "Kupe",
                "4" => "Karavan",
                "5" => "Super Car",
              } : $categiry_id = "";

            isset($article["price"]) ? $price = $article["price"] : $price = "Po dogovoru";
        ?>
        <div class="card">
            <div class="card_header">
                <h3 class="inline"> <?php echo $title ?> </h3>
                <p class="inline"> <?php echo $id ?> <b>id</b></p>
            </div>
            <img src=" <?php echo $img ?> " alt=" <?php echo $mark ." ". $model?> ">
            <div class="card_description">
                <p> <?php echo $description ?> </p>
            </div>
            <div class="card_base_data">
                <p> <?php echo $mark ?> </p>
                
                <p> <?php echo $model ?> </p>

                <p> <?php echo $fuel ?> </p>

                <p> <?php echo $categiry_id ?> </p>

                <p> <?php echo $y_manufacture ?> </p>
               
                <p> <?php echo $price ?> <span> $</span></p>
            </div>

            
                <input class="card_btn" type="submit" name="submit_buy" value="Kupi">
            

        </div>
        <?php endforeach; ?>

        


    </div>
    <footer>
        &copy; Dizajnirao i izradio Nikola Novaković, 2021203493 | 2024.god.
    </footer>
</body>
</html>