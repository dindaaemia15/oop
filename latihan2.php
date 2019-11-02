<?php
class Aritmatika{
    
    public function tambah($bilangan1 = null, $bilangan2 = null){
        $dinda = $bilangan1 + $bilangan2;
        return "Perhitungan $bilangan1 + $bilangan2 = ".$dinda;       
    }
    public function kurang($bilangan1 = null, $bilangan2 = null){
        $dinda = $bilangan1 + $bilangan2;
        return "<br>Perhitungan $bilangan1 - $bilangan2 = ".$dinda;
    }
    public function kali($bilangan1 = null, $bilangan2 = null){
        $dinda = $bilangan1 + $bilangan2;
        return "<br>Perhitungan $bilangan1 * $bilangan2 = ".$dinda;
    }
    public function bagi($bilangan1 = null, $bilangan2 = null){
        $dinda = $bilangan1 + $bilangan2;
        return "<br>Perhitungan $bilangan1 / $bilangan2 = ".$dinda;
    }
}
$Aritmatika_dinda = new Aritmatika();
echo $Aritmatika_dinda->tambah(20,10);
echo $Aritmatika_dinda->kurang(20,10);
echo $Aritmatika_dinda->kali(20,10);
echo $Aritmatika_dinda->bagi(20,10);
 