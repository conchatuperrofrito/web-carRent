<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!--=============== FAVICON ===============-->
  <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />

  <!--=============== REMIX ICONS ===============-->
  <!-- CDN de remix  -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />

  <!--=============== SWIPER CSS ===============-->
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="assets/css/styles.css" />

  <title>Responsive car website - Bedimcode</title>

</head>

<body>
  <!--==================== HEADER ====================-->
  <header class="header" id="header">
    <nav class="nav container">
      <a href="#" class="nav__logo">
        <i class="ri-steering-line"></i>
        Elecar1
      </a>
      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="#" class="nav__link active-link " target="_blank">home</a>
            
          </li>
          
          <li class="nav__item">
            <a href="#about" class="nav__link"> Aboud</a>
          </li>
          <li class="nav__item">
            <a href="#popular" class="nav__link">Popular </a>
          </li>
          <li class="nav__item">
            <a href="#featured" class="nav__link"> Featured</a>
          </li>
          <!-- <li class="nav__item">
            <a href="#register" class="nav__link log"> INGRESAR</a>
          </li> -->
        </ul>
        <div class="nav__close" id="nav-close">
          <i class="ri-close-line"></i>
        </div>
      </div>
      <!-- Toggle buton -->
      <div class="nav__toggle" id="nav-toggle">
        <i class="ri-menu-line"></i>
      </div>
    </nav>
  </header>

  <!--==================== MAIN ====================-->
  <main class="main">
    <!--==================== HOME ====================-->
    <section class="home section" id="home">
      <div class="shape shape__big"></div>
      <div class="shape shape__small"></div>
      <div class="home__container container grid">
        <div class="home__data">
          <h1 class="home__title">Choose The Best Car</h1>
          <h2 class="home__subtile">Porsche Mission E</h2>
          <h3 class="home__elec">
            <i class="ri-flashlight-fill"></i>Electric car
          </h3>
        </div>
        <img src="assets/img/home.png" alt="" class="home__img" />
        <div class="home__car">
          <div class="home__car-data">
            <div class="home__car-icon">
              <i class="ri-temp-cold-line"></i>
            </div>
            <h2 class="home__car-number">24º</h2>
            <h3 class="home__car-name">TEMPERATURE</h3>
          </div>
          <div class="home__car-data">
            <div class="home__car-icon">
              <i class="ri-dashboard-3-line"></i>
            </div>
            <h2 class="home__car-number">452</h2>
            <h3 class="home__car-name">MILEAGE</h3>
          </div>
          <div class="home__car-data">
            <div class="home__car-icon">
              <i class="ri-flashlight-fill"></i>
            </div>
            <h2 class="home__car-number">94%</h2>
            <h3 class="home__car-name">BATTERY</h3>
          </div>
        </div>
        <a href="form.html" target="_blank" class="home__button" >START</a>
      </div>
    </section>

    <!--==================== ABOUT ====================-->
    <section class="about section" id="about">
      <div class="about__container container grid">
        <div class="about__group">
          <img src="assets/img/about.png" alt="" class="about__img" />
          <div class="about__card">
            <h3 class="about__card-title">2.500+</h3>
            <p class="about__card-description">
              Supercharges placed along popular routes
            </p>
          </div>
        </div>
        <div class="about__data">
          <h2 class="section__title about__title">
            Machine With <br />Future Teschnology
          </h2>
          <p class="about__description">
            See the future with high-performance electric carsasdasdsad
            asdasdasdasdasdasddddd asd asd a sd asd ads a. See the future with
            high-performance electric carsasdasdsad asdasdasdasdasdasddddd asd
            asd a sd asd ads.
          </p>
          <a href="#" class="button">Know more</a>
        </div>
      </div>
    </section>
    
    <!--====================  POPULAR  ====================-->

    <section class="popular section" id="popular">
      <h2 class="section__title">
        Choose your Car <br />
        of the Porsche Brand
      </h2>
      <div class="popular__container container swiper">
        <div class="swiper-wrapper">
          <article class="popular__card swiper-slide">
            <div class="shape shape__smaller"></div>
            <h1 class="popular__title">Porsche</h1>
            <h3 class="popular__subtitle">Turbo s</h3>
            <img src="assets/img/popular1.png" alt="" class="popular__img" />
            <div class="popular__data">
              <div class="popular__data-group">
                <i class="ri-dashboard-3-line"></i>3.7 Sec
              </div>
              <div class="popular__data-group">
                <i class="ri-funds-box-line"></i>356 Km/h
              </div>
              <div class="popular__data-group">
                <i class="ri-charging-pile-2-line"></i>Electric
              </div>
            </div>
            <h3 class="popular__price">$654,215</h3>
            <button class="button popular__button">
             <a href="form.html" target="_blank">
              <i class="ri-shopping-bag-2-line" >
              </i>
            </a> 
              </i>
            </button>
          </article>
          <article class="popular__card swiper-slide">
            <div class="shape shape__smaller"></div>
            <h1 class="popular__title">Porsche</h1>
            <h3 class="popular__subtitle">Turbo s</h3>
            <img src="assets/img/popular2.png" alt="" class="popular__img" />
            <div class="popular__data">
              <div class="popular__data-group">
                <i class="ri-dashboard-3-line"></i>3.7 Sec
              </div>
              <div class="popular__data-group">
                <i class="ri-funds-box-line"></i>356 Km/h
              </div>
              <div class="popular__data-group">
                <i class="ri-charging-pile-2-line"></i>Electric
              </div>
            </div>
            <h3 class="popular__price">$654,215</h3>
            <button class="button popular__button">
             <a href="form.html" target="_blank">
              <i class="ri-shopping-bag-2-line" >
              </i>
            </a> 

            </button>
          </article>
          <article class="popular__card swiper-slide">
            <div class="shape shape__smaller"></div>
            <h1 class="popular__title">Porsche</h1>
            <h3 class="popular__subtitle">Turbo s</h3>
            <img src="assets/img/popular3.png" alt="" class="popular__img" />
            <div class="popular__data">
              <div class="popular__data-group">
                <i class="ri-dashboard-3-line"></i>3.7 Sec
              </div>
              <div class="popular__data-group">
                <i class="ri-funds-box-line"></i>356 Km/h
              </div>
              <div class="popular__data-group">
                <i class="ri-charging-pile-2-line"></i>Electric
              </div>
            </div>
            <h3 class="popular__price">$654,215</h3>
            <button class="button popular__button">
             <a href="form.html" target="_blank">
              <i class="ri-shopping-bag-2-line" >
              </i>
            </a> 
            
            </button>
          </article>
          <article class="popular__card swiper-slide">
            <div class="shape shape__smaller"></div>
            <h1 class="popular__title">Porsche</h1>
            <h3 class="popular__subtitle">Turbo s</h3>
            <img src="assets/img/popular4.png" alt="" class="popular__img" />
            <div class="popular__data">
              <div class="popular__data-group">
                <i class="ri-dashboard-3-line"></i>3.7 Sec
              </div>
              <div class="popular__data-group">
                <i class="ri-funds-box-line"></i>356 Km/h
              </div>
              <div class="popular__data-group">
                <i class="ri-charging-pile-2-line"></i>Electric
              </div>
            </div>
            <h3 class="popular__price">$654,215</h3>
            <button class="button popular__button">
              <a href="form.html" target="_blank">
              <i class="ri-shopping-bag-2-line" >
              </i>
            </a> 
     
            </button>
          </article>
          <article class="popular__card swiper-slide">
            <div class="shape shape__smaller"></div>
            <h1 class="popular__title">Porsche</h1>
            <h3 class="popular__subtitle">Turbo s</h3>
            <img src="assets/img/popular5.png" alt="" class="popular__img" />
            <div class="popular__data">
              <div class="popular__data-group">
                <i class="ri-dashboard-3-line"></i>3.7 Sec
              </div>
              <div class="popular__data-group">
                <i class="ri-funds-box-line"></i>356 Km/h
              </div>
              <div class="popular__data-group">
                <i class="ri-charging-pile-2-line"></i>Electric
              </div>
            </div>
            <h3 class="popular__price">$654,215</h3>
            <button class="button popular__button">
                    <a href="form.html" target="_blank">
              <i class="ri-shopping-bag-2-line" >
              </i>
            </a> 
            </button>
          </article>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <!--==================== FEATURES ====================-->
    <section class="features section">
      <h2 class="section__title">More Feature</h2>
      <div class="features__container container grid">
        <div class="features__group">
          <img src="assets/img/features.png" alt="" class="features__img" />
          <div class="features__card features__card-1">
            <h3 class="features__card-title">800v</h3>
            <p class="features__card-description">
              Turbo <br>
              Charginp
            <p></p>
            </p>
          </div>
          <div class="features__card features__card-2">
            <h3 class="features__card-title"></h3>
            <p class="features__card-description">Km <br> Range</p>
          </div>
          <div class="features__card features__card-3">
            <h3 class="features__card-title">480</h3>
            <p class="features__card-description">Km <br> Travel</p>
          </div>
        </div>
      </div>
      <img src="assets/img/map.svg" alt="" class="features__map">
    </section>

    <!--==================== FEATURED ====================-->
    <section class="featured section" id="featured">
      <h2 class="section__title">
        Feature Luxury Cars

      </h2>
      <div class="featured__container container tabs_wrap">
        <ul class="featured__filters">
          <li>
            <button class="featured__item" data-tabs="all">
              <span>all</span>

            </button>
          </li>
          <li>
            <button class="featured__item" data-tabs="tesla">
              <img src="assets/img/logo3.png" alt="">
            </button>
          </li>
          <li>
            <button class="featured__item" data-tabs="audii">
              <img src="assets/img/logo2.png" alt="">
            </button>
          </li>
          <li>
            <button class="featured__item" data-tabs="porsche">
              <img src="assets/img/logo1.png" alt="">
            </button>
          </li>
        </ul>
        <div class="featured__content grid">
          <!-- /*articulos carros*/ -->
          <article class="featured__card tesla">
            <div class="shape shape__smaller"></div>
            <h1 class="featured__title">Tesla</h1>
            <h3 class="featured__subtitle">Model x</h3>
            <img src="assets/img/featured1.png" alt="" class="featured__img">
            <h3 class="featured__price">$45.542</h3>
            <button class="button featured__button">
         
                    <a href="form.html" target="_blank">
              <i class="ri-shopping-bag-2-line"></i>
            </a> 
            </button>
          </article>
          <article class="featured__card tesla">
            <div class="shape shape__smaller"></div>
            <h1 class="featured__title">Tesla</h1>
            <h3 class="featured__subtitle">Model 3</h3>
            <img src="assets/img/featured2.png" alt="" class="featured__img">
            <h3 class="featured__price">$45.258</h3>
            <button class="button featured__button">
             
                    <a href="form.html" target="_blank">
              <i class="ri-shopping-bag-2-line"></i>
            </a> 
            </button>
          </article>
          <article class="featured__card audii">
            <div class="shape shape__smaller"></div>
            <h1 class="featured__title">Tesla</h1>
            <h3 class="featured__subtitle">Model 4</h3>
            <img src="assets/img/featured3.png" alt="" class="featured__img">
            <h3 class="featured__price">$453.258</h3>
            <button class="button featured__button">
              
                    <a href="form.html" target="_blank">
              <i class="ri-shopping-bag-2-line"></i>
            </a> 
            </button>
          </article>
          <article class="featured__card audii">
            <div class="shape shape__smaller"></div>
            <h1 class="featured__title">Tesla</h1>
            <h3 class="featured__subtitle">Model 6</h3>
            <img src="assets/img/featured4.png" alt="" class="featured__img">
            <h3 class="featured__price">$415.258</h3>
            <button class="button featured__button">
              
                    <a href="form.html" target="_blank">
              <i class="ri-shopping-bag-2-line"></i>
            </a> 
            </button>
          </article>
          <article class="featured__card porsche">
            <div class="shape shape__smaller"></div>
            <h1 class="featured__title">Tesla</h1>
            <h3 class="featured__subtitle">Model 5</h3>
            <img src="assets/img/featured5.png" alt="" class="featured__img">
            <h3 class="featured__price">$10.258</h3>
            <button class="button featured__button">
              
                    <a href="form.html" target="_blank">
              <i class="ri-shopping-bag-2-line"></i>
            </a> 
            </button>
          </article>
        </div>
      </div>
    </section>

    <!--==================== OFFER ====================-->
    <section class="offer section">
      <div class="offer__container container grid"></div>
      <img src="assets/img/offer-bg.png" alt="" class="offer__bg">
      <div class="offer__data">
        <h2 class="section__title offer__title">
          Do you Want TO Receive <br> Special Offers
        </h2>
        <p class="offer__description">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit tenetur, nesciunt consectetur provident libero a sapiente sed molestias ipsam magnam veritatis dignissimos 
        </p>
     
      
        <a href="#"  class="button">
          STIfler Maister
        </a>
        <img src="assets/img/offer.png" alt="" class="offer__img">
      </div>

    </section>


    <!--==================== LOGOS ====================-->
    <section class="logos section">
      <div class="logos__container container grid">
        <div class="logos__content">
          <img src="assets/img/logo1.png" alt="" class="logos__img"  >
        </div>
        <div class="logos__content">
          <img src="assets/img/logo2.png" alt="" class="logos__img"  >
        </div>
        <div class="logos__content">
          <img src="assets/img/logo3.png" alt="" class="logos__img"  >
        </div>
        <div class="logos__content">
          <img src="assets/img/logo4.png" alt="" class="logos__img"  >
        </div>
        <div class="logos__content">
          <img src="assets/img/logo5.png" alt="" class="logos__img"  >
        </div>
        <div class="logos__content">
          <img src="assets/img/logo6.png" alt="" class="logos__img"  >
        </div>
      </div>
    </section>
  </main>

  <!--==================== FOOTER ====================-->
  <footer class="footer section"></footer>

  <!--========== SCROLL UP ==========-->
  <a href="" class="scrollup" id="scroll-up">
    <i class="ri-arrow-up-line"></i>
  </a>

  <!--=============== SCROLL REVEAL ===============-->
  <script src=""></script>

  <!--=============== SWIPER JS ===============-->
  <script src="assets/js/swiper-bundle.min.js"></script>
  <!--=============== MIXITUP JS ===============-->
  <script src="assets/js/mixitup.min.js"></script>

  <!--=============== MIXITUP JS ===============-->
  <script src="assets/js/mixitup.min.js"></script>

  <!--=============== MAIN JS ===============-->
  <script src="assets/js/main.js"></script>
</body>

</html>