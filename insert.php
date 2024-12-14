<?php 
require_once 'BASE/db.php';

$targetDir = "CAR/";

if(isset($_POST['submit'])){
    $title= $_POST['title'];
    $description= $_POST['description'];
    $mark = $_POST['mark'];
    $model = $_POST['model'];
    $fuel = $_POST['fuel'];
    $y_manufacture = $_POST['y_manufacture'];
    $price = doubleval($_POST['price']);
    $categiry_id = $_POST['categiry_id'];
   
    //Uzimanje vrednosti promenljivih iz visedimenzionog globalnog asocijativnog niza

    if(!empty($_FILES["file"]["name"])){ 
        $fileName = basename($_FILES["file"]["name"]); 
        $targetFilePath = $targetDir . $fileName; 
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Verifikacija ekstenzije slike

        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 

        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){

            $insert = "INSERT INTO used_car.article(`title`, `description`, `mark`, `model`,`fuel`, `y_manufacture`, `price`, `image_path`, `categiry_id`)
                       VALUES ('$title', '$description', '$mark', '$model', '$fuel', '$y_manufacture', '$price', '$targetFilePath', '$categiry_id');";
   
            $result = mysqli_query($connect, $insert);
        }
        }
        else{
            $error[] = 'Ekstenzija slike nije u spisku dozvoljenih. Izaberite sliku sa drugom ekstenzijom !';
        }
    }
    else{
        $error[] = 'Niste odabrali sliku. Molim vas probajte ponovo !';
    }
 
   if($result == true){
       header("location:insert.php");
   }else{
     $error[] = 'GRESKA! Izmena nije izvrsena.';
   }
   
   $error[] = 'Doslo je do greske pri konekciji sa bazom podataka.';
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>

    <link rel="stylesheet" href="CSS/form_style.css">

</head>
<body>
   
    <div class="form_container">
        <form action="" method="post" enctype="multipart/form-data">
            <h3>Unesi artikal</h3>
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
            ?>
            <input type="text" name="title" required placeholder="Unesite naslov">
            <input type="text" name="description" required placeholder="Unesite opis">
            <select required name="mark">
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
            <select required name="categiry_id">
                <option value="1">Sedan</option>
                <option value="2">SUV</option>
                <option value="3">Cupe</option>
                <option value="4">Karavan</option>
                <option value="5">Super Car</option>
            </select>
            <input type="text" name="model" required placeholder="Unesite model">
            <select required name="fuel">
                <option value="dizel">Dizel</option>
                <option value="benzin">Benzin</option>
                <option value="electric">Električni</option>
            </select>
            <input type="number" min="1997" max="2024" name="y_manufacture" required placeholder="1997">
            <input type="file" name="file" required placeholder="Izabeite file">
            <input type="text" name="price" required placeholder="Unesite cenu">
            
            <input type="submit" name="submit" value="dodaj" class="form_btn">
            <p>Nazad na uredjivacku stranicu<a href="edit_page.php"> << </a></p>
        </form>

    </div>
</body>
</html>