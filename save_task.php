<?php

include("db.php");

if (isset($_POST['save_task'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    //echo "Tarea a realizar: ".$title."<br>"."Descripcion de la tarea: ".$description;
    echo $title;
    echo "<br>";
    echo $description;
    echo "<br>";


    $query = "INSERT INTO task(title, description) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query failed");
    } 
    
    $_SESSION['message'] = 'Task save succesfully';
    $_SESSION['message_type'] = 'success';

    header("location: index.php");

}   
?>