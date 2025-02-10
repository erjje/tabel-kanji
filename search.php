<?php 
include("connection.php");
$search = $_GET['search'];
try{
  $query = $db->query("SELECT * FROM huruf WHERE kanji LIKE '%$search%'");
  // echo"berhasil";
}catch(Exception $e){
  echo"Gagal :" . $e->getMessage();
}
$data = $query->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Kanji</title>
</head>
<body>
  <h2>TABLE KANJI</h2>
  <a href="add.php">Tambah</a>
  <br><br>
  <form action="search.php" method="GET">
  <input type="text" name="search" placeholder="Cari....">
  <button type="submit">Cari</button>
  </form>
  <a href="list_kanji.php">&laquo; Kembali</a>
  <br>
  <br>  
  <div>
    <table border="1" cellpadding="3" cellspacing="2"> 
      <thead>
        <tr>
          <th>NO</th>
          <th>KANJI</th>
          <th>CARA BACA</th>
          <th>AKSI</th>
        </tr>
      </thead>
      <?php foreach($data as $index => $kanji) : ?>
      <tbody>
        <tr>
          <td><?= $index +1;?></td>
          <td><?= $kanji['kanji'];?></td>
          <td>
              <a href="more.php?id=<?= $kanji['id']?>">Selengkapnya</a>
          </td>
          <td>
          <a href="edit.php?id=<?= $kanji['id'];?>">Edit</a>
          </td>
        </tr>
      </tbody>
      <?php endforeach; ?>
    </table>
  </div>
</body>
</html>