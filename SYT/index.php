<?php
  $userName = "Мария Сергеевна";
  $status = "Premium Аккаунт";
  $currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SYT | Дашборд</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* ПРИНУДИТЕЛЬНОЕ УМЕНЬШЕНИЕ ИКОНОК */
        nav a img.nav-icon,
        .sidebar nav a img,
        img[src*=""] {
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
        
        /* Исправление таблицы */
        .glass-table th,
        .glass-table td {
            text-align: left !important;
        }
        
        .glass-table th:nth-child(2),
        .glass-table td:nth-child(2) {
            text-align: center !important;
        }
        
        .glass-table th:nth-child(3),
        .glass-table td:nth-child(3) {
            text-align: right !important;
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
                <h1>Статистика QR-эфира</h1>
                <button class="glass-btn">+ Создать проект</button>
            </header>

            <div class="stats-grid">
                <div class="glass-card">
                    <span>Сканирований</span>
                    <h2>14.2k</h2>
                    <div class="progress-bar"><div style="width: 75%"></div></div>
                </div>
                <div class="glass-card">
                    <span>Активных ТВ-каналов</span>
                    <h2>12</h2>
                    <div class="progress-bar"><div style="width: 40%"></div></div>
                </div>
                <div class="glass-card">
                    <span>Конверсия</span>
                    <h2>8.4%</h2>
                    <div class="progress-bar"><div style="width: 90%"></div></div>
                </div>
            </div>

            <div class="glass-table-container">
                <h3>Последние запуски</h3>
                <table class="glass-table">
                    <thead>
                        <tr>
                            <th>Название кампании</th>
                            <th>Охват (сканов)</th>
                            <th>Статус</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>🎄 Новогодний оффер</td>
                            <td>45 000</td>
                            <td><span class="status-pill status-active">В эфире</span></td>
                        </tr>
                        <tr>
                            <td>🌸 Весенняя распродажа</td>
                            <td>12 500</td>
                            <td><span class="status-pill status-paused">На паузе</span></td>
                        </tr>
                        <tr>
                            <td>📺 QR-код для ТВ-3</td>
                            <td>8 200</td>
                            <td><span class="status-pill status-active">В эфире</span></td>
                        </tr>
                        <tr>
                            <td>☕ Акция: Кофе 1+1</td>
                            <td>3 800</td>
                            <td><span class="status-pill status-active">В эфире</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>