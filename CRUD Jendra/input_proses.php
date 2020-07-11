<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';

// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

	// membuat variabel untuk menampung data dari form
	
  $title = $_POST['title'];
  $category_id = $_POST['category_id'];
  $attache = $_POST['attache'];
  $thumbnail = $_POST['thumbnail'];

  // jalankan query INSERT untuk menambah data ke database
  $query = "INSERT INTO video_tb VALUES (NULL,'$title', '$category_id','$attache',$thumbnail)";
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
