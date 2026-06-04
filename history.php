<?php

include 'config.php';

$query = "SELECT * FROM research_papers WHERE is_deleted = 1";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Deleted History</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header-banner">
       <h1>NBSC Research Inventory</h1>
    </header>

<div class="main-container">
    <h2>Deleted Research History</h2>

    <div class="action-buttons-container">
        <a href="index.php" class="btn-history" style="background-color: #003366;">Back to Main List</a>
</div>

<table>
    <thead>
        <tr>
            <th>ID No.</th>
            <th>Name</th>
            <th>Title</th>
            <th>Paper Size</th>
            <th>Copies</th>
            <th>Department</th>
            <th>Actions</th>
</tr>
</thead>
<tbody>
    <?php
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            ?>
              <tr>
                <td><?php echo $row['id_no']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['paper_size']; ?></td>
                <td><?php echo $row['copies']; ?></td>
                <td><?php echo $row['department']; ?></td>
                <td>
                    <a href="restore_action.php?restore_id=<?php echo $row['id_no']; ?>" class="btn-history" style="background-color: #28a745;">Restore</a>
               </td>
           </tr>
           <?php
               }
            } else {
                echo "<tr><td colspan='7' style='text-align:center; 'No deleted history found.</td></tr>";
            }
            ?>
            </tbody>
      </table>
</div>
</body>
</html>

               