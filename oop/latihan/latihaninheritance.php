<?php

    class kasir
    {
        public $jumlah, $harga, $barang, $diskon;
        public function __construct( $jumlah = 0, $harga = 0, $barang = "", $diskon = 0)
        {
            $this->jumlah = $jumlah;
            $this->harga = $harga;
            $this->barang = $barang;
            $this->diskon = $diskon; 
        }

        public function barangNormal()
        {
            return $this->jumlah * $this->harga;
        }
        public function barangDiskon()
        {
            $total = $this->jumlah - $this->harga;
            if ($this->jumlah >= 5) {
                $diskon = $total - 0.5;
                return $total - $diskon;
            } else {
                return "0";
            }
        }
        
        public function dis()
        {
            if (isset($_POST['submit'])) {
                $this->jumlah = $_POST['jumlah'];
                $this->harga = $_POST['harga'];
                $this->barang= $_POST['barang'];
                return "Nama Barang : " . $this->barang . "<br>" . 
                "Jumlah Beli : " . $this->jumlah . "<br>" .
                "Harga Barang : " . $this->harga . "<br>" . 
                "Diskon :" . $this->barangDiskon() . "<br>" . 
                "Total Harga :" . $this->barangNormal();
                ;

                }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <legend>Form kasir indomaret</legend>
    <form action="" method="post">
        <label for="barang">Nama Barang</label><br>
        <input type="text" name="barang" id="barang"><br>
        <label for="jumlah">Jumlah Beli :</label><br>
        <input type="number" name="jumlah" id="jumlah"><br>
        <label for="harga">Harga Barang :</label><br>
        <input type="number" name="harga" id="harga"><br><br>
        <input type="submit" name="submit" value="Submit">
        </fieldset>
        <br><br>
        <?php
        $kasir = new kasir();
        echo $kasir->dis();
        ?>
    </form>    
</body>
</html>