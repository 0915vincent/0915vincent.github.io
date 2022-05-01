<?php
    $animal = $_POST['animal'];

    $conn = new mysqli('localhost','root','123456','mini_shop');
    if($conn->connect_error){
        die('Connection failed :' .$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into first(animal)
            value(?)");
        $stmt->bind_param("s",$animal);
        $stmt->execute();
        echo "registration successfully!";
        $stmt->close();
        $conn->close();
    }




?>
