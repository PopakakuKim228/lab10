<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container calculator">
        <h1>Калькулятор</h1>
        
        <form method="POST" action="">
            <div class="input-group">
                <input type="number" name="num1" step="any" placeholder="Первое число" required>
                <input type="number" name="num2" step="any" placeholder="Второе число" required>
            </div>
            
            <div class="button-group">
                <button type="submit" name="operation" value="add" class="calc-btn operator">+</button>
                <button type="submit" name="operation" value="subtract" class="calc-btn operator">-</button>
                <button type="submit" name="operation" value="multiply" class="calc-btn operator">×</button>
                <button type="submit" name="operation" value="divide" class="calc-btn operator">÷</button>
            </div>
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['operation'])) {
            $num1 = floatval($_POST['num1']);
            $num2 = floatval($_POST['num2']);
            $operation = $_POST['operation'];
            $result = '';
            $error = '';
            
            switch ($operation) {
                case 'add':
                    $result = $num1 + $num2;
                    $operation_symbol = '+';
                    break;
                case 'subtract':
                    $result = $num1 - $num2;
                    $operation_symbol = '-';
                    break;
                case 'multiply':
                    $result = $num1 * $num2;
                    $operation_symbol = '×';
                    break;
                case 'divide':
                    if ($num2 == 0) {
                        $error = 'Ошибка: Деление на ноль невозможно!';
                    } else {
                        $result = $num1 / $num2;
                        $operation_symbol = '÷';
                    }
                    break;
                default:
                    $error = 'Неизвестная операция';
            }
            
            if ($error) {
                echo '<div class="message error">' . $error . '</div>';
            } else {
                echo '<div class="result">';
                echo '<strong>Результат:</strong><br>';
                echo $num1 . ' ' . $operation_symbol . ' ' . $num2 . ' = ' . $result;
                echo '</div>';
            }
        }
        ?>
        
        <p style="text-align: center; margin-top: 20px;">
            <a href="index.php" style="color: #4CAF50;">Вернуться к регистрации</a>
        </p>
    </div>
</body>
</html>
