<?php 

include "config.php";
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM research_papers WHERE id_no=$id");
$user = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit File</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="wrapper">
        <div class="form-wrapper">
            <h1>Edit File</h1>
            <form method="POST" action="action.php?id=<?= $id ?>">
                <input type="hidden" name="id_no" value="<?= $user['id_no'] ?>">
                <input type="text" name="name" placeholder="Name" value="<?= $user['name'] ?>" required>
                <input type="text" name="title" placeholder="Title" value="<?= $user['title'] ?>" required>
                <input type="text" name="paper_size" placeholder="Paper Size" value="<?= $user['paper_size'] ?>" required>
                <input type="number" name="copies" placeholder="Copies" value="<?= $user['copies'] ?>" required>
                <input type="text" name="department" placeholder="Department" value="<?= $user['department'] ?>" required>
                <div class="btn-box">
                    <button type="submit" class="btn" name="update">Update</button>
                    <a href="index.php" class="btn">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>