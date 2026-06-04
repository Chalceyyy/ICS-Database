<?php
include 'config.php';

if (isset($_GET['restore_id'])) {
    $id = $_GET['restore_id'];

    $query = "UPDATE research_papers SET is_deleted = 0 WHERE id_no = '$id'";

    if (mysqli_query($conn, $query)) {

    header("Location: index.php");
    exit();
    } else {
        echo "Error restoring record: " . mysqli_error($conn);
    }
}
?>