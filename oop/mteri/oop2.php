<?php
class hp{
    public $merk = "OPPO";
    public $warna = "biru langit";

    public function milik()
    {
        return "milik fahmi";
    }
}
$hape = new hp();
echo "hape itu ber merk:" . $hape->merk . "<br>";
echo "hape itu berwarna:" . $hape->warna . "<br>";
echo "hape itu " . $hape->milik() . "<br>";