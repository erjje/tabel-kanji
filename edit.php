<?php
include("connection.php");
$id= $_POST['id'];
$kanji= $_POST['kanji'];
$kunyomi= $_POST['kunyomi'];
$onyomi= $_POST['onyomi'];
$word= $_POST['word'];
try{
  $query = $db->query("UPDATE huruf SET 
    kanji = '$kanji', 
    kunyomi = '$kunyomi', 
    onyomi = '$onyomi',
    word = '$word' 
  WHERE id = $id");
  echo"berhasil";
  header("location:list_kanji.php");
}catch(Exception $e){
  echo"gagal :" .$e->getMessage();
}


?>