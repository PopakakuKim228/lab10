<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация пользователя</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Регистрация пользователя</h1>
        
        <form action="action.php" method="POST">
            <div class="form-group">
                <label for="fullname">Полное имя:</label>
                <input type="text" id="fullname" name="fullname" placeholder="Введите ваше полное имя" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="example@domain.com" required>
            </div>
            
            <div class="form-group">
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" placeholder="Минимум 6 символов" required>
            </div>
            
            <div class="form-group">
                <label for="confirm_password">Подтверждение пароля:</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Повторите пароль" required>
            </div>
            
            <div class="form-group">
                <label for="gender">Пол:</label>
                <select id="gender" name="gender" required>
                    <option value="">Выберите пол</option>
                    <option value="male">Мужской</option>
                    <option value="female">Женский</option>
                    <option value="other">Другой</option>
                </select>
            </div>
            
            <div class="form-group">
                <label>
                    <input type="checkbox" name="terms" required> Я согласен с условиями использования
                </label>
            </div>
            
            <button type="submit" class="btn">Зарегистрироваться</button>
        </form>
    </div>
</body>
</html>
