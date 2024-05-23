<?php
   $db = mysqli_connect('localhost','root','','Steak');
    if($db == null){
        echo "Вы не подключились";
    }
    var_dump($_POST);
    $name = $_POST["name"];
    $date = $_POST["date"];
    $phone = $_POST["phone"];
    $quantity = $_POST["quantity"];
    $wishes = $_POST["wishes"];
    $table = mysqli_query($db,"SELECT * FROM `clients`");
    $table = mysqli_fetch_all($table);
    if($table == NULL) mysqli_query($db, "ALTER TABLE `clients` AUTO_INCREMENT = 0;");
    if($name != NULL && $phone != NULL && $date != NULL && $quantity != NULL && $wishes != NULL){
        mysqli_query($db,"INSERT INTO `clients`(`name`,`phone`,`date`,`quantity`,`wishes`) VALUES ('$name','$phone','$date','$quantity','$wishes')"); 
    }
    header('location: ../index.php')
?>
