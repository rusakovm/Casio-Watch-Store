<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="/style/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
    <header class="header">
    <div class="anchor" id="anchor1">
        <div class="header_top">
            <div class="conteiner">
                <div class="header__top-row">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width = "60px" viewBox="0 0 62.747 11.874" preserveAspectRatio="none" role="img" aria-label="CASIO"><path d="M53.335 8.719c-.523-.131-.654-.392-.719-.915a19 19 0 010-3.856.982.982 0 01.719-.85 26.57 26.57 0 015.1 0 .844.844 0 01.588.784 12.721 12.721 0 010 3.856.916.916 0 01-.588.784c-.394.327-4.512.327-5.1.197zm6.471-8.5a35.424 35.424 0 00-7.909 0 3.594 3.594 0 00-2.876 2.62 24.673 24.673 0 000 6.209 3.43 3.43 0 002.876 2.615 32.5 32.5 0 007.974-.065 3.417 3.417 0 002.68-2.549 24.657 24.657 0 000-6.209A3.6 3.6 0 0059.806.222zM43.4.284h3.595v11.308H43.4zm-5.752 6.994a.9.9 0 01.719.98c0 .392-.065.85-.719.915a20.961 20.961 0 01-4.052 0c-.392-.065-.85-.065-.98-.784v-.2h-3.595a2.1 2.1 0 00.065.523 2.77 2.77 0 002.418 2.876 37.326 37.326 0 008.1 0c1.83-.392 2.288-2.026 2.288-3.464 0-1.634-.588-2.745-2.026-3.2a7.539 7.539 0 00-1.7-.2c-.327 0-4.183-.131-5.033-.261-.523-.065-.654-.392-.654-.85s.065-.784.719-.915a22.214 22.214 0 014.183 0 .689.689 0 01.523.719v.261h3.595c0-.261-.065-.457-.065-.654A2.915 2.915 0 0038.493.148a41.787 41.787 0 00-7.059.065c-1.177.261-2.353.98-2.353 3.4a2.922 2.922 0 002.484 3.268c.458.065 1.765.131 1.961.131.462.072 3.861.203 4.122.269zm-14.183-.065h-3.987l1.7-4.51h.588zm.784 2.353l.784 2.026h3.856L24.052.219h-5.229l-4.771 11.373h3.856l.784-2.092 5.556.065zm-20.523-1.7c.065.654.392.784.719.85a30.693 30.693 0 004.9 0 .974.974 0 00.85-.784c0-.2.065-.523.065-.654h3.726a14.39 14.39 0 01-.065 1.5 3.237 3.237 0 01-2.68 2.876 42.659 42.659 0 01-8.17 0A3.586 3.586 0 01.195 9.039a24.148 24.148 0 010-6.144A3.51 3.51 0 013.005.281a38.535 38.535 0 018.236 0 3.394 3.394 0 012.549 2.745 12.866 12.866 0 01.065 1.373h-3.726c0-.261.065-.98-.588-1.176a40.3 40.3 0 00-4.967-.065.785.785 0 00-.784.719 16.339 16.339 0 00-.064 3.992z" fill="#00309c"></path></svg>
                    </a>
                    <nav class="header__nav">
                        <ul class="nav__list">
                            <li class="nav__item-link"><a href="/gh/main.php" class="nav__item-link  menu__list__link--active">Главная</a>
                            </li>
                            <div class="verticalLine"></div>
                            <li class="nav__item"><a href="/gh/contacts.html" class="nav__item-link" id="link1">Контакты</a>
                            </li>
                            <div class="verticalLine"></div>
                            <li class="nav__item"><a href="/comments.php"  class="nav__item-link">Новости</a>
                            </li>
                            <div class="verticalLine"></div>
                            <li class="nav__item"><a href="/katalog.php" class="nav__item-link">Интернет-магазин</a>
                            </li>
                            <div class="verticalLine"></div>
                            <li class="nav__item"><a href="/gh/uslugi.html" class="nav__item-link">Услуги</a>
                            </li>
                            <div class="verticalLine"></div>
                            <li class="nav__item"><a href="/katalog.php" class="nav__item-link">Корзина</a>
                            </li>
                            <div class="verticalLine"></div>
                            <li class="nav__item"><a href="/katalog.php" class="nav__item-link">Избранное</a>
                            </li>
                            <div class="verticalLine"></div>
                            <li class="nav__item"><a href="" class="nav__item-link">О нас</a></li>
                        </ul>
                    </nav>
                    <input type="text" class="search" id="search" placeholder="Поиск...">
                    
                    <a href="/gh/login.html" class = "login" id="login">
                            <div class="login_block">
                            <?php
                     
                     if (isset($_SESSION['data'])) {
                         echo $_SESSION['data'];
                         }   
                    else 
                        echo "Войти";
                         ?>

