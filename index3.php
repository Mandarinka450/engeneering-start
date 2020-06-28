<!DOCTYPE html>
<html>

    <head>
        <title>Инженерный проект</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="materialize\css\materialize.min.css">
        <link rel="stylesheet" href="style\style3.css">
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
                    <li><a href="index3.php" class="selected">Наши инструкторы</a></li>
                    <li><a href="index5.php">О нас</a></li>
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
            <img src="https://e-maxo.com/wp-content/uploads/2019/02/1.jpg" alt="">
        </div>
    </div>   

    <main>
        <div class="section white">
           <div class="row container">
               <h1 class="header">Наши Веселые Инструкторы</h1>
           </div>
        <hr>
        </div>
        <div class="container">
            <div class="container__teachers">
            <?php
                $mysqli = new mysqli('std-mysql', 'std_942', 'Ns120765003', 'std_942') or die(mysqli_error($mysqli));
                $result = $mysqli->query("SELECT * FROM teacher") or die($mysqli->error);
            ?>
            <?php
                while ($row = $result->fetch_assoc()):

            ?>
            <div class="teacher">
                <h3 class="teacher__name"><?php echo $row['name_teacher']?></h3>
                <div class="teacher__image"><img src="image\<?php echo $row['image_teacher'] ?>" alt=""></div>
                <p class="teacher__about"><b>Обо мне : </b><?php echo $row['about']?></p>
                <div class="teacher__how"> <p><b>О занятиях:</b> <br><?php echo $row['how']?></p></div>
                <div class="teacher__link"><a class="waves-effect waves-light btn modal-trigger" href="index4.php?id_timetable=<?php echo $row['id_timetable']?>">расписание</a></div>
            </div>
            <?php endwhile; ?>
            <?php 
                function pre_r( $array ) {
                    echo '<pre>';
                    print_r( $array );
                    echo '</pre>';
                }
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