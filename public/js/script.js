// Мобильное меню
document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
    document.querySelector('nav ul').classList.toggle('active');
});

// Рейтинг в форме отзыва
const stars = document.querySelectorAll('.rating-star');
const ratingValue = document.getElementById('rating-value');
const ratingInput = document.getElementById('rating');

function initRating() {
    stars.forEach(star => {
        star.addEventListener('click', function() {
            const value = this.getAttribute('data-value');
            ratingInput.value = value;
            ratingValue.textContent = `${value}/5`;
            
            updateStars(value);
        });
        
        star.addEventListener('mouseover', function() {
            const value = this.getAttribute('data-value');
            updateStars(value);
        });
        
        star.addEventListener('mouseout', function() {
            const currentValue = ratingInput.value;
            updateStars(currentValue);
        });
    });
}

function updateStars(value) {
    stars.forEach(s => {
        if (s.getAttribute('data-value') <= value) {
            s.innerHTML = '<i class="fas fa-star"></i>';
            s.classList.add('active');
        } else {
            s.innerHTML = '<i class="far fa-star"></i>';
            s.classList.remove('active');
        }
    });
}

// Обработка форм
function initForms() {
    document.getElementById('requestForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Спасибо! Ваша заявка отправлена. Мы свяжемся с вами в ближайшее время.');
        this.reset();
    });
    
    document.getElementById('reviewForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Спасибо за ваш отзыв! Он будет опубликован после проверки модератором.');
        this.reset();
        ratingInput.value = 0;
        ratingValue.textContent = '0/5';
        updateStars(0);
    });
    
    document.querySelector('.discount-form').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Спасибо! Скидка 15% зарезервирована за вашим номером телефона. Мы свяжемся с вами для уточнения деталей.');
        this.reset();
    });
}

// Плавная прокрутка
function initSmoothScroll() {
    document.querySelectorAll('nav a, .hero-btns a').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
                
                // Закрытие мобильного меню
                document.querySelector('nav ul').classList.remove('active');
            }
        });
    });
}

// Изменение шапки при скролле
function initHeaderScroll() {
    window.addEventListener('scroll', function() {
        const header = document.querySelector('header');
        if (window.scrollY > 100) {
            header.style.padding = '10px 0';
            header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.3)';
        } else {
            header.style.padding = '15px 0';
            header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
        }
    });
}

// Инициализация всех функций
document.addEventListener('DOMContentLoaded', function() {
    initRating();
    initForms();
    initSmoothScroll();
    initHeaderScroll();
});