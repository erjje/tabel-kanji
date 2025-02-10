<?php 
include("connection.php");
try{
  $query = $db->query("SELECT * FROM huruf");
}catch(Exception $e){
  echo"gagal :" . $e->getMessage();
}
$data = $query->fetchAll();
// echo"<pre>";
// print_r($data);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>KANJI <TABLE></TABLE></title>
  </head>
<body>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <div class="container mt-3">
      <h2>LIST KANJI</h2>
    <form action="search.php" method="GET">
    <div class="input-group">
      <div class="form-outline" data-mdb-input-init>
        <input type="search"  class="form-control" name="search"  placeholder="Cari...." />
      </div>
      <button type="submit" class="btn btn-primary" data-mdb-ripple-init>
        <i class="fas fa-search">CARI</i>
      </button>
    </div>
  </form>
  <br>
  <a href="add_form.php" class="btn btn-primary">Tambah Kanji</a>
  <br> <br> 
  <table class="table table-striped " border="1"  >
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
          <td width><?= $index +1;?></td>
          <td width="55%"><?= $kanji['kanji'];?></td>
          <td width = "15%">
              <a href="more.php?id=<?= $kanji['id']?>" class="btn btn-info">Selengkapnya</a>
          </td>
          <td width= "20%">
          <a href="edit_form.php?id=<?= $kanji['id'];?>" class="text-decoration-none btn btn-warning" style="color:black;">Edit</a>
           |
           <a href="delete_form.php?id=<?= $kanji['id'];?>" class="text-decoration-none btn btn-danger" style="color:black;">Hapus</a>
          </td>
        </tr>
      </tbody>
      <?php endforeach; ?>
    </table>
    </div>
  </body>
</html>
<!DOCTYPE html>
