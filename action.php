<?php

include "config.php";

// Add new record
if (isset($_POST['add'])) {
    
    $id_no = $_POST['id_no'] ?? '';
    $name = $_POST['name'] ?? '';
    $title = $_POST['title'] ?? '';
    $paper_size = $_POST['paper_size'] ?? '';
    $copies = $_POST['copies'] ?? '';
    $department = $_POST['department'] ?? '';

    mysqli_select_db($conn, 'research_db');

    mysqli_query($conn, "INSERT INTO research_papers (id_no, name, title, paper_size, copies, department)
                         VALUES ('$id_no', '$name', '$title', '$paper_size', '$copies', '$department')");
    header("Location: index.php");
    exit;
}

// Update record
if (isset($_POST['update'])) {
   
    $id_no = $_POST['id_no'] ?? '';
    $name = $_POST['name'] ?? '';
    $title = $_POST['title'] ?? '';
    $paper_size = $_POST['paper_size'] ?? '';
    $copies = $_POST['copies'] ?? '';
    $department = $_POST['department'] ?? '';

    mysqli_select_db($conn, 'research_db');

    mysqli_query($conn, "UPDATE research_papers 
                         SET name='$name', title='$title', paper_size='$paper_size', copies='$copies', department='$department' 
                         WHERE id_no='$id_no'");
    header("Location: index.php");
    exit;
}

// Delete record - simplified approach
if (isset($_GET['id_no']) && !empty($_GET['id_no'])) {

    $id_no = $_GET['id_no'];

    mysqli_select_db($conn, 'research_db');

    $result = mysqli_query($conn, "DELETE FROM research_papers WHERE id_no='$id_no'");
    
    if ($result) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}