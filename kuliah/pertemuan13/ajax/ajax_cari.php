<?php 
 require '../functions.php';
 $mahasiswa = cari($_GET['keyword']);
?>

<table border="1" cellpadding="10" cellspacing="0">
  <tr>    
    <th>#</th>
    <th>Gambar</th>
    <th>Nama</th>
    <th>Aksi</th>
    
  </tr>

  <?php if (empty($mahasiswa)) : ?>
    <tr>
      <td colspan="7">
        <p style="color: red; font-style: italic;">data dereng ditemokaken!</p>
      </td>
    </tr>
  <?php else : ?>
    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $m) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href="ubah.php?id=<?= $m['id']; ?>">ubah</a> |
          <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('yakin?');">hapus</a> |
          <a href="detail.php?id=<?= $m['id']; ?>">detail</a>
        </td>
        <td><img src="../img/<?= $m['gambar']; ?>" width="50"></td>
        <td><?= $m['nrp']; ?></td>
        <td><?= $m['nama']; ?></td>
        <td><?= $m['email']; ?></td>
        <td><?= $m['jurusan']; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  <?php endif; ?>