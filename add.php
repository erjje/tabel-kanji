<?php
include("connection.php");
$kanji = $_POST['kanji'];
$kunyomi = $_POST['kunyomi'];
$onyomi = $_POST['onyomi'];
$word = $_POST['word'];
// echo"<pre>";
// print_r($_POST);
try{
  $query = $db->query("INSERT INTO huruf (kanji,kunyomi,onyomi,word) VALUES ('$kanji','$kunyomi','$onyomi','$word')");
  header("location:list_kanji.php");
}catch(Exception $e){
  echo"gagal :" . $e->getMessage();
}


?>