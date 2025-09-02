<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $totalBelanja = 500000;

        if ($totalBelanja >= 500000) {
            echo "selamat anda mendapatkan diskon sebesar 20%";
        }elseif ($totalBelanja >=250000) {
            echo "selamat anda mendapatkan diskon sebesar 10%";
        }else {
            echo "anda tidak mendapatkan diskon";
        }
    ?>
</body>
</html>