<?php
   session_start();
   $mysqli = new mysqli('std-mysql', 'std_942', 'Ns120765003', 'std_942') or die(mysqli_error($mysqli));
   
   $id = 0;
   $name = '';
   $email = '';
   $title = '';
   $desc = '';
   $update = false;

   if (isset($_POST['save'])) {
       $name = $_POST['name'];
       $email = $_POST['email'];
       $title = $_POST['title'];
       $desc = $_POST['description'];
       
       $mysqli->query("INSERT INTO reviews (name, email, title, message) VALUES 
       ('$name', '$email', '$title', '$desc')") or die($mysqli->error); 
       
       header("location: index2.php");
    }
   if (isset($_GET['delete'])) {
       $id = $_GET['delete'];

       $mysqli->query("DELETE FROM reviews WHERE id=$id") or die($mysqli->error());

       
       $_SESSION['message'] = "Отзыв удален!";
       $_SESSION['msg_type'] = "Успешно!"; 
       header("location: index2.php");
   }

   if (isset($_GET['edit'])) {
      $id = $_GET['edit'];
      $update = true;
      $result = $mysqli->query("SELECT * FROM reviews WHERE id=$id") or die($mysqli->error());

      if (count($result==1)) {
          $update = true;
          $row = $result->fetch_array();
          $name = $row['name'];
          $email = $row['email'];
          $title = $row['title'];
          $desc = $row['message'];
      }
   }
   if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $title = $_POST['title'];
    $email = $_POST['email'];
    $desc = $_POST['description'];

    $mysqli->query("UPDATE reviews SET name='$name', email='$email', title='$title', message='$desc' WHERE id=$id") or die($mysqli->error);
    header("location: index2.php");
}

?>