<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Penduduk</title>
</head>
<body>
     <fieldset>
          <legend>Data Penduduk</legend>
          <form avtion="" method="post">
          <label for="">Jumlah Penduduk</label>
          <input type="number" name="jmlh" min="1" required>
          <input type="submit" value="Next" name="simpan">
          <input type="hidden" name="<?php echo $jmlh; ?>">
          </form>
          <?php
              if(isset($_POST['simpan'])){
                  $jmlh = $_POST['jmlh'];
                  for ($i=1; $i <= $jmlh; $i++){
                      # code...

          ?>
          
          <form action="latpro.php" method="post">
              <hr>
              <label for="">Nama</label>
              <input type="text" name="nama[]" required>
              <label for="">Nik</label>
              <input type="number" name="nik[]" min="0" required>
              <label for="">Alamat</label>
              <textarea name="alamat[]" required></textarea>
              <label for="">Umur</label>
              <input type="number"  name="umur[]" min="0" required>
              <br><<br>
               <?php } ?>
               <input type="submit" value="Proses" name="prosses">
                </form>

            </fieldset>
            <?php } ?>
    
</body>
</html>