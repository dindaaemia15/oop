<?php
class Siswa
{
    public function __destruct()
    {
        echo "<br>ini adalah Destructor";
    }
    public function __hallo()
    {
        return "<br>Hello PHP";
    }
    public function __construct()
    {
        echo "Ini adalah Construct";
    }
}
$hello = new Siswa();
echo $hello->hallo();