<?php
include("connection.php");
$id =$_GET['id'];
try{
  $query= $db->query("DELETE FROM huruf WHERE id = $id");
  header("location:list_kanji.php");
}catch(Exception $e){
  echo"Gagal :" . $e->getMessage();
}

?>