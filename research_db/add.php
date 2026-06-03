<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Request</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="wrapper">
        <div class="form-wrapper">
            <h1>Add Request</h1>
            <form method="POST" action="action.php">
                <input type="text" name="id_no" placeholder="ID No." required>
                <input type="text" name="name" placeholder="Name" required>
                <input type="text" name="title" placeholder="Title" required>
                <input type="text" name="paper_size" placeholder="Paper Size" required>
                <input type="number" name="copies" placeholder="Copies" required>
                <input type="text" name="department" placeholder="Department" required>
                <div class="btn-box">
                    <button type="submit" class="btn" name="add">Add</button>
                    <a href="index.php" class="btn">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>