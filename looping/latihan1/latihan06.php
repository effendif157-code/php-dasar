<?php
$stok = [
    ["power f" , 10,],
    ["chuba" , 4, ],
    ["aoka" , 9, ],
];
 foreach ($stok as $item) {
 if ($item[1] < 5) {
            echo "stok yang hampir habis adalah: $item[0] tersisa $item[1]";
        }
    }
?>