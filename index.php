<!DOCTYPE html>
<html>
    <head>
        <title>Инженерный проект</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="materialize\css\materialize.min.css">
        <link rel="stylesheet" href="style.css">
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
                    <li><a href="#" class="selected">Главная</a></li>
                    <li><a href="#">Направления</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Отзывы</a></li>
                </ul>
                <ul class="side-nav" id="mobile-demo">
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Направления</a></li>
                    <li><a href="#">О нас</a></li>
                    <li><a href="#">Отзывы</a></li>
                </ul>
            </div>
            </div>
        </nav>
    </div>
    </header>
    <main>
    <div class="full-width">
        <div class="carousel carousel-slider">
            <a href="#one!" class="carousel-item"><img src="image\3.jpg" alt=""></a>
            <a href="#two!" class="carousel-item"><img src="image\2.jpg" alt=""></a>
            <a href="#three!" class="carousel-item"><img src="image\1.jpg" alt=""></a>
        </div>
    </div>
    </main>
    <div class="section white">
        <div class="row container">
            <h1 class="header">Центр йоги "Эйфория" ждет вас!</h1>
            <p class="grey-text text-darken-3 lighten-3">
                Вас приветствует Центр йоги  «Эйфория» — единственная в своем роде Студия йоги в г. Москва. Мы сочетаем традиционные и современные методы, которые позволяют нашим посетителям достигать существенного улучшения физического и ментального самочувствия. Здесь вы найдете много полезной информации о центре, наших услугах и команде специалистов. 
    
            </p>
            <p>
                Приходите в студию «Эйфория» и ощутите на себе, какие положительные изменения могут произойти, если впустить в свою жизнь немного осознанности.
            </p>
        </div>
        <hr>
    </div>
    <div class="container">
        <h2>Популярные занятия</h2>
        <p class="container__subtitle">Формирование здоровых привычек</p>
        <div class="container__content">
            <?php
                include 'vie.php';
                // подключаеммодульсбиблиотекойфункций
                // есливпараметрахнеуказанатекущаястраница – выводимсамуюпервую
                if( !isset($_GET['pg']) || $_GET['pg']<0 ) $_GET['pg']=0;
                // есливпараметрахнеуказантипсортировкиилионнедопустим
                if(!isset($_GET['sort']) || ($_GET['sort']!='byid' && $_GET['sort']!='fam' && $_GET['sort']!='birth')) $_GET['sort']='byid';
                // устанавливаемсортировкупоумолчанию// формируемконтентстраницыспомощьюфункцииивыводимего
                echo getFriendsList($_GET['sort'], $_GET['pg']);
            ?>

           <h2>Форма обратной связи</h2>
           <hr>
           <div class="form">
               <div class="form__image_left">
                   <img src="image\yoga.jpg" alt="">
               </div>
               <div class="form__content">
               <legend>Контактная информация</legend>
               <input class ="form__enter" type="text" required placeholder="Ваше имя">
               <input type="text" required placeholder="Ваше фамилия">
               <input type="date" required name="date" id="date" placeholder="Дата рождения">
               <input type="text" required name="phone" id="phone" placeholder="Телефон">
               <input type="email" required placeholder="Ваша электронная почта">
               <button class="form__button" type="submit" name="button" value="Отправить заявку">Отправить заявку</button>
               </div>
           </div>
        </div>
        
    </div> 
       
   
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