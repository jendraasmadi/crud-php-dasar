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
      <form id="form_video" action="kategori_proses.php" method="post">
        <fieldset>
        <legend>Input Data Film</legend>
        
          <p>
            <label for="name">Kategori Film: </label>
            <input type="text" name="name" id="name">
          </p>
        
         
            <label for="tahunu">Tahun : </label>
            <input type="text" name="tahun" id="" placeholder="tahun">
          </p>


        </fieldset>
        <p>
          <input type="submit" name="form_video" value="Tambah Data">
        </p>
      </form>
    </div>
  </body>
</html>