</div>
</a>
                    

                </div>
                
            </div>
        </div>
        
            <video class="header__video" autoplay playsinline muted loop preload="auto">
                <source type="video/mp4" src="/gh/video/videoplayback.mp4">
            </video>
      
    </div> 
    </header>
    <main>
        
        
        <div class="anchor" id="anchor2">
            <section class="We__have">
            <div class="conteiner">
                <div class="slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" style="background-image: url(./img/1816.jpg);"></div>
                            <div class="swiper-slide" style="background-image: url(./img/1993_mobil\ \(1\).jpg);"></div>
                            <div class="swiper-slide" style="background-image: url(./img/1816.jpg);"></div>
                            <div class="swiper-slide" style="background-image: url(./img/1993_mobil\ \(1\).jpg);"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
                
            </div>   
            <div class="conteiner__We__have">
                <div class="content__left">
                    <img src="./img/bg-store-locator.avif" width="100%" alt="">
                    <div class="We__have__content">
                        <h2 class="We__have__title _anim-items">
                            Магазины
                        </h2>
                        <a href="#" class="We__have__link _anim-items" >Магазины</a>
                    </div>
                </div>
                <div class="content__right">
                    <img src="./img/bg-customer-service.avif" width="100%" alt="">
                    <div class="We__have__content">
                        <h2 class="We__have__title _anim-items">
                            Сервисное обслуживание
                        </h2>
                        <a href="#" class="We__have__link _anim-items" >Узнать больше</a>
                    </div>
                </div>
            </div>
        </section>
        </div>
        <div class="anchor" id="anchor3">
        <section class="perfect__gift">
            
            <div class="content__with-img">
                <div class="gift-text__content">
                    <h1 class="perfect__gift-title _anim-items">НАЙТИ ИДЕАЛЬНЫЙ ПОДАРОК</h1>
                    <p class="perfect__gift-text _anim-items" >Если вы знаете, для кого и по какому случаю вы покупаете подарок, то с нашей системой по поиску подарков вы найдете идеальный сюрприз всего за несколько кликов.</p>
                    <button class="perfect__gift-button _anim-items">НАЙТИ ПОДАРОК</button>
                </div>
                <img src="./img/52221422004001_12.avif" class = "perfect__gift-img _anim-items _anim-no-hide"   width="50%" alt="">
            </div>
        </section>  
        </div>
        <div class="anchor" id="anchor4">
        <section class="gift__for"> 
            <div class="content__with-img">
               
                    <img src="./img/watches-for-him-seastar-2023.png" class = "gift__for__img _anim-items"  width="50%" alt="">
                
                <div class="gift__for__content">
                    <div class="gift__for__card">
                        <img src="./img/gift_for/4.avif" width = "75%" alt="" class = "gift__for__card-img _anim-items">
                        <h1 class = "gift__for-title _anim-items">Tissot PR 100 Sport Gent Chronograph</h1>
                        <span class = "gift__for-technical _anim-items">Кварцевый</span>
                    </div>
                    <div class="gift__for__card">
                        <img src="./img/gift_for/4.avif" class = "gift__for__card-img _anim-items" width = "75%" alt="">
                        <h1 class = "gift__for-title _anim-items">Tissot Supersport Chrono</h1>
                        <span class = "gift__for-technical _anim-items">Кварцевый</span>
                    </div>
                    <div class="gift__for__card">
                        <img src="./img/gift_for/4.avif" class = "gift__for__card-img _anim-items" width = "75%" alt="">
                        <h1 class = "gift__for-title _anim-items">Tissot Chrono XL Classic</h1>
                        <span class = "gift__for-technical _anim-items">Кварцевый</span>
                    </div>
                    <div class="gift__for__card">
                        <img src="./img/gift_for/4.avif" class = "gift__for__card-img _anim-items" width = "75%" alt="">
                        <h1 class = "gift__for-title _anim-items">Tissot Chrono XL Classic</h1>
                        <span class = "gift__for-technical _anim-items">Кварцевый</span>
                    </div>
                </div>
            </div>
        </section>
        </div>
        <div class="anchor" id="anchor5">
        <section class="s3"> 
            <div class="content__with-img">
            <div class="gift__for__content">
                    <div class="gift__for__card">
                        <img src="./img/gift_for/4.avif" width = "75%" alt="" class = "gift__for__card-img _anim-items">
                        <h1 class = "gift__for-title _anim-items">Tissot PR 100 Sport Gent Chronograph</h1>
                        <span class = "gift__for-technical _anim-items">Кварцевый</span>
                    </div>
                    <div class="gift__for__card">
                        <img src="./img/gift_for/4.avif" width = "75%" alt="" class = "gift__for__card-img _anim-items">
                        <h1 class = "gift__for-title _anim-items">Tissot Supersport Chrono</h1>
                        <span class = "gift__for-technical _anim-items">Кварцевый</span>
                    </div>
                    <div class="gift__for__card">
                        <img src="./img/gift_for/4.avif "  width = "75%" alt="" class = "gift__for__card-img _anim-items ">
                        <h1 class = "gift__for-title _anim-items">Tissot Chrono XL Classic</h1>
                        <span class = "gift__for-technical _anim-items">Кварцевый</span>
                    </div>
                    <div class="gift__for__card">
                        <img src="./img/gift_for/4.avif"  width = "75%" alt="" class = "gift__for__card-img _anim-items">
                        <h1 class = "gift__for-title _anim-items">Tissot Chrono XL Classic</h1>
                        <span class = "gift__for-technical _anim-items">Кварцевый</span>
                    </div>
                </div>
                <img src="./img/watches-for-her-seastar-2023.png" width="50%" alt="" class = "gift__for__img _anim-items">
            </div>
        </section>
        </div>
    </main>
    <div class="anchor" id="anchor6">
    <footer class="footer">
        <div class="top__footer">
            <div class="subscribe__content">
                <h2 class="subscribe-title">
                    Подписка на наши новости
                </h2>
                <div class="subscribe-reg">
                    <input type="text" class="reg__adress" placeholder="Адрес Эл. почты">
                    <input type="button" class="submit__reg" value="Отправить">
                </div>
            </div> 
        </div>
        <div class="conteiner-footer">
            <nav class="footer__menu">
                <ul class="footer__nav-list">
                    <li class="footer__manu-item">
                       <span class="footer__menu-title">Products</span></li>
                    <li class="footer__manu-item">
                        <a href="#" class="footer__menu-link">Used</a></li>
                    <li class="footer__manu-item">
                        <a href="#" class="footer__menu-link">New</a></li>
                    <li class="footer__manu-item">
                        <a href="#" class="footer__menu-link">Sell your car</a></li>  
                </ul>
                <ul class="footer__nav-list">
                    <li class="footer__manu-item">
                        <span class="footer__menu-title">Resources</span></li>
                    <li class="footer__manu-item">
                        <a href="#" class="footer__menu-link">Blog</a></li>
                    <li class="footer__manu-item">
                        <a href="#" class="footer__menu-link">FAQ</a></li>
                    <li class="footer__manu-item">
                        <a href="#" class="footer__menu-link">Contact us</a></li>  
                </ul>
                <ul class="footer__nav-list">
                    <li class="footer__manu-item">
                        <span class="footer__menu-title">Work With TrueCar</span></li>
                    <li class="footer__manu-item">
                        <a href="#" class="footer__menu-link">Dealers</a></li>
                    <li class="footer__manu-item">
                        <a href="#" class="footer__menu-link">Partners</a></li>

                </ul>
                <ul class="footer__nav-list">
                    <li class="footer__manu-item">
                        <span class="footer__menu-title">About</span></li>
                    <li class="footer__manu-item">
                        <a href="#" class="footer__menu-link">About us</a></li>
                    <li class="footer__manu-item">
                        <a href="#" class="footer__menu-link">Team</a></li>
                    <li class="footer__manu-item">
                        <a href="#" class="footer__menu-link">Careers</a></li>  
                </ul>
            </nav>
            <ul class="app__list">
                <li class="app__item">
                    <img src="./img/app-store-5768091a665de29ed90932b12cc1dc34 1.svg" alt="">
                </li>
                <li class="app__item">
                    <img src="./img/google-play-1b282a5faa8753db97e49dd35e98dd25 1.svg" alt="">
                </li>
            </ul>
            <div class="footer__copy">
                <p class="footer__copy-text">For questions about the TrueCar Auto Buying Service please call 1-888-878-3227.
                    Certified Dealers are contractually obligated by TrueCar to meet certain customer service requirements and complete the TrueCar Dealer Certification Program.</p>
                <p class="footer__copy-text">TrueCar does not broker, sell, or lease motor vehicles. Unless otherwise noted, all vehicles shown on this website are offered for sale by licensed motor vehicle dealers. All vehicles are subject to prior sale. By accessing this website, you agree to the TrueCar Terms of Service and Privacy Policy.</p>
            </div>
            <nav class="copy__nav">
                <ul class="copy__nav-list">
                    <li class="copy__nav-item">
                        <a href="" class="copy__nav-link">Terms of Service</a>
                    </li>
                    <li class="copy__nav-item">
                        <a href="" class="copy__nav-link">Privacy Policy</a>
                    </li>
                    <li class="copy__nav-item">
                        <a href="" class="copy__nav-link">Do Not Sell My Personal Information</a>
                    </li>
                </ul>
            </nav>
        </div>
    </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/js.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/animation.js"></script>
    <script src="js/video-playback.js"></script>
    
</body>
</html>