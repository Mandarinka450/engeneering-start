<!DOCTYPE html>
<html>

    <head>
        <title>Инженерный проект</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="materialize\css\materialize.min.css">
        <link rel="stylesheet" href="style\style4.css">
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
            <a href="index3.php">Наши инструкторы</a> / <a href="index4.php">Расписание</a>
            <div class="container__timetable">
                <?php
                   $mysqli = new mysqli('std-mysql', 'std_942', 'Ns120765003', 'std_942') or die(mysqli_error($mysqli));
                   if (isset($_GET['id_timetable'])){
                       $id=$_GET['id_timetable'];
                       $result = $mysqli->query("SELECT timetable.zal, timetable.monday, timetable.tuesday, timetable.wensday, timetable.thursday, timetable.friday, 
                       timetable.saturday, timetable.sunday, timetable.id_contact, contact.mail, contact.phone, contact.vk FROM timetable, contact
                        WHERE timetable.id_contact=contact.id_contact and id_timetable=$id") or die($mysqli->error);
                   }
                
                
                ?>
                <?php
                   while ($row = $result->fetch_assoc()):

                ?>
                <table class="container__content">
                    <tr class="container__stroka">
                        <th>Зал</th>
                        <th>Понедельник</th>
                        <th>Вторник</th>
                        <th>Среда</th>
                        <th>Четверг</th>
                        <th>Пятница</th>
                        <th>Суббота</th>
                        <th>Воскресенье</th>
                    </tr>
                     <tr>
                        <th><?php echo $row['zal'];?></th>
                        <th><?php echo $row['monday'];?></th>
                        <th><?php echo $row['tuesday'];?></th>
                        <th><?php echo $row['wensday'];?></th>
                        <th><?php echo $row['thursday'];?></th>
                        <th><?php echo $row['friday'];?></th>
                        <th><?php echo $row['saturday'];?></th>
                        <th><?php echo $row['sunday'];?></th>
                     </tr>
                </table>
                <h4>Как связаться с нашим инструктором?</h4>
                <hr>
                <p class="container__info">Если у вас еще остались вопросы , вы можете связаться с нашим инструктором )</p>
                <div class="contact">
                    <h5 class="contact__email">Отправьте письмо на почту : <?php echo $row ['mail']?></h5>
                    <h5>или</h5>
                    <h5 class="contact__email">Свяжитесь с ним по телефону: <?php echo $row ['phone']?></h5>
                    <h5>или</h5>
                    <h5 class="contact__email">Напишите ему вк :<?php echo $row ['vk']?></h5>
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