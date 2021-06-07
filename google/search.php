<?php
$miasta = file_get_contents("C:\Apache24\htdocs\cities.json", true);
$plik = json_decode($miasta);
$wynik = array();

      if(!array_key_exists('name', $_GET)) {
         echo json_encode([]);
         return;
      }
      else{
         foreach($plik as $value){
            if ( is_numeric(stripos($value->name, htmlspecialchars($_GET["name"])))){
            array_push($wynik, $value);
         }
      }
      }
      
$koncowy_wynik = json_encode($wynik);
echo $koncowy_wynik;
?>