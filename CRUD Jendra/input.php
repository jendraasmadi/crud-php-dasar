<?php
require_once 'koneksi.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      h1{
        text-align: center;
      }
      .container{
        width: 400px;
        margin: auto;
      }
    </style>
  </head>
  <body>
    <h1>Input Data</h1>
    <div class="container">
      <form id="" action="input_proses.php" method="post">
        <fieldset>
        <legend>Input Data Film</legend>
        
          <p>
            <label for="name">Nama Film: </label>
            <input type="text" name="title" id="title">
          </p>
          <p>
          
            <label for="category_id" >Kategori : </label>

              <select name="category_id" id="">
              
              <option>-- Pilih Kategori --</option>
              <?php
              $query="SELECT * FROM category_tb";
              $hasil= mysql_query($ink, $query);
              while ($data=mysql_fetch_array($hasil)){
                ?>
                <option value="<?php echo $data['id']?>"></option>
                <?php
              }
              ?>
        
              </select>

         
            <label for="attache">File : </label>
            <input type="text" name="attache" id="" placeholder="">
          </p>

           <p>
            <label for="thumbnail">Gambar : </label>
            <input type="text" name="thumbnail" id="" placeholder="...">
          </p>

        </fieldset>
        <p>
          <input type="submit" name="input" value="Tambah Data">
        </p>
      </form>
    </div>
  </body>
</html>
