<!DOCTYPE html>
<html>

    <head>
        <title>Инженерный проект</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="materialize\css\materialize.min.css">
        <link rel="stylesheet" href="style\style2.css">
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
                    <li><a href="index3.php">Наши инструкторы</a></li>
                    <li><a href="index5.php">О нас</a></li>
                    <li><a href="" class="selected">Отзывы</a></li>
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
            <h1 class="header">Наши Oтзывы</h1>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="reviews">
               <div class="reviews__card">
                   <div class="review">
                        <div class="review__content">
                            <h4 class="review__name">Darymin</h4>
                            <img class="review__image" src="image\gomer.png" alt="">
                            <p class="review__mail"><b>efma@gmail.com</b></p>

                        </div>
                        <div class="review__content1">
                            <h3 class="review__title">Обожаю этот центр!</h3>
                            <p class="review__message">Здесь очень приятная атмосфера)</p>
                            <span><i>Опубликовано</i> : <?php echo date('d M Y h:i:s'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="reviews__card">
                   <div class="review">
                        <div class="review__content">
                            <h4 class="review__name">Lisa_mur_mur</h4>
                            <img class="review__image" src="image\monro.jpg" alt="">
                            <p class="review__mail"><b>mur-mur@mail.ru</b></p>

                        </div>
                        <div class="review__content1">
                            <h3 class="review__title">Очень эффективные занятия</h3>
                            <p class="review__message">Уже через несколько занятий вы увидите результат! Вы преображаетесь не только внешне, но и внутренне.
                                Ведь главное - внутренний покой...
                            </p>
                            <span><i>Опубликовано</i> : <?php echo date('d M Y h:i:s'); ?></span>
                        </div>
                    </div>
                </div>
            <?php
                require_once 'reviews.php';
            ?>

            <?php
                $mysqli = new mysqli('std-mysql', 'std_942', 'Ns120765003', 'std_942') or die(mysqli_error($mysqli));
                $result = $mysqli->query("SELECT * FROM reviews") or die($mysqli->error);
            ?>
                    <?php
                        while ($row = $result->fetch_assoc()):

                    ?>
                <div class="reviews__card">
                    <div class="review">
                        <div class="review__content">
                            <h4 class="review__name"><?php echo $row['name']; ?></h4>
                            <img class="review__image" src="image\user.png" alt="">
                            <p class="review__mail"><b><?php echo $row['email']; ?></b></p>

                        </div>
                        <div class="review__content1">
                            <h3 class="review__title"><?php echo $row['title']; ?></h3>
                            <p class="review__message"><?php echo $row['message']; ?></p>
                            <span><i>Опубликовано</i> : <?php echo date('d M Y h:i:s'); ?></span>
                            <div class="review__links">
                                <a class="review__link1" href="index2.php?edit=<?php echo $row['id']; ?>">Редактировать</a>
                                <a class="review__link2" href="index2.php?delete=<?php echo $row['id']; ?>">Удалить</a>
                            </div>
                        </div>
                    </div>
                </div>
                        <?php endwhile; ?>
            <?php 
                function pre_r( $array ) {
                    echo '<pre>';
                    print_r( $array );
                    echo '</pre>';
                }
            ?>
                <h2 class="reviews__title">Добавьте отзыв</h2>
                <hr>
                <div class="reviews__review">
                    <form class="form" action="reviews.php" method="POST">
                       <input  name="id" value="<?php echo $id; ?>" type="hidden">
                       <input class ="form__enter" name="name" value="<?php echo $name; ?>" type="text"  placeholder="Ваше имя">
                       <input type="email" name="email" value="<?php echo $email; ?>"  placeholder="Ваша электронная почта">
                       <input class ="form__enter" name="title" value="<?php echo $title; ?>" type="text"  placeholder="Тема">
                       <input  name="description" value="<?php echo $desc; ?>" type="text"  placeholder="Сообщение">
                       <?php
                           if ($update == true) :
                       ?>
                          <button class="form__button" name="update" value="update" type="submit">Редактировать!</button>
                      <?php
                        else :
                      ?>
                         <button class="form__button" name="save" value="добавить" type="submit">Добавить!</button>
                      <?php
                        endif;
                      ?>
                   </form>
                </div>
                
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax">
            <img src="http://st.gde-fon.com/wallpapers_original/605856_girl_baby_little_sports_fashion_activewear_sportsw_3552x1998_www.Gde-Fon.com.jpg" alt="">
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