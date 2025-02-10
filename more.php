<?php
include("connection.php");
$id = $_GET['id'];
try{
  $query = $db->query("SELECT * FROM huruf WHERE id = $id");
  // echo"berhasil tangkap data";
}catch(Exception $e){
  echo"gagal :" > $e->getMessage();
}
$data = $query->fetch();
// echo"<pre>";
// print_r($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Cara Baca</title>
</head>
<body>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <div class="container mt-5">
  <h2>CARA BACA KANJI</h2>  
  <br>
  <table border="1" class="table table-striped ">
    <thead>
      <tr>
        <th>KANJI</th>
        <th>KUNYOMI</th>
        <th>ONYOMI</th>
        <th>CARA PENGGUNAAN</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= $data['kanji'];?></td>
        <td><?= $data['kunyomi'];?></td>
        <td><?= $data['onyomi'];?></td>
        <td><?= $data['word'];?></td>
      </tr>
    </tbody>
  </table>
  <br>
  <a href="list_kanji.php" class="btn btn-primary">&laquo; Kembali</a>
</body>
</div>
</html>
