<?php
include('db.php');  // Gakuha og koneksyon sa database pinaagi sa pag-include sa 'db.php' file

// Susihon kung ang mga 'POST' data nga 'task_description' ug 'task_date' kay available
if (isset($_POST['task_description']) && isset($_POST['task_date'])) {
    $task_description = $_POST['task_description'];  // Gikuha ang 'task_description' gikan sa form input
    $task_date = $_POST['task_date'];  // Gikuha ang 'task_date' gikan sa form input

    // Paghimo og SQL query aron isulod ang bagong task sa database
    $sql = "INSERT INTO tasks (task_description, task_date) VALUES ('$task_description', '$task_date')";

    // Gihimo ang SQL query gamit ang 'query' function, ug kung magmalampuson
    if ($conn->query($sql) === TRUE) {
        echo "New task added successfully";  // Kung successful, ipakita ang mensahe nga "New task added successfully"
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;  // Kung dili magmalampuson, ipakita ang error nga mensahe
    }
}
?>
