<html>
<p align="center">
<?php
class siswa{
    public $siswa1;
    public $jenis_kelamin;
    public $umur;

     public function __construct($siswa1, $jenis_kelamin, $umur,)
    {
        $this->siswa1 = $siswa1;
        $this->$jenis_kelamin = $jenis_kelamin;
        $this->umur = $umur;
    }
   
}
$budi = new siswa("budi", "laki", "16");
echo "nama siswa: " . $budi->siswa1 . "<br>";
echo "umurnya: " . $budi->umur . "<br>";
echo "jenis kelamin:" . $budi->jenis_kelamin . "<br>";
echo "<hr>";
$dadan = new siswa("dadan", "laki", "16");
echo "nama siswa: " . $dadan->siswa1 . "<br>";
echo "umurnya: " . $budi->umur . "<br>";
echo "jenis kelamin:" . $budi->jenis_kelamin . "<br>";
echo "<hr>";
$rehan = new siswa("rehan", "laki", "16");
echo "nama siswa: " . $rehan ->siswa1 . "<br>";
echo "umurnya: " . $rehan->umur . "<br>";
echo "jenis kelamin:" . $budi->jenis_kelamin . "<br>";
echo "<hr>";
$maryana = new siswa("maryana", "perempuan", "16");
echo "nama siswa: " . $maryana->siswa1 . "<br>";
echo "umurnya: " . $maryana->umur . "<br>";
echo "jenis kelamin:" . $budi->jenis_kelamin . "<br>";
echo "<hr>";
?>
</p>
</html>