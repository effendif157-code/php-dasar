<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nilai = 100;

        if ($nilai >= 90) {
            echo "nilai anda A";
        }elseif ($nilai >=75) {
            echo "nilai anda B";
        }elseif ($nilai >=60) {
            echo "nilai anda C";
        }else {
            echo "nilai anda D";
        }
    ?>
</body>
</html>