<?php 
    function getFriendsList($type, $page)
    {
    // осуществляем подключение к базе данных
    $mysqli = mysqli_connect('std-mysql', 'std_942', 'Ns120765003', 'std_942');
    if( mysqli_connect_errno() ) // проверяем корректность подключения
    return 'Ошибка подключения к БД: '.mysqli_connect_error();
    // формируем и выполняем SQL-запрос для определения числа записей
    $sql_res=mysqli_query($mysqli, 'SELECT COUNT(*) FROM std_942.advantages');
    // проверяем корректность выполнения запроса и определяем его результат
    if( !mysqli_errno($mysqli) && $row=mysqli_fetch_row($sql_res) )
    {
    if( !$TOTAL=$row[0] ) // если в таблице нет записей
    return 'В таблице нет данных'; // возвращаем сообщение
    $PAGES = ceil($TOTAL/5);// вычисляем общее количество страниц
    if( $page>=$PAGES ) // если указана страница больше максимальной
    $page=$TOTAL-1; // будем выводить последнюю страницу
    $diapazon=$page*5;
    if ($_GET['sort'] == 'byid')// формируем и выполняем SQL-запрос для выборки записей из БД
    $sql='SELECT * FROM std_942.advantages LIMIT '.$diapazon.', 5';
    if ($_GET['sort'] == 'fam')
    $sql='SELECT * FROM std_942.advantages ORDER BY price LIMIT '.$diapazon.', 5';
    if ($_GET['sort'] == 'birth')
    $sql='SELECT * FROM std_942.advantages ORDER BY price LIMIT '.$diapazon.', 5';
    $sql_res=mysqli_query($mysqli, $sql);
    $ret='<div class="container__advantages"><div class="advantages">'; // строка с будущим контентом страницы
    while( $row=mysqli_fetch_assoc($sql_res) ) // пока есть записи
    {
    // выводим каждую запись как строку таблицы
    $ret.='<div class="advantages__block"><h3>'.$row['title'].'</h3>
    <div class="advantages__image"><img src="'.$row['image'].'"></div>
    <p>'.$row['description'].'</p></div>';
    }
    $ret.='</div></div>'; // заканчиваем формирование таблицы с контентом
    if( $PAGES>1 ) // если страниц больше одной – добавляем пагинацию
    {
    $ret.='<div id="pages">Выберите страницу: '; // блок пагинации
    for($i=0; $i<$PAGES; $i++) // цикл для всех страниц пагинации
    if( $i != $page ) // если не текущая страница
    $ret.='<a href="?p=viewer&pg='.$i.'&sort='.$_GET['sort'].'"> '.($i+1).'</a>';
    else // если текущая страница
    $ret.='<span> '.($i+1).'</span>';
    $ret.='</div>';
    }
    return $ret; // возвращаем сформированный контент
    }
    // если запрос выполнен некорректно
    return 'Неизвестная ошибка'; // возвращаем сообщение
    }



?>