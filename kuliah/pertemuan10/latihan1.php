<?php 
//  Koneksi ke DB & Pilih Database
$conn = mysqli_connect("localhost", "root", "", "pw2020_193948");

// Query isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");


// ubah data ke dalam array
// $row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array associative
// $row = mysqli_fetch_array($result); // array numerik & associative
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
var_dump($row);


while ($row = mysqli_fetch_assoc($result)) {
    echo $row['nrp'];
}


// tampung ke variabel mahasiswa
$mahasiswa = $rows;
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Daftar Mahasiswa</title>
</head>
<body>
 <h3>Daftar Mahasiswa</h3>

 <table border="1" cellpadding="10" cellspacing="0">
  <tr>
   <th>#</th>
   <th>Gambar</th>
   <th>NRP</th>
   <th>Nama</th>
   <th>Email</th>
   <th>Jurusan</th>
   <th>Aksi</th>
  </tr>

  <?php $i = 1;
  foreach ($mahasiswa as $m) : ?>
  <tr>
    <td><?= $i++; ?></td>
    <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
    <td><?= $m['nrp']; ?></td>
    <td><?= $m['nama']; ?></td>
    <td><?= $m['email']; ?></td>
    <td><?= $m['jurusan']; ?></td>
    <td>
      <a href="">gantos</a> | <a href="">gusek</a>
    </td>
  </tr>
  <?php endforeach; ?>


 </table>
</body>
</html>