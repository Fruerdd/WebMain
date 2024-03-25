<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Hotel SandClock</title>
</head>
<body>
<div class="navbar">
    <a href="#home">Home</a>
    <a href="#hotels">Hotels</a>
    <a href="#account">Account</a>
    <a href="#help">Help</a>
</div>

<div class="header">
    <div class="welcome-text">WELCOME TO THE EXCEPTIONAL</div>
    <div class="search-box">
        <input type="date" id="check-in" name="check-in" placeholder="Check-in" />
        <input type="date" id="departure" name="departure" placeholder="Departure" />
        <button>Search</button>
    </div>
</div>
<div class="container">
    <h1 class="title">САМЫЙ УЛЬТРАРОСКОШНЫЙ КУРОРТ С РАЗВЛЕЧЕНИЯМИ В МИРЕ</h1>
    <div class="line"></div>
    <p class="subtitle">Добро пожаловать на курорт Atlantis The Royal, который изменит ваше представление о роскоши. А безупречное обслуживание задает новый уровень совершенства. Здесь каждое мгновение отдыха наполнено яркими впечатлениями.</p>
    <button class="button">БРОНИРОВАТЬ</button>
</div>

<div class="slider">
    <!-- Slider images -->
    <div class="slide active">
        <img src="images/slider1.jpeg" alt="Image 1">
        <!-- Add your text over the image if needed -->
        <div class="slider-text">Text 1</div>
    </div>
    <div class="slide">
        <img src="images/slider2.jpeg" alt="Image 2">
        <div class="slider-text">Text 2</div>
    </div>
    <div class="slide">
        <img src="images/slider3.jpeg" alt="Image 3">
        <div class="slider-text">Text 3</div>
    </div>
    <div class="slide">
        <img src="images/slider4.jpg" alt="Image 4">
        <div class="slider-text">Text 4</div>
    </div>
    <!-- More slides as needed -->
    <!-- Slider dots -->
    <div class="dots">
        <script src="js/slider.js"></script>
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <!-- More dots as needed -->
    </div>
</div>
<div class="content-wrapper">
    <div class="column-item">
        <img src="images/slider1.jpeg" alt="View">
        <h2>ОТДЫХ НА ВЫСОТЕ</h2>
        <p>Каждый номер знаменитого курорта — это мир роскоши...</p>
        <button class="learn-more">УЗНАТЬ БОЛЬШЕ</button>
    </div>
    <div class="column-item">
        <img src="images/slider1.jpeg" alt="Food">
        <h2>СИМФОНИЯ ВКУСОВ</h2>
        <p>Главный центр притяжения для гурманов в Дубае...</p>
        <button class="learn-more">УЗНАТЬ БОЛЬШЕ</button>
    </div>
    <div class="column-item">
        <img src="images/slider1.jpeg" alt="Night Life">
        <h2>ЯРКАЯ НОЧНАЯ ЖИЗНЬ</h2>
        <p>Один из главных центров ночной жизни большого города...</p>
        <button class="learn-more">УЗНАТЬ БОЛЬШЕ</button>
    </div>
    <div class="column-item">
        <img src="images/slider1.jpeg" alt="Spa">
        <h2>ПОЛНОЕ ПРЕОБРАЖЕНИЕ</h2>
        <p>Новые холистические спа- и велнес-процедуры...</p>
        <button class="learn-more">УЗНАТЬ БОЛЬШЕ</button>
    </div>
</div>
<div class="advantages-container">
    <div class="advantage-item">
        <img src="images/adv1.png" class="advantage-icon">
        <h3 class="advantage-title">Категория номеров</h3>
        <p class="advantage-description">Описание первого преимущества...</p>
    </div>
    <div class="advantage-item">
        <img src="images/adv2.png" class="advantage-icon">
        <h3 class="advantage-title">Категория номеров</h3>
        <p class="advantage-description">Описание первого преимущества...</p>
    </div>
    <div class="advantage-item">
        <img src="images/adv3.png" class="advantage-icon">
        <h3 class="advantage-title">Категория номеров</h3>
        <p class="advantage-description">Описание первого преимущества...</p>
    </div>
    <div class="advantage-item">
        <img src="images/adv4.png" class="advantage-icon">
        <h3 class="advantage-title">Категория номеров</h3>
        <p class="advantage-description">Описание первого преимущества...</p>
    </div>
    <div class="advantage-item">
        <img src="images/adv5.png" class="advantage-icon">
        <h3 class="advantage-title">Категория номеров</h3>
        <p class="advantage-description">Описание первого преимущества...</p>
    </div>
    <div class="advantage-item">
        <img src="images/adv6.png" class="advantage-icon">
        <h3 class="advantage-title">Категория номеров</h3>
        <p class="advantage-description">Описание первого преимущества...</p>
    </div>
</div>
<footer class="site-footer">
    <div class="footer-content">
        <div class="footer-section">
            <img src="logo-path.png" alt="Logo" class="footer-logo">
            <p>ATLANTIS THE ROYAL DUBAI</p>
        </div>
        <div class="footer-section">
            <h5>ПРЕДЛОЖЕНИЯ И СОБЫТИЯ</h5>
            <ul>
                <li><a href="#">Рамадан на курорте Atlantis</a></li>
                <!-- Другие пункты -->
            </ul>
        </div>
        <!-- Повторите footer-section для других колонок -->
        <div class="footer-section">
            <h5>КЕРЗНЕР</h5>
            <ul>
                <li><a href="#">Курорты One&Only</a></li>
                <!-- Другие пункты -->
            </ul>
        </div>
    </div>
</footer>
</body>
</html>