<?php
    require_once "BASE/db.php";

    $query = "SELECT * FROM `used_car`.`article` WHERE is_sell = '0'";

    $result = mysqli_query($connect,$query);

    $artcles = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

    mysqli_close($connect);

    
   
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit_articles</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS\edit_page_style.css">
</head>
<body>
    <header>
        <img src="Icon\Dream_car.png" alt="logo">
        <h2>UREĐIVANJE ARTIKALA</h2>
        <a href="admin_page.php"><img id="exit" src="Icon/x.png" alt="IZLAZ"></a>
    </header>
    <div class="container">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col"> 
                      <form action="" method="post">
                      <button class="btn btn-primary"><a href="insert.php" class="text-light">DODAJ</a></button>  
                      </form>
                    </th>
                    <th scope="col">ID</th>
                    <th scope="col">NASLOV</th>
                    <th scope="col" class="col-lg-3">SLIKA</th>
                    <th scope="col">OPIS</th>
                    <th scope="col">MARKA</th>
                    <th scope="col">MODEL</th>
                    <th scope="col">GORIVO</th>
                    <th scope="col">GODIŠTE</th>
                    <th scope="col">KAROSERIJA</th>
                    <th scope="col">CENA</th>
                    <th scope="col">OPERACIJE</th>
                  </tr>
                </thead>
                <tbody>
              <?php foreach($artcles as $article): 
                  isset($article["article_id"]) ? $id = $article["article_id"] : $id = "error";
                  isset($article["title"]) ? $title = $article["title"] : $title = "";
                  isset($article["image_path"]) ? $img = $article["image_path"] : $img = "";
                  isset($article["description"]) ? $description = $article["description"] : $description = "Proizvod nema dodatni opis !";
                  isset($article["mark"]) ? $mark = $article["mark"] : $mark = "";
                  isset($article["model"]) ? $model = $article["model"] : $model = "";
                  isset($article["fuel"]) ? $fuel = $article["fuel"] : $fuel = "";
                  isset($article["y_manufacture"]) ? $y_manufacture = $article["y_manufacture"] : $y_manufacture = "";
                  isset($article["categiry_id"]) ? $categiry_id = match ($article["categiry_id"]) {
                    "1" => "Sedan",
                    "2" => "SUV",
                    "3" => "Kupe",
                    "4" => "Karavan",
                    "5" => "Super Car",
                  } : $categiry_id = "";

                  isset($article["price"]) ? $price = $article["price"] : $price = "Pzovite za cenu";

              ?>
                  <tr>
                    <th scope="row"> </th>
                    <td> <?php echo $id ?> </td>
                    <td> <?php echo $title ?> </td>
                    <td><img src= "<?php echo $img ?>" alt="<?php echo $mark . " " . $model ?>"></td>
                    <td class="col-lg-2"> <?php echo $description ?> </td>
                    <td> <?php echo $mark ?> </td>
                    <td> <?php echo $model ?> </td>
                    <td> <?php echo $fuel ?> </td>
                    <td> <?php echo $y_manufacture ?> </td>
                    <td> <?php echo $categiry_id ?> </td>
                    <td> <?php echo $price ?> </td>
                    <td> 
                      <form action="" method="post">
                      <button  class="btn btn-primary"><a  href="update.php?updateid=<?php echo $id ?>" class="text-light">UREDI</a></button>  
                      <button  class="btn btn-danger"><a href="delete.php?deleteid=<?php echo $id ?>" class="text-light">OBRIŠI</a></button> 
                      </form>
                    </td>

                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
    </div>
    <footer>
        &copy; Dizajnirao i izradio Nikola Novaković, 2021203493
    </footer>
</body>
</html>
