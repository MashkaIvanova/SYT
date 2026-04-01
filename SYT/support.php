<?php
  $userName = "Мария Сергеевна";
  $status = "Premium Аккаунт";
  $currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>SYT | Поддержка</title>
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
        
        /* КРАСИВЫЕ ПОЛЯ ВВОДА ДЛЯ ПОДДЕРЖКИ */
        .support-form {
            max-width: 100%;
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
        
        textarea.glass-input {
            resize: vertical;
            min-height: 120px;
            line-height: 1.5;
        }
        
        /* Категории поддержки */
        .support-categories {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-bottom: 24px;
        }
        
        .support-cat {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid var(--glass-border);
            border-radius: 30px;
            padding: 8px 25px;
            font-size: 13px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .support-cat:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: var(--accent);
        }
        
        .support-cat.active {
            background: var(--accent);
            border-color: var(--accent);
            color: white;
        }
        
        /* Кнопка отправки */
        .send-btn {
            width: 100%;
            background: linear-gradient(135deg, var(--accent), #ff66a5);
            border: none;
            padding: 14px;
            font-size: 16px;
            font-weight: 600;
            margin-top: 10px;
        }
        
        .send-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 0, 128, 0.3);
        }
        
        /* Контакты */
        .contacts-block {
            margin-top: 30px;
            padding-top: 24px;
            border-top: 1px solid var(--glass-border);
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        .contact-item {
            flex: 1;
            text-align: center;
            padding: 15px;
            background: rgba(255, 255, 255, 0.02);
            border-radius: 16px;
            transition: all 0.3s ease;
        }
        
        .contact-item:hover {
            background: rgba(255, 255, 255, 0.05);
            transform: translateY(-3px);
        }
        
        .contact-icon {
            font-size: 28px;
            margin-bottom: 8px;
            display: block;
        }
        
        .contact-title {
            font-size: 12px;
            opacity: 0.6;
            margin-bottom: 4px;
        }
        
        .contact-value {
            font-size: 13px;
            font-weight: 600;
        }
        
        /* Часто задаваемые вопросы */
        .faq-section {
            margin-top: 30px;
        }
        .glass-card {
    max-width: 650px !important;  /* или 900px, 100% */
    width: 100%;
}
        
        .faq-item {
            padding: 15px 0;
            border-bottom: 1px solid var(--glass-border);
            cursor: pointer;
        }
        
        .faq-question {
            font-weight: 500;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .faq-answer {
            font-size: 13px;
            opacity: 0.6;
            margin-top: 8px;
            display: none;
        }
        
        .faq-item.active .faq-answer {
            display: block;
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
                <h1>💬 Техподдержка 24/7</h1>
            </header>

            <div class="glass-card support-form">
                <h3 style="margin-bottom: 20px;">🚀 Как мы можем помочь?</h3>
                <p style="opacity: 0.6; font-size: 14px; margin-bottom: 24px;">Ваш персональный менеджер ответит в течение 15 минут</p>
                
                <!-- Категории -->
                <div class="support-categories">
                    <div class="support-cat active">📱 Техническая проблема</div>
                    <div class="support-cat">💰 Оплата</div>
                    <div class="support-cat">📊 Аналитика</div>
                    <div class="support-cat">🎨 Дизайн QR</div>
                    <div class="support-cat">📝 Другое</div>
                </div>
                
                <div class="form-group">
                    <label><i>📝</i> Тема обращения</label>
                    <input type="text" class="glass-input" placeholder="Кратко опишите суть вопроса">
                </div>
                
                <div class="form-group">
                    <label><i>💬</i> Сообщение</label>
                    <textarea class="glass-input" placeholder="Опишите вашу проблему подробнее... Укажите, что вы делали и что произошло"></textarea>
                </div>
                
                <div class="form-group">
                    <label><i>📎</i> Прикрепить файл (опционально)</label>
                    <input type="file" class="glass-input" style="padding: 10px;">
                </div>
                
                <button class="glass-btn send-btn">✉️ Отправить сообщение</button>
                
                <!-- Контакты -->
                <div class="contacts-block">
                    <div class="contact-item">
                        <span class="contact-icon">📞</span>
                        <div class="contact-title">Горячая линия</div>
                        <div class="contact-value">8-800-555-35-35</div>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">✉️</span>
                        <div class="contact-title">Email</div>
                        <div class="contact-value">support@syt.tv</div>
                    </div>
                    <div class="contact-item">
                        <span class="contact-icon">💬</span>
                        <div class="contact-title">Telegram</div>
                        <div class="contact-value">@syt_support</div>
                    </div>
                </div>
                
                <!-- Часто задаваемые вопросы -->
                <div class="faq-section">
                    <h4 style="margin-bottom: 15px;">❓ Часто задаваемые вопросы</h4>
                    <div class="faq-item">
                        <div class="faq-question">
                            Как создать QR-код для ТВ-эфира?
                            <span>▼</span>
                        </div>
                        <div class="faq-answer">Перейдите в раздел "Кампании", нажмите "Создать новую", загрузите ваш контент и настройте параметры отображения QR-кода.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            Как посмотреть статистику сканирований?
                            <span>▼</span>
                        </div>
                        <div class="faq-answer">В разделе "Аналитика" вы найдете детальную статистику по всем вашим кампаниям, включая графики динамики и устройства пользователей.</div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            Как связаться с менеджером напрямую?
                            <span>▼</span>
                        </div>
                        <div class="faq-answer">Для премиум-пользователей доступен персональный менеджер. Напишите в чат поддержки, и мы свяжем вас с вашим менеджером в течение 5 минут.</div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    
    <script>
        // FAQ аккордеон
        document.querySelectorAll('.faq-item').forEach(item => {
            item.addEventListener('click', () => {
                item.classList.toggle('active');
            });
        });
        
        // Категории поддержки
        document.querySelectorAll('.support-cat').forEach(cat => {
            cat.addEventListener('click', () => {
                document.querySelectorAll('.support-cat').forEach(c => c.classList.remove('active'));
                cat.classList.add('active');
            });
        });
    </script>
</body>
</html>