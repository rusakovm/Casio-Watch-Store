
<?php
session_start()
?>


<!DOCTYPE html>

<html lang="ru">
    <head>
   
  
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    
    <link rel="stylesheet" href="./style/style.css">
   
    <title>Document</title>
</head>



<body>
    <header class="header">
        <div class="header_top">
            <div class="conteiner">
                <div class="header__top-row">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width = "60px" viewBox="0 0 62.747 11.874" preserveAspectRatio="none" role="img" aria-label="CASIO"><path d="M53.335 8.719c-.523-.131-.654-.392-.719-.915a19 19 0 010-3.856.982.982 0 01.719-.85 26.57 26.57 0 015.1 0 .844.844 0 01.588.784 12.721 12.721 0 010 3.856.916.916 0 01-.588.784c-.394.327-4.512.327-5.1.197zm6.471-8.5a35.424 35.424 0 00-7.909 0 3.594 3.594 0 00-2.876 2.62 24.673 24.673 0 000 6.209 3.43 3.43 0 002.876 2.615 32.5 32.5 0 007.974-.065 3.417 3.417 0 002.68-2.549 24.657 24.657 0 000-6.209A3.6 3.6 0 0059.806.222zM43.4.284h3.595v11.308H43.4zm-5.752 6.994a.9.9 0 01.719.98c0 .392-.065.85-.719.915a20.961 20.961 0 01-4.052 0c-.392-.065-.85-.065-.98-.784v-.2h-3.595a2.1 2.1 0 00.065.523 2.77 2.77 0 002.418 2.876 37.326 37.326 0 008.1 0c1.83-.392 2.288-2.026 2.288-3.464 0-1.634-.588-2.745-2.026-3.2a7.539 7.539 0 00-1.7-.2c-.327 0-4.183-.131-5.033-.261-.523-.065-.654-.392-.654-.85s.065-.784.719-.915a22.214 22.214 0 014.183 0 .689.689 0 01.523.719v.261h3.595c0-.261-.065-.457-.065-.654A2.915 2.915 0 0038.493.148a41.787 41.787 0 00-7.059.065c-1.177.261-2.353.98-2.353 3.4a2.922 2.922 0 002.484 3.268c.458.065 1.765.131 1.961.131.462.072 3.861.203 4.122.269zm-14.183-.065h-3.987l1.7-4.51h.588zm.784 2.353l.784 2.026h3.856L24.052.219h-5.229l-4.771 11.373h3.856l.784-2.092 5.556.065zm-20.523-1.7c.065.654.392.784.719.85a30.693 30.693 0 004.9 0 .974.974 0 00.85-.784c0-.2.065-.523.065-.654h3.726a14.39 14.39 0 01-.065 1.5 3.237 3.237 0 01-2.68 2.876 42.659 42.659 0 01-8.17 0A3.586 3.586 0 01.195 9.039a24.148 24.148 0 010-6.144A3.51 3.51 0 013.005.281a38.535 38.535 0 018.236 0 3.394 3.394 0 012.549 2.745 12.866 12.866 0 01.065 1.373h-3.726c0-.261.065-.98-.588-1.176a40.3 40.3 0 00-4.967-.065.785.785 0 00-.784.719 16.339 16.339 0 00-.064 3.992z" fill="#00309c"></path></svg>
                    </a>
                    <nav class="header__nav">
                        <ul class="nav__list">
                            <li class="nav__item"><a href="./index.html" class="nav__item-link">Главная</a>
                            </li>
                            <div class="verticalLine"></div>
                            <li class="nav__item"><a href="./contacts.html" class="nav__item-link">Контакты</a>
                            </li>
                            <div class="verticalLine"></div>
                            <li class="nav__item"><a href="" class="nav__item-link">Новости</a>
                            </li>
                            <div class="verticalLine"></div>
                            <li class="nav__item"><a href="" class="nav__item-link">Интернет-магазин</a>
                            </li>
                            <div class="verticalLine"></div>
                            <li class="nav__item"><a href="./uslugi.html" class="nav__item-link menu__list__link--active">Услуги</a>
                            </li>
                            <div class="verticalLine"></div>
                            <li class="nav__item"><a href="" class="nav__item-link">О нас</a></li>
                        </ul>
                    </nav>
                    <input type="text" class="search" placeholder="Поиск...">
                </div>
            </div>
        </div>
    
    </header>
    <main>

        <section class="about_clock">

            
            
            <?php

