<?php 

function koneksi() 
{
  return mysqli_connect("localhost", "root", "", "pw2020_193948");
}

function query($query) 
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya satu
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }
  
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


?>