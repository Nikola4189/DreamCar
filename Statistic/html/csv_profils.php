<?php 
    require_once '../../BASE/db.php';

    $sql = "SELECT * FROM `used_car`.`user` WHERE `is_active` = '1' AND `user_type` = 'user' ";
    $result = mysqli_query($connect, $sql);
    
    if (mysqli_num_rows($result) > 0) {
      // Kreiranje CSV fajla
      $filename = "articles.csv";
      $file = fopen($filename, "w");
    
      // Upisivanje zaglavlja kolona
      $headers = array("user_id", "full_name", "email", "phone", "addres", "password_hesh", "user_type", "is_active");
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