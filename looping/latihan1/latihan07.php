<?php
$stok = [
    ["demon slayer" , 9,],
    ["chuba" , 7, ],
    ["aoka" , 8, ],
];
 foreach ($stok as $item) {
 if ($item[1] > 8) {
            echo "film terbaik adalah: $item[0] dengan ratting $item[1]";
        }
    }
?>