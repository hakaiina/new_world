<!DOCTYPE html>
<?php
$base_path = ''; 
?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Новый Мир - Установка окон и балконов в Вологде</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH; ?>/style.css">
    <script src="<?php echo JS_PATH; ?>/script.js" defer></script>
</head>
<body>
    <!-- Шапка -->
    <header>
        <div class="container header-container">
            <a href="#" class="logo">
                <i class="fas fa-home"></i>
                Новый Мир
            </a>
            <button class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </button>
            <nav>
                <ul>
                    <li><a href="#advantages">Преимущества</a></li>
                    <li><a href="#services">Услуги</a></li>
                    <li><a href="#results">Результаты</a></li>
                    <li><a href="#discount">Акции</a></li>
                    <li><a href="#reviews">Отзывы</a></li>
                    <li><a href="#contacts">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Герой секция -->
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="container">
            <div class="hero-content">
                <h1>Окна и балконы для вашего комфорта</h1>
                <p>Профессиональная установка окон и балконов в Вологде. Качественные материалы, опытные мастера и гарантия на все работы.</p>
                <div class="hero-btns">
                    <a href="#services" class="btn">Выбрать услугу</a>
                    <a href="#contacts" class="btn btn-secondary">Связаться с нами</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Преимущества -->
    <section id="advantages" class="advantages">
        <div class="container">
            <h2>Почему выбирают нас</h2>
            <div class="advantages-grid">
                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Гарантия качества</h3>
                    <p>Предоставляем гарантию до 10 лет на профили и 5 лет на монтаж</p>
                </div>
                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Опытные мастера</h3>
                    <p>Наши специалисты с опытом работы более 7 лет выполнят работу качественно и в срок</p>
                </div>
                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Современное оборудование</h3>
                    <p>Используем профессиональное оборудование для точных замеров и монтажа</p>
                </div>
                <div class="advantage-card">
                    <div class="advantage-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Экологичные материалы</h3>
                    <p>Применяем только сертифицированные материалы, безопасные для здоровья</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Услуги -->
    <section id="services" class="services">
        <div class="container">
            <h2>Наши услуги</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-img" style="background-image: url('https://images.unsplash.com/photo-1558618666-fcd25856cd63?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')"></div>
                    <div class="service-content">
                        <h3>Пластиковые окна</h3>
                        <p>Установка качественных пластиковых окон с повышенной шумо- и теплоизоляцией</p>
                        <div class="service-price">от 4 500 руб./м²</div>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Профили Rehau, KBE, Veka</li>
                            <li><i class="fas fa-check"></i> Фурнитура от ведущих производителей</li>
                            <li><i class="fas fa-check"></i> Монтаж по ГОСТу</li>
                            <li><i class="fas fa-check"></i> Гарантия 5 лет</li>
                        </ul>
                        <a href="#request" class="btn btn-secondary" style="width: 100%;">Заказать расчет</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-img" style="background-image: url('https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2058&q=80')"></div>
                    <div class="service-content">
                        <h3>Балконы и лоджии</h3>
                        <p>Остекление и отделка балконов и лоджий "под ключ"</p>
                        <div class="service-price">от 25 000 руб.</div>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Холодное и теплое остекление</li>
                            <li><i class="fas fa-check"></i> Внутренняя и внешняя отделка</li>
                            <li><i class="fas fa-check"></i> Утепление и электрика</li>
                            <li><i class="fas fa-check"></i> Мебель на заказ</li>
                        </ul>
                        <a href="#request" class="btn btn-secondary" style="width: 100%;">Заказать расчет</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-img" style="background-image: url('https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2053&q=80')"></div>
                    <div class="service-content">
                        <h3>Двери и входные группы</h3>
                        <p>Входные и межкомнатные двери, остекление входных групп</p>
                        <div class="service-price">от 12 000 руб.</div>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Входные металлические двери</li>
                            <li><i class="fas fa-check"></i> Межкомнатные двери</li>
                            <li><i class="fas fa-check"></i> Раздвижные системы</li>
                            <li><i class="fas fa-check"></i> Противовзломная фурнитура</li>
                        </ul>
                        <a href="#request" class="btn btn-secondary" style="width: 100%;">Заказать расчет</a>
                    </div>
                </div>
            </div>

            <!-- Форма заявки -->
            <div id="request" class="request-form">
                <h3>Оставить заявку на расчет</h3>
                <form id="requestForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Ваше имя</label>
                            <input type="text" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Телефон</label>
                            <input type="tel" id="phone" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="service">Услуга</label>
                        <select id="service" class="form-control" required>
                            <option value="">Выберите услугу</option>
                            <option value="windows">Пластиковые окна</option>
                            <option value="balcony">Балконы и лоджии</option>
                            <option value="doors">Двери и входные группы</option>
                            <option value="other">Другое</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Дополнительная информация</label>
                        <textarea id="message" class="form-control" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn" style="width: 100%;">Отправить заявку</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Результаты -->
    <section id="results" class="results">
        <div class="container">
            <h2>Наши результаты за прошедший месяц</h2>
            <div class="results-grid">
                <div class="result-item">
                    <div class="result-number">142</div>
                    <div class="result-text">Установленных окон</div>
                </div>
                <div class="result-item">
                    <div class="result-number">37</div>
                    <div class="result-text">Остекленных балконов</div>
                </div>
                <div class="result-item">
                    <div class="result-number">28</div>
                    <div class="result-text">Установленных дверей</div>
                </div>
                <div class="result-item">
                    <div class="result-number">96%</div>
                    <div class="result-text">Довольных клиентов</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Скидка -->
    <section id="discount" class="discount">
        <div class="container">
            <div class="discount-content">
                <h2>Специальное предложение!</h2>
                <p>Оставьте заявку прямо сейчас и получите скидку 15% на установку окон. Акция действует до конца месяца!</p>
                <form class="discount-form">
                    <input type="tel" class="form-control" placeholder="Ваш телефон" required>
                    <button type="submit" class="btn btn-accent">Получить скидку</button>
                </form>
                <p style="font-size: 0.9rem; margin-top: 15px;">* Скидка будет зарезервирована за вашим номером телефона</p>
            </div>
        </div>
    </section>

    <!-- Отзывы -->
    <section id="reviews" class="reviews">
        <div class="container">
            <h2>Отзывы наших клиентов</h2>
            <div class="reviews-grid">
                <div class="review-card">
                    <div class="review-header">
                        <div class="review-author">Анна Петрова</div>
                        <div class="review-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="review-text">Заказывала остекление балкона. Работой очень довольна! Мастера приехали вовремя, все сделали аккуратно и чисто. Цена соответствует качеству. Рекомендую!</div>
                </div>
                <div class="review-card">
                    <div class="review-header">
                        <div class="review-author">Сергей Иванов</div>
                        <div class="review-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <div class="review-text">Менял старые деревянные окна на пластиковые. От замеров до установки - все на высшем уровне. Особенно порадовала аккуратность монтажников и уборка после работы.</div>
                </div>
                <div class="review-card">
                    <div class="review-header">
                        <div class="review-author">Ольга Смирнова</div>
                        <div class="review-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <div class="review-text">Заказывала входную дверь. Качество отличное, установили быстро. Небольшие замечания по срокам доставки, но в целом все хорошо. Спасибо!</div>
                </div>
            </div>

            <!-- Форма отзыва -->
            <div class="add-review-form">
                <h3>Оставить отзыв</h3>
                <form id="reviewForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="review-name">Ваше имя</label>
                            <input type="text" id="review-name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Оценка</label>
                            <div class="rating-input">
                                <div class="rating-stars">
                                    <span class="rating-star" data-value="1"><i class="far fa-star"></i></span>
                                    <span class="rating-star" data-value="2"><i class="far fa-star"></i></span>
                                    <span class="rating-star" data-value="3"><i class="far fa-star"></i></span>
                                    <span class="rating-star" data-value="4"><i class="far fa-star"></i></span>
                                    <span class="rating-star" data-value="5"><i class="far fa-star"></i></span>
                                </div>
                                <span id="rating-value">0/5</span>
                                <input type="hidden" id="rating" name="rating" value="0">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="review-text">Ваш отзыв</label>
                        <textarea id="review-text" class="form-control" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn" style="width: 100%;">Отправить отзыв</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Подвал -->
    <footer id="contacts">
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Компания</h3>
                    <ul class="footer-links">
                        <li><a href="#advantages">О нас</a></li>
                        <li><a href="#services">Услуги</a></li>
                        <li><a href="#results">Результаты</a></li>
                        <li><a href="#reviews">Отзывы</a></li>
                        <li><a href="#contacts">Контакты</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Контакты</h3>
                    <div class="footer-contact">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>г. Вологда, ул. Ленина, 45</span>
                    </div>
                    <div class="footer-contact">
                        <i class="fas fa-phone"></i>
                        <span>+7 (8172) 12-34-56</span>
                    </div>
                    <div class="footer-contact">
                        <i class="fas fa-envelope"></i>
                        <span>info@novymir.ru</span>
                    </div>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-vk"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-telegram"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Режим работы</h3>
                    <div class="footer-contact">
                        <i class="fas fa-clock"></i>
                        <span>Пн-Пт: 9:00 - 19:00</span>
                    </div>
                    <div class="footer-contact">
                        <i class="fas fa-clock"></i>
                        <span>Сб-Вс: 10:00 - 17:00</span>
                    </div>
                    <div class="footer-contact">
                        <i class="fas fa-truck"></i>
                        <span>Бесплатный замер</span>
                    </div>
                    <div class="footer-contact">
                        <i class="fas fa-shield-alt"></i>
                        <span>Гарантия на все работы</span>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 "Новый Мир" - установка окон и балконов. Все права защищены.</p>
            </div>
        </div>
    </footer>

    <!-- Кнопка связи -->
    <div class="contact-fixed">
        <a href="tel:+78172345678" class="contact-btn">
            <i class="fas fa-phone"></i>
        </a>
    </div>
</body>
</html>