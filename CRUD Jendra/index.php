<?php
  // memanggil file koneksi.php untuk melakukan koneksi database
  include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <style>
      table{
        width: 840px;
        margin: auto;
      }
      h1{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h1>Tabel Biodata Mahasiswa</h1>
    <center><a href="input.php">Input Data &Gt; </a>
    </br><a href="kategori_input.php">Input kategori &Gt; </a></center>
    <br/>
    <table border="1">
      <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama FILM</th>
        <th>KATEGORI</th>
        <th>FILE</th>
        <th>GAMBAR</th>
    
      </tr>
      <?php
     
      $query = "SELECT * FROM video_tb ORDER BY id ASC";
      $result = mysqli_query($link, $query);
     
      if(!$result){
        die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
      }

     
      $no = 1; //variabel untuk membuat nomor urut
    
   
      while($data = mysqli_fetch_assoc($result))
      {
        // mencetak / menampilkan data
        echo "<tr>";
        echo "<td>$no</td>"; 
        echo "<td>$data[id]</td>";
        echo "<td>$data[title]</td>"; 
        echo "<td>$data[category_id]</td>"; 
        echo "<td>$data[attache]</td>"; 
        echo "<td>$data[thumnail]</td>"; 
       
        echo '<td>
          <a href="edit.php?id='.$data['id'].'">Edit</a> /
          <a href="hapus.php?id='.$data['id'].'"
      		  onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
        </td>';
        echo "</tr>";
        $no++; 
      }
      ?>
    </table>
  </body>
</html>
