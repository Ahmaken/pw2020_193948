<?php 
session_start();

if (isset($_SESSION['login'])) {
  header("Location:index.php");
  exit;
}


require 'functions.php';

//  ketika tombol login ditekan
if (isset($_POST['login'])) {
  $login = $_POST['login'];
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <h3>Form Registrasi</h3>
  <?php if (isset($login['error'])) : ?>
    <p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
  <?php endif; ?>
  <form action="" method="post">
    <ul>
      <li>
        <label>
          Username :
          <input type="text" name="username" autofocus  autocomplete="off">
        </label>
      </li>
      <li>
        <label>
          Password :        
          <input type="password" name="password" required>
        </label>
      </li>
      <li>
        <button type="submit" name="login">Login</button>
      </li>
      <li>
        <a href="registrasi.php">Tambah user enggal</a>
      </li>
    </ul>
  </form>
</body>
</html>