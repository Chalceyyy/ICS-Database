<?php 

include "config.php";
$query = mysqli_query($conn, "SELECT * FROM research_papers");

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
    <header>
        <h1>NBSC Research Inventory</h1>
    </header>
    <div class="container">
        <h2>Request List</h2>
        <a href="add.php">Add New Research</a>

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
            while ($user = mysqli_fetch_assoc($query)) :
            ?>

            <tr>
                <td><?= $no++ ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['title'] ?></td>
                <td><?= $user['paper_size'] ?></td>
                <td><?= $user['copies'] ?></td>
                <td><?= $user['department'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $user['id_no'] ?>">Edit</a>
                    <a href="action.php?delete=1&id_no=<?= $user['id_no'] ?>" class="btn-delete" onclick="return confirm('Are you sure you want to delete this Study?')">Remove</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>

</body>

</html>