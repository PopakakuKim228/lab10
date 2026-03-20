<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат регистрации</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            (isset($_POST['email']) && isset($_POST['password'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $fullname = $_POST['fullname'] ?? 'Не указано';
                $gender = $_POST['gender'] ?? 'Не указан';
                $confirm_password = $_POST['confirm_password'] ?? '';

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo '<div class="message error">Ошибка: Некорректный формат email</div>';
                }
                elseif (strlen($password) < 6) {
                    echo '<div class="message error">Ошибка: Пароль должен содержать минимум 6 символов</div>';
                }
                elseif ($password !== $confirm_password) {
                    echo '<div class="message error">Ошибка: Пароли не совпадают</div>';
                }
                else {
                    echo '<div class="message success">Регистрация успешно завершена!</div>';
                    echo '<h2>Введенные данные:</h2>';
                    echo '<p><strong>Полное имя:</strong> ' . htmlspecialchars($fullname) . '</p>';
                    echo '<p><strong>Email:</strong> ' . htmlspecialchars($email) . '</p>';
                    echo '<p><strong>Пол:</strong> ' . htmlspecialchars($gender) . '</p>';
                    echo '<p><strong>Пароль:</strong> (скрыт из соображений безопасности)</p>';
                }
            } else {
                echo '<div class="message error">Ошибка: Не все обязательные поля заполнены</div>';
                echo '<p><a href="index.php">Вернуться к форме регистрации</a></p>';
            }
        } else {
            echo '<div class="message error">Доступ запрещен</div>';
            echo '<p><a href="index.php">Вернуться к форме регистрации</a></p>';
        }
        ?>
        
        <p style="text-align: center; margin-top: 20px;">
            <a href="index.php" class="btn" style="display: inline-block; width: auto; padding: 10px 20px;">На главную</a>
        </p>
    </div>
</body>
</html>
