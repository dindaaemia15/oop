<p>Masukan Jari-Jari Lingkaran</p>
<form action="" method="post">
   Jari - Jari :<input type="text" name="jari2"><br>
   <input type="submit" name="submit" value="Hitung">
</form>

<?php
if(isset($_POST['submit'])){
    $jari2 = $_POST['jari2'];
    $phi = 3.24;
    $luas_lingkaran = $phi * $jari2 * $jari2;

    echo "Lingkaran dengan jari-jari <b>$jari2</b> maka memiliki <br>";
    echo "Luas : <b>$luas_lingkaran</b></br><hr>";
}