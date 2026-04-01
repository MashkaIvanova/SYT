<?php
  $userName = "Мария Сергеевна";
  $status = "Premium Аккаунт";
  $currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>SYT | Настройки</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* ПРИНУДИТЕЛЬНОЕ УМЕНЬШЕНИЕ ИКОНОК */
        nav a img.nav-icon,
        .sidebar nav a img {
            width: 25px !important;
            height: 25px !important;
            min-width: 25px !important;
            max-width: 25px !important;
            display: inline-block !important;
            vertical-align: middle !important;
        }
        
        nav a {
            padding: 10px 14px !important;
            gap: 10px !important;
        }
        /* Делаем иконки белыми */
.nav-icon {
    filter: brightness(0) invert(1) !important;
}

/* При наведении можно сделать с акцентным цветом */
nav a:hover .nav-icon {
    filter: brightness(0) invert(1) drop-shadow(0 0 2px var(--accent)) !important;
}

/* Активная страница - иконка тоже белая с подсветкой */
nav a.active .nav-icon {
    filter: brightness(0) invert(1) drop-shadow(0 0 2px var(--accent)) !important;
}
        
        /* КРАСИВЫЕ ПОЛЯ ВВОДА */
        .settings-form {
            max-width: 550px;
        }
        
        .form-group {
            margin-bottom: 24px;
        }
        
        .form-group label {
            display: block;
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 8px;
            color: rgba(255, 255, 255, 0.7);
        }
        
        .form-group label i {
            margin-right: 6px;
        }
        
        .glass-input {
            width: 100%;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid var(--glass-border);
            padding: 14px 25px;
            border-radius: 16px;
            color: white;
            font-size: 14px;
            outline: none;
            transition: all 0.3s ease;
            font-family: inherit;
            width: 100% !important;
    max-width: 100% !important;
    box-sizing: border-box;
        }
        
        .glass-input:hover {
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(255, 255, 255, 0.2);
        }
        
        .glass-input:focus {
            border-color: var(--accent);
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 0 3px rgba(255, 0, 128, 0.1);
        }
        
        .glass-input::placeholder {
            color: rgba(255, 255, 255, 0.3);
        }
        
        /* Стили для select */
        .glass-select {
            width: 100%;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid var(--glass-border);
            padding: 14px 25px;
            border-radius: 16px;
            color: white;
            font-size: 14px;
            outline: none;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .glass-select:hover {
            background: rgba(255, 255, 255, 0.08);
        }
        
        .glass-select:focus {
            border-color: var(--accent);
        }
        
        .glass-select option {
            background: #0f0c29;
            color: white;
        }
        
        /* Разделитель */
        .form-divider {
            margin: 30px 0 20px;
            border-top: 1px solid var(--glass-border);
            position: relative;
        }
        
        .form-divider span {
            position: absolute;
            top: -12px;
            left: 0;
            background: rgba(0, 0, 0, 0.5);
            padding: 0 12px;
            font-size: 12px;
            color: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(10px);
            border-radius: 20px;
        }
        
        /* Кнопка сохранения */
        .save-btn {
            width: 100%;
            margin-top: 20px;
            background: linear-gradient(135deg, var(--accent), #ff66a5);
            border: none;
            padding: 14px;
            font-size: 16px;
            font-weight: 600;
        }
        
        .save-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 0, 128, 0.3);
        }
    </style>
</head>
<body>
    <div class="glass-container">
        <aside class="sidebar">
            <div class="logo">SYT<span>.tv</span></div>
            <nav>
                <a href="index.php" class="<?php echo $currentPage == 'index.php' ? 'active' : ''; ?>">
                    <img src="dashboard.png" class="nav-icon" alt=""> Дашборд
                </a>
                <a href="campaigns.php" class="<?php echo $currentPage == 'campaigns.php' ? 'active' : ''; ?>">
                    <img src="campaigns.png" class="nav-icon" alt=""> Кампании
                </a>
                <a href="analytics.php" class="<?php echo $currentPage == 'analytics.php' ? 'active' : ''; ?>">
                    <img src="analytics.png" class="nav-icon" alt=""> Аналитика
                </a>
                <a href="settings.php" class="<?php echo $currentPage == 'settings.php' ? 'active' : ''; ?>">
                    <img src="settings.png" class="nav-icon" alt=""> Настройки
                </a>
                <a href="support.php" class="<?php echo $currentPage == 'support.php' ? 'active' : ''; ?>">
                    <img src="support.png" class="nav-icon" alt=""> Поддержка
                </a>
            </nav>
            <div class="user-card">
                <p><?php echo $userName; ?></p>
                <span><?php echo $status; ?></span>
            </div>
        </aside>

        <main class="content">
            <header>
                <h1>⚙️ Настройки профиля</h1>
            </header>

            <div class="glass-card settings-form">
                <div class="form-group">
                    <label><i>👤</i> Имя пользователя</label>
                    <input type="text" class="glass-input" value="<?php echo $userName; ?>" placeholder="Введите ваше имя">
                </div>
                
                <div class="form-group">
                    <label><i>📧</i> Email для уведомлений</label>
                    <input type="email" class="glass-input" value="mariya@example.com" placeholder="example@mail.com">
                </div>
                
                <div class="form-group">
                    <label><i>📱</i> Телефон</label>
                    <input type="tel" class="glass-input" value="+7 (999) 123-45-67" placeholder="+7 (___) ___-__-__">
                </div>
                
                <div class="form-divider"><span>Безопасность</span></div>
                
                <div class="form-group">
                    <label><i>🔑</i> API Ключ</label>
                    <input type="password" class="glass-input" value="••••••••••••" placeholder="Ваш API ключ">
                </div>
                
                <div class="form-group">
                    <label><i>🔄</i> Сменить пароль</label>
                    <input type="password" class="glass-input" placeholder="Новый пароль">
                </div>
                
                <div class="form-divider"><span>Настройки интерфейса</span></div>
                
                <div class="form-group">
                    <label><i>🌐</i> Язык интерфейса</label>
                    <select class="glass-select">
                        <option>🇷🇺 Русский</option>
                        <option>🇬🇧 English</option>
                        <option>🇩🇪 Deutsch</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label><i>🎨</i> Тема оформления</label>
                    <select class="glass-select">
                        <option>🌙 Темная (по умолчанию)</option>
                        <option>☀️ Светлая</option>
                        <option>💜 Неон</option>
                    </select>
                </div>
                
                <button class="glass-btn save-btn">💾 Сохранить изменения</button>
            </div>
        </main>
    </div>
</body>
</html>