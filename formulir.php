<?php
    class Rpl2{
        public $siswa;
        public $laki;
        public $cewe;
        public $wakel;
        public $ketua;
        public function sekolah(){
            return "SMK ASSALAAM";
        } public function jurusan(){
            return "RPL";
        }
    }
    $a = new Rpl2;
    $a->siswa=32;
    $a->laki=22;
    $a->cewe=10;
    $a->wakel="wildan abdul azis.kom";
    $a->ketua="Refana Bagas";
    echo "Di ".$a->jurusan()."2,terdiri dari $a->siswa siswa,
    yang di antaranya : <br>";
    echo "Siswa Laki Laki : $a->laki<br>";
    echo "Siswa Perempuan : $a->cewe<br>";
    echo "Wali Kelas : $a->wakel<br>";
    echo "Ketua Murid : $a->ketua<br><br><br>";
    $a1 = new Rpl2;
    $a1->siswa=32;
    $a1->laki=22;
    $a1->cewe=10;
    $a1->wakel="wildan abdul azis.kom";
    $a1->ketua="Refana Bagas";
    echo "Di ".$a1->jurusan()."2,terdiri dari $a1->siswa siswa,
    yang di antaranya : <br>";
    echo "Siswa Laki Laki : $a1->laki<br>";
    echo "Siswa Perempuan : $a1->cewe<br>";
    echo "Wali Kelas : $a1->wakel<br>";
    echo "Ketua Murid : $a1->ketua<br>";


    ?>