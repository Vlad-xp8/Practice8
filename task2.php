<?php
// Задаємо значення змінних $a та $b за замовчуванням
$a = isset($_GET['a']) ? $_GET['a'] : '';
$b = isset($_GET['b']) ? $_GET['b'] : '';

// Перевірка, чи введені значення є цілими числами
if (!empty($a) && !empty($b) && (!is_numeric($a) || !is_numeric($b) || !is_int((int)$a) || !is_int((int)$b))) {
    echo "Введіть цілі числа для змінних \$a і \$b.";
    exit;
}

// Математичні обчислення
$sum = !empty($a) && !empty($b) ? $a + $b : '';
$product = !empty($a) && !empty($b) ? $a * $b : '';
$difference = !empty($a) && !empty($b) ? $a - $b : '';
$quotient = !empty($a) && !empty($b) && $b != 0 ? $a / $b : '';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Математичні обчислення</title>
</head>
<body>

    <h1>Математичні обчислення</h1>
    <ul>
        <li>
            <a href="index.php">Task2</a>
        </li>
        <li>
            <a >Task2</a>
        </li>
        <li>
            <a href="task3.php">Task3</a>
        </li>
        <li>
            <a href="task4.php">Task4</a>
        </li>
        <li>
            <a href="task5.php">Task5</a>
        </li>
    </ul>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="a">Змінна a:</label>
        <input type="text" name="a" id="a" value="<?php echo $a; ?>" required>
        <br>
        <label for="b">Змінна b:</label>
        <input type="text" name="b" id="b" value="<?php echo $b; ?>" required>
        <br>
        <button type="submit">Обчислити</button>
    </form>

    <?php if (!empty($sum)) : ?>
        <h2>Результати:</h2>
        <p>Сума: <?php echo $sum; ?></p>
        <p>Добуток: <?php echo $product; ?></p>
        <p>Різниця: <?php echo $difference; ?></p>
        <p>Частка: <?php echo $quotient; ?></p>
    <?php endif; ?>
</body>
</html>