$severName = "DESKTOP-CD4JTVC\MyServ";
$database = "myBD";
$uid="";
$pass = "";
$connection = [
    "Database" => $database,
    "Uid" => $uid,
    "PWD" => $pass
    ];
    
    
    $conn = sqlsrv_connect($severName,$connection);
    
    
    
    
    if (!$conn)
    die(print_r(sqlsrv__errors(),true));


    $page = isset($_GET['page']) ? intval($_GET['page']) : 1;


$stmt = sqlsrv_query($conn,"SELECT * FROM clock where id = $page");



if ($stmt == false){
    echo'Erorr';
    }
    While( $obj = sqlsrv_fetch_object( $stmt )){
        ?>
            <div class="card_about">

            <?php   

            $text = $obj->name;
            $price = $obj->price;
            $count = $obj->countOf;
            $url = $obj->url;
            $url = $id->id;

            echo $page
            ?>
                <img width = "500px" src="<?php echo mb_convert_encoding($url, 'UTF-8', 'windows-1251');?>" alt="">
                <div class="text__about__clock">
                    <h1>
                        <?php echo mb_convert_encoding($text, 'UTF-8', 'windows-1251');?>
                    </h1>
                    <span class="price"><?php echo mb_convert_encoding($price, 'UTF-8', 'windows-1251');?></span>
                    <span class="price">Есть в наличии <?php echo mb_convert_encoding($count, 'UTF-8', 'windows-1251');?> штук</span>
                    <div class="buttons-add__to">
                        <button class= "b-add__to__к">Добавить в корзину</button>



                        <?php
                        




                        ?>




                        <button onclick="onFavorite()" id="favorite" class= "b-add__to__f"  ><svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 6.00019C10.2006 3.90317 7.19377 3.2551 4.93923 5.17534C2.68468 7.09558 2.36727 10.3061 4.13778 12.5772C5.60984 14.4654 10.0648 18.4479 11.5249 19.7369C11.6882 19.8811 11.7699 19.9532 11.8652 19.9815C11.9483 20.0062 12.0393 20.0062 12.1225 19.9815C12.2178 19.9532 12.2994 19.8811 12.4628 19.7369C13.9229 18.4479 18.3778 14.4654 19.8499 12.5772C21.6204 10.3061 21.3417 7.07538 19.0484 5.17534C16.7551 3.2753 13.7994 3.90317 12 6.00019Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg></button>
                    </div>
                    <div class="nav__about__clock">
                        <div class="nav__about__block" id="discription" onclick = "navText(id)">
                            <span>Описание</span>
                        </div>
                        <div class="nav__about__block"  id="specifications" onclick = "navText(id)">
                            <span>Характеристики</span>
                        </div>
                    </div>
                    <div class="nav__text__clock" id="title">
                        <span> gfdgfdgfdgf</span>
                    </div>
<script>
  var name = "<?php echo mb_convert_encoding($text, 'UTF-8', 'windows-1251'); ?>"
</script>
  

                </div>

            </div>
            <?php
        }
sqlsrv_free_stmt($stmt);
sqlsrv_close($conn)
?>
            
                    
          
        </section>
        <section  class="comment__form">
            <form action="data.php.php?page=<?php echo $id?>" method="post">
                <input type="text" name = "Comment">
                <input type="submit" value="Отправить">
            </form>
        </section>
        <section class="comment__view">
            <?php

$severName = "DESKTOP-CD4JTVC\MyServ";
$database = "myBD";
$uid="";
$pass = "";
$connection = [
"Database" => $database,
"Uid" => $uid,
"PWD" => $pass
];

$conn = sqlsrv_connect($severName,$connection);
if (!$conn)
die(print_r(sqlsrv__errors(),true));

$tsql1 = "select * from comment";


$stmt = sqlsrv_query($conn,$tsql1);

if ($stmt == false){
    echo'Erorr';
}
While($obj = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)){
?>
<div class="comment__vrap">
<span>
<?php   
    
    echo $obj['comment'];
    ?>

    </span>
    </div>
    <?php
}
sqlsrv_free_stmt($stmt);
sqlsrv_close($conn)
?>
            
                    
          
        </section>
    </main>
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
    <script src = "./js/katalog.js"></script>
</body>
</html>