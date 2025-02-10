<?php
$db = new PDO("mysql:host=localhost;dbname=db_kanji;", "root", "");

try{
  $db = new PDO("mysql:host=localhost;dbname=db_kanji;", "root", "");
}catch(Exception $e){
  echo"gagal :" . $e->getMessage();
}
?>