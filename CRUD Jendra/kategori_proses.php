<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['form_video'])) {

	// membuat variabel untuk menampung data dari form

$id=$_POST['id'];
  $name = $_POST['name'];
  $tahun = $_POST['tahun'];


  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO category_tb VALUES (NULL,'$name', '$tahun')";
  $result = mysqli_query($link, $query);
  // periska query apakah ada error
  if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
}

// melakukan redirect (mengalihkan) ke halaman index.php
header("location:index.php");
?>
