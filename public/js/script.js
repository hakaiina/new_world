// Мобильное меню
document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
    document.querySelector('nav ul').classList.toggle('active');
});

// Рейтинг в форме отзыва
function initRating() {
    const stars = document.querySelectorAll('.rating-star');
    const ratingValue = document.getElementById('rating-value');
    const ratingInput = document.getElementById('rating');

    let currentRating = 0;

    stars.forEach(star => {
        star.addEventListener('click', function() {
            const value = parseInt(this.getAttribute('data-value'));
            currentRating = value;
            ratingInput.value = value;
            ratingValue.textContent = `${value}/5`;
            updateStars(value);
        });
        
        star.addEventListener('mouseover', function() {
            const value = parseInt(this.getAttribute('data-value'));
            updateStars(value);
        });
        
        star.addEventListener('mouseout', function() {
            updateStars(currentRating);
        });
    });

    function updateStars(value) {
        stars.forEach(star => {
            const starValue = parseInt(star.getAttribute('data-value'));
            const icon = star.querySelector('i');
            
            if (starValue <= value) {
                icon.classList.remove('far');
                icon.classList.add('fas');
                icon.style.color = '#ffc107';
            } else {
                icon.classList.remove('fas');
                icon.classList.add('far');
                icon.style.color = '#ccc';
            }
        });
    }

    // Инициализация
    updateStars(0);
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
            header.style.background = 'rgba(18, 18, 18, 0.98)';
            header.style.padding = '10px 0';
            header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.3)';
        } else {
            header.style.background = 'rgba(18, 18, 18, 0.95)';
            header.style.padding = '15px 0';
            header.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
        }
    });
}

// Валидация форм перед отправкой
function initFormsValidation() {
    // Валидация формы отзыва
    const reviewForm = document.querySelector('form[action*="review_handler"]');
    if (reviewForm) {
        reviewForm.addEventListener('submit', function(e) {
            const rating = document.getElementById('rating').value;
            const name = document.getElementById('review-name').value;
            const text = document.getElementById('review-text').value;
            
            if (rating === '0' || rating === '') {
                e.preventDefault();
                alert('Пожалуйста, выберите оценку');
                return false;
            }
            
            if (!name.trim()) {
                e.preventDefault();
                alert('Пожалуйста, введите ваше имя');
                return false;
            }
            
            if (!text.trim()) {
                e.preventDefault();
                alert('Пожалуйста, введите текст отзыва');
                return false;
            }
            
            // Если все проверки пройдены, форма отправится на сервер
        });
    }

    // Валидация формы заявки
    const requestForm = document.querySelector('form[action*="request_handler"]');
    if (requestForm) {
        requestForm.addEventListener('submit', function(e) {
            const name = document.querySelector('form[action*="request_handler"] [name="name"]').value;
            const phone = document.querySelector('form[action*="request_handler"] [name="phone"]').value;
            const service = document.querySelector('form[action*="request_handler"] [name="service_id"]').value;
            
            if (!name.trim()) {
                e.preventDefault();
                alert('Пожалуйста, введите ваше имя');
                return false;
            }
            
            if (!phone.trim()) {
                e.preventDefault();
                alert('Пожалуйста, введите номер телефона');
                return false;
            }
            
            if (!service) {
                e.preventDefault();
                alert('Пожалуйста, выберите услугу');
                return false;
            }
        });
    }

    // Валидация формы скидки
    const discountForm = document.querySelector('form[action*="discount_handler"]');
    if (discountForm) {
        discountForm.addEventListener('submit', function(e) {
            const phone = document.querySelector('form[action*="discount_handler"] [name="phone"]').value;
            
            if (!phone.trim()) {
                e.preventDefault();
                alert('Пожалуйста, введите номер телефона');
                return false;
            }
        });
    }
}


// Инициализация всех функций
document.addEventListener('DOMContentLoaded', function() {
    initRating();
    initSmoothScroll();
    initHeaderScroll();
    initFormsValidation();
});
