<?php
class kucing
{
    public $nama ;
    public $warna;
    public $jenis;

    public function __construct($nama, $warna, $jenis)
    {
        $this->nama = $nama;
        $this->warna = $warna;
        $this->jenis = $jenis;
    }

    public function makan()
    {
        return "Kucing sedang makan";
    }
}
$kucing1 = new kucing("black y", "Hitam", "Persia");
echo "Nama kucing 1: " . $kucing1->nama . "<br>";
echo "Warna kucing 1: " . $kucing1->warna. "<br>";
echo "Jenis kucing 1: " . $kucing1->jenis ."<br>";
echo "<hr>";
$kucing1 = new kucing("snowy", "putih", "Persia");
echo "Nama kucing 2: " . $kucing1->nama . "<br>";
echo "Warna kucing 2: " . $kucing1->warna. "<br>";
echo "Jenis kucing 2: " . $kucing1->jenis ."<br>";