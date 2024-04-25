<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/linkbuttons.css">
    <link rel="stylesheet" href="css/mainnavig.css">
    <link rel="stylesheet" href="css/cards.css">
    <title>Hotel SandClock</title>
</head>
<body>
<ul class="navbar">
        <li><a class="active" href="#">Home</a></li>
        <li><a href="#">Rooms</a></li>
        <li><a href="#">FAQ</a></li>
        <li style="float:right"><a class="account" href="loginform.php">Account</a></li>
        <li style="float:right"><a><button class="wrapper" id="themeToggle">Theme</button></a></li>
</ul>
<div class="header">
    <button id="reservation" style="display: none;">Reservation</button>
    <div class="video">
        <video class="backgroundVideo" src="images/background.MP4" autoplay muted loop></video>
    </div>
    <div class="form-container">
        <h2>Make your reservation</h2>
        <form action="/submit-reservation" method="post">
            <div class="form-group">
                <label for="check-in">Arrival date</label>
                <input type="date" id="check-in" name="check_in">
            </div>

            <div class="form-group">
                <label for="check-out">Departure date</label>
                <input type="date" id="check-out" name="check_out">
            </div>

            <div class="form-group">
                <label for="guests">Guests</label>
                <select id="guests" name="guests">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

            <div class="form-group">
                <label for="children">Children</label>
                <select id="children" name="children">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="button-group">
                <button class="button-reservation">Check reservation</button>
            </div>
        </form>
    </div>
    <div class="link-buttons">
        <ul>
            <li>
                <a class="facebook" href="https://www.facebook.com/">
                    <img src="images/facebook.png" alt="Facebook">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a class="twitter" href="https://twitter.com/">
                    <img src="images/twit.png" alt="Twitter">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a class="instagram" href="https://www.instagram.com/">
                    <img src="images/insta.png" alt="Instagram">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
            </li>
            <li>
                <a class="linkedin" href="https://www.linkedin.com/">
                    <img src="images/linkedin.png" alt="Linkedin">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="container">
    <h1 class="title">THE MOST ULTRA LUXURY RESORT WITH ENTERTAINMENT IN THE WORLD</h1>
    <div class="line"></div>
    <p class="subtitle">Welcome to the Atlantis The Royal Resort, which will change your idea of luxury. And impeccable service sets a new level of excellence. Here, every moment of rest is filled with vivid impressions.</p>
    <button class="button">BOOK</button>
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
<div class="cards">
    <div class="card">
        <img src="images/card1.jpg" alt="Swimming pool" width="1920" height="2193">
        <div class="card__content | flow">
            <div class="card__content--container | flow">
                <h2 class="card__title">Colombia</h2>
                <p class="card__description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                    labore laudantium deserunt fugiat numquam.
                </p>
            </div>
            <button class="card__button">Read more</button>
        </div>
    </div>
    <div class="card">
        <img src="images/card2.jpg" alt="Restaurant" width="1920" height="2193">
        <div class="card__content | flow">
            <div class="card__content--container | flow">
                <h2 class="card__title">Colombia</h2>
                <p class="card__description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                    labore laudantium deserunt fugiat numquam.
                </p>
            </div>
            <button class="card__button">Read more</button>
        </div>
    </div>
    <div class="card">
        <img src="images/card3.jpg" alt="Night Life" width="1920" height="2193">
        <div class="card__content | flow">
            <div class="card__content--container | flow">
                <h2 class="card__title">Colombia</h2>
                <p class="card__description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                    labore laudantium deserunt fugiat numquam.
                </p>
            </div>
            <button class="card__button">Read more</button>
        </div>
    </div>
    <div class="card">
        <img src="images/card4.jpg" alt="Service" width="1920" height="2193">
        <div class="card__content | flow">
            <div class="card__content--container | flow">
                <h2 class="card__title">Colombia</h2>
                <p class="card__description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum in
                    labore laudantium deserunt fugiat numquam.
                </p>
            </div>
            <button class="card__button">Read more</button>
        </div>
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
            <img src="" alt="Logo" class="footer-logo">
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
<script src="js/theme.js"></script>
</body>
</html>