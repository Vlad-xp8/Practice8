<!DOCTYPE html>
<html>

<head>
    <title>Task 1</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>

<body>
    <?php
    // Початок сесії
    session_start();
    ?>

    <h1>Суперглобальні змінні PHP</h1>
    <ul>
        <li>
            <a>Task1</a>
        </li>
        <li>
            <a href="task2.php">Task2</a>
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
    <table>
        <tr>
            <th>Змінна</th>
            <th>Характеристика</th>
            <th>Значення</th>
        </tr>
        <tr>
            <td>$GLOBALS</td>
            <td>Масив глобальних змінних</td>
            <td><?php echo formatVariable($GLOBALS); ?></td>
        </tr>
        <tr>
            <td>$_SERVER</td>
            <td>Інформація про сервер та запит</td>
            <td><?php echo formatVariable($_SERVER); ?></td>
        </tr>
        <tr>
            <td>$_GET</td>
            <td>Змінні з GET-запиту</td>
            <td><?php echo formatVariable($_GET); ?></td>
        </tr>
        <tr>
            <td>$_POST</td>
            <td>Змінні з POST-запиту</td>
            <td><?php echo formatVariable($_POST); ?></td>
        </tr>
        <tr>
            <td>$_FILES</td>
            <td>Завантажені файли</td>
            <td><?php echo formatVariable($_FILES); ?></td>
        </tr>
        <tr>
            <td>$_COOKIE</td>
            <td>Змінні зі сookie</td>
            <td><?php echo formatVariable($_COOKIE); ?></td>
        </tr>
        <tr>
            <td>$_SESSION</td>
            <td>Змінні сесії</td>
            <td><?php echo formatVariable($_SESSION); ?></td>
        </tr>
        <tr>
            <td>$_REQUEST</td>
            <td>Змінні з HTTP-запиту</td>
            <td><?php echo formatVariable($_REQUEST); ?></td>
        </tr>
        <tr>
            <td>$_ENV</td>
            <td>Змінні середовища</td>
            <td><?php echo formatVariable($_ENV); ?></td>
        </tr>
    </table>

    <?php
    function formatVariable($variable)
    {
        return '<pre>' . var_export($variable, true) . '</pre>';
    }
    ?>
</body>

</html>