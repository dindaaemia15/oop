<?php
class Kucing {
    public $warna = 'Kuning';
    public $jumlah_kaki = 4;

    
    public function berburu()
    {
        return "memburu ikan";
    }
}

$kucing_asli = new Kucing;
echo $kucing_asli->warna;
echo '<br>' .$kucing_asli->jumlah_kaki;
echo '<br>' .$kucing_asli->berburu();
echo '<br>' .$kucing_asli->makan('tikus', 'ikan asin');
echo '<br>' .$kucing_asli->sare('');

echo '<hr>';
$kucing_garong = new Kucing;
echo $kucing_garong->warna = "hitam";
echo '<br>' .$kucing_garong->jumlah_kaki = 3;
echo '<br>' .$kucing_garong->makan('wiskas', 'bodrek');