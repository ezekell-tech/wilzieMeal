<?php
require('../dbconnect/dbconn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $id = intval($_POST['id']); 

    $sql = "DELETE FROM reservations WHERE id = $id";
    if (mysqli_query($connectionstatus, $sql)) {
        header("Location: reservations.php"); // go back to the list
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($connectionstatus);
    }
} else {
    echo "Invalid request.";
}
?>
