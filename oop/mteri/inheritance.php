<?php
class Hewan{
    public $warna = "Hitam", $umur;
    public function makan()
    {
        return "Hewan sedang makan";
    }
}

class Kucing extends Hewan
{
    public function suara()
    {
        return "Meong Meong";
    }
}

$kucing = new Kucing();
echo $kucing->warna;
echo "<br>";

