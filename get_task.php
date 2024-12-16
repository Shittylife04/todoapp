<?php
include('db.php');  // Gakuha og koneksyon sa database pinaagi sa pag-include sa 'db.php' file

// Susihon kung ang 'GET' data nga 'date' kay available
if (isset($_GET['date'])) {
    $date = $_GET['date'];  // Gikuha ang 'date' nga gipasa sa URL

    // Paghimo og SQL query aron kuhaon ang tanan nga tasks nga pareho sa 'task_date'
    $sql = "SELECT * FROM tasks WHERE task_date = '$date'";

    // Gihimo ang SQL query gamit ang 'query' function
    $result = $conn->query($sql);

    // Kung ang query nag-return og resulta nga adunay tasks
    if ($result->num_rows > 0) {
        $tasks = [];  // Maghimo og empty array para sa mga tasks
        // I-loop ang mga rows gikan sa query result
        while($row = $result->fetch_assoc()) {
            $tasks[] = $row['task_description'];  // Idugang ang 'task_description' sa array sa mga tasks
        }
        // I-encode ang array sa JSON format ug ipakita ang resulta
        echo json_encode($tasks);
    } else {
        // Kung walay task, i-encode ang empty array ug ipakita ang resulta
        echo json_encode([]);
    }
}
?>
