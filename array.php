<?php
// array indexing
$ar_buah = ['pisang', 'jambu', 'pepaya', 'melon'];
// mencetak salah satu index array
echo $ar_buah[3];

echo "<ol>";
foreach ($ar_buah as $buah) {
    echo"<li>$buah</li>";
}
echo "</ol>";