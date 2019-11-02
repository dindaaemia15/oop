<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gaji</title>
</head>
<body>
     <fieldset>
     <legend>Form Gaji</legend>
     <form action="gaji.php" method="post">
     <label for="">Nama Pegawai</label>
     <input type="text" name="nama" required><br><br>
     <label for="">NIP</label>
     <input type="number" name="nip" min="1" required><br><br>
     <label for="">Alamat</label>
     <textarea name="alamat"></textarea><br><br>
     <label for="">Jumlah Hari Kerja</label>
     <input type="number" name="jmlhr" min="1" max="30" required><br><br>
     <input type="submit" value="proses" name="proses">
     </form>
</fieldset>
    
</body>
</html>
