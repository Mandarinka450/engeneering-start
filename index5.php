<!DOCTYPE html>
<html>

    <head>
        <title>Инженерный проект</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="materialize\css\materialize.min.css">
        <link rel="stylesheet" href="style\style5.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <header>
        <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">
                <div class="container">
                <a href="#" class="brand-logo">Центр йоги "Эйфория"</a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons"></i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php" >Главная</a></li>
                    <li><a href="index3.php" >Наши инструкторы</a></li>
                    <li><a href="#" class="selected">О нас</a></li>
                    <li><a href="index2.php">Отзывы</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="index.php">Главная</a></li>
                    <li><a href="index3.php">Наши инструкторы</a></li>
                    <li><a href="index5.php">О нас</a></li>
                    <li><a href="index2.php">Отзывы</a></li>
                </ul>
            </div>
            </div>
        </nav>
    </div>
    </header>
    <div class="parallax-container">
        <div class="parallax">
            <img src="image\main.jpg" alt="">
        </div>
    </div>   

    <main>
        <div class="section white">
           <div class="row container">
               <h1 class="header">Наша история</h1>
           </div>
        <hr>
        </div>
        <div class="container">
            <div class="history">
                <div class="history__info">
                    <p>Наш центр йоги ведет свою историю с 2000 года. Работа центра построена на сочетании физического аспекта с духовным и эмоциональным планами. Соединяя упражнения для тела, дыхание, движение и медитацию, мы помогаем ученикам почувствовать взаимозависимость всех этих аспектов и их влияние на здоровье и благополучие. За счет глубокого понимания того, как работает тело и сознание человека, специалисты центра йоги «Эйфория» обучают людей осознанности как в практике, так и в жизни за пределами коврика.
                        Мы обеспечиваем комфортную атмосферу для наших клиентов.Мы любим их и заботимся о них со всей нашей теплотой.
                    </p>
                </div>
                <div class="history__image">
                    <img src="https://img4.goodfon.com/original/5760x4140/8/82/yoga-pose-workout-2.jpg" alt="">
                </div>
            </div>
            <h2 class="container__center_down">Наши преимущества!</h2>
            <hr>
            <div class="container__content">
            <?php
                include 'advantages.php';
                // подключаеммодульсбиблиотекойфункций
                // есливпараметрахнеуказанатекущаястраница – выводимсамуюпервую
                if( !isset($_GET['pg']) || $_GET['pg']<0 ) $_GET['pg']=0;
                // есливпараметрахнеуказантипсортировкиилионнедопустим
                if(!isset($_GET['sort']) || ($_GET['sort']!='byid' && $_GET['sort']!='fam' && $_GET['sort']!='birth')) $_GET['sort']='byid';
                // устанавливаемсортировкупоумолчанию// формируемконтентстраницыспомощьюфункцииивыводимего
                echo getFriendsList($_GET['sort'], $_GET['pg']);
            
            ?>
            </div>

            
            
        </div>
        
   
    </main>
   
        
    
   
   <footer class="page-footer">
    <div class="footer-copyright">
        <div class="container">
            <p>© 2014 Центр йоги "Эйфория"</p>
        </div>
    </div>
  </footer>


    



    <script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script> 

    <script>
        $(document).ready(function () {
            $(".button-collapse").sideNav();
            $('.modal').modal({
                opacity:0.8,
            });
            $('.parallax').parallax();
            $(".carousel.carousel-slider").carousel({
                fullWidth:true,
                indicators:true,
                duration:500,
    
            });
        });
    </script>   
    </body>
</html>