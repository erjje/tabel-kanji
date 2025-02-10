<?php
include("connection.php");
$id = $_GET['id'];

try{
  $query = $db->query("SELECT * FROM huruf WHERE id = $id");
}catch(Exception $e){
  echo"gagal :" . $e->getMessage();
}
$data = $query->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TAMBAH KANJI</title>
</head>
<body>
  <h2>EDIT DATA</h2>
  <div>
  <form action="edit.php" method="POST">
    <input type="hidden" name="id" value="<?= $data['id'];?>" htmlspecialchars>
    <table border="1" cellpadding="10" cellspacing="0 ">
      <tr>
        <th><label for="kanji">KANJI</label></th>
        <td><input type="text" name="kanji" id="kanji" value="<?= $data['kanji']; ?>"  htmlspecialchars></td>
      </tr>
      <tr>
      <th><label for="kunyomi">KUNYOMI</label></th>
      <td><input type="text" name="kunyomi" id="kunyomi" value="<?= $data['kunyomi']; ?>" htmlspecialchars></td>
      </tr>
      <tr>
      <th><label for="onyomi">ONYOMI</label></th>
      <td><input type="text" name="onyomi" id="onyomi" value="<?= $data['onyomi']; ?>" htmlspecialchars></td>
      </tr>
      <tr>
      <th><label for="word">Cara menggunakan</label></th>
      <th><textarea name="word" id="word" htmlspecialchars><?= $data['onyomi']; ?></textarea></th>
      </tr>
      <tr>
        <td><a href="list_kanji.php">&laquo; Kembali</a></td>
        <td> <button type="submit">SIMPAN</button></td>
      </tr>
    </table>
</form>
  </div>
</body>
</html>