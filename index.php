<?php 

include "config.php";
$query = mysqli_query($conn, "SELECT * FROM research_papers");
$query = "SELECT * FROM research_papers WHERE is_deleted = 0";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<link>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research Inventory using CRUD Operations</title>
    <link rel="stylesheet" href="style.css"></link>

</head>

<body>

    <header class="header-banner">
       <h1>NBSC Research Inventory</h1>
    </header>

    <div class="main-container">
        <h2>Request List</h2>

    <div class="action-buttons-container">
        <a href="add.php" class="btn-add">Add New Research</a>
        <a href="history.php" class="btn-history">View History</a>
</div>

        <table>
            <tr>
                <th>ID No.</th>
                <th>Name</th>
                <th>Title</th>
                <th>Paper Size</th>
                <th>Copies</th>
                <th>Department</th>
                <th>Actions</th>
            </tr>

            <?php
            $no = 1;
            while($row = mysqli_fetch_assoc($result)) :
            ?>

            <tr>
                <td><?php echo $row['id_no']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['paper_size']; ?></td>
                <td><?php echo $row['copies']; ?></td>
                <td><?php echo $row['department']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id_no']; ?>" class="btn-edit">Edit</a>
                    <a href="action.php?delete_id=<?php echo $row['id_no']; ?>" class="btn-delete">Remove</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>

</body>

</html>