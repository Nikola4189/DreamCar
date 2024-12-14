<?php 
    require_once '../../BASE/db.php';

    $sql = "SELECT * FROM `used_car`.`article` WHERE `is_sell` = '0' ";
    $result = mysqli_query($connect, $sql);
    
    if (mysqli_num_rows($result) > 0) {
      // Kreiranje CSV fajla
      $filename = "articles.csv";
      $file = fopen($filename, "w");
    
      // Upisivanje zaglavlja kolona
      $headers = array("article_id", "title", "description", "mark", "model", "fuel", "y_manufacture", "price", "image_path", "categiry_id", "created_at", "is_sell");
      fputcsv($file, $headers);
    
      // Upisivanje redova podataka
      while($row = mysqli_fetch_assoc($result)) {
        fputcsv($file, $row);
      }
    
      // Zatvaranje fajla
      fclose($file);
    
      // Slanje fajla za preuzimanje
      header("Content-Description: File Transfer");
      header("Content-Disposition: attachment; filename=$filename");
      header("Content-Type: application/csv; ");
      readfile($filename);
    
      // Brisanje fajla sa servera
      unlink($filename);
      
      

    } else {
      echo "Nema podataka u tabeli article.";
    }
    

