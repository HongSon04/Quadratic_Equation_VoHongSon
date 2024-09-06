<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = isset($_POST['a']) ? (float)$_POST['a'] : 0;
    $b = isset($_POST['b']) ? (float)$_POST['b'] : 0;
    $c = isset($_POST['c']) ? (float)$_POST['c'] : 0;

    if ($a == 0) {
        echo "Đây không phải là phương trình bậc 2.";
        exit();
    }

    $delta = $b * $b - 4 * $a * $c;
    if ($delta < 0) {
        echo "Phương trình vô nghiệm.";
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        echo "Phương trình có nghiệm kép: x = " . $x;
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "Phương trình có 2 nghiệm phân biệt: x1 = " . $x1 . ", x2 = " . $x2;
    }
}
