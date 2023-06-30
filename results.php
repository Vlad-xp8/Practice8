<?php
// Отримання значень змінних $c і $d з методу POST
$c = $_POST['c'];
$d = $_POST['d'];

// Перевірка, чи введені значення є цілими числами
if (!is_numeric($c) || !is_numeric($d) || !is_int((int)$c) || !is_int((int)$d)) {
    echo "Введіть цілі числа для змінних \$c і \$d.";
    exit;
}

// Математичні обчислення
$sum = $c + $d;
$product = $c * $d;
$difference = $c - $d;
$quotient = $c / $d;

// Виведення результатів
echo "Змінна c: $c<br>";
echo "Змінна d: $d<br>";
echo "<br>";
echo "Сума: $c + $d = $sum<br>";
echo "Добуток: $c * $d = $product<br>";
echo "Різниця: $c - $d = $difference<br>";
echo "Частка: $c / $d = $quotient<br>";
?>
