<?php
    class Gaji{
        public $nama;
        public $nip;
        public $ala;
        public $hari;
        public function __construct($nama,$nipp,$alaa,$hari){
            $this->nama = $nama;
            $this->nip = $nipp;
            $this->ala = $alaa;
            $this->hari = $hari;
        } public function Gajikotor(){
            $g_kotor = $this->hari * 75000;
            return "Gaji Kotor : $g_kotor<br>";
        } public function Gajibersih(){
            $g_kotor = $this->hari * 75000;
            $g_bersih = $g_kotor * 0.025;
            $bersih = $g_kotor - $g_bersih;
            return "Gaji Bersih : $bersih<br>";
        }
    }
    if (isset($_POST['proses'])){
        $namaa = $_POST['nama'];
        $nip = $_POST['nip'];
        $alamat = $_POST['alamat'];
        $harii = $_POST['jmlhr'];
    }
    $output = new Gaji($namaa, $nip, $alamat, $harii);
    echo "Nama : $namaa<br>";
    echo "NIP : $nip<br>";
    echo "Alamat : $alamat<br>";
    echo "Jumlah Hari Kerja : $harii<br>";
    echo $output->Gajikotor();
    echo $output->Gajibersih();

    ?>