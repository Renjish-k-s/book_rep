<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booky - Register a Book</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: left;
        }
        h2 {
            color: #333;
            text-align: center;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }
        input, select {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .button-container {
            text-align: center;
        }
        button {
            background: #5a67d8;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }
        button:hover {
            background: #4c51bf;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register a Book</h2>

        <form action="" method="POST">
            <label for="book_name">Book Name:</label>
            <input type="text" id="book_name" name="book_name" required>
            
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" required step="0.01">
            
            <label for="genre">Genre:</label>
            <select id="genre" name="genre" required>
                <option value="Fiction">Fiction</option>
                <option value="Non-Fiction">Non-Fiction</option>
                <option value="Mystery">Mystery</option>
                <option value="Sci-Fi">Sci-Fi</option>
                <option value="Fantasy">Fantasy</option>
                <option value="Biography">Biography</option>
                <option value="Self-Help">Self-Help</option>
                <option value="History">History</option>
            </select>
            
            <div class="button-container">
                <button type="submit" name="register">Register Book</button>
            </div>
        </form>

        <?php
        if (isset($_POST['register'])) {
            echo "<script>alert('Book registered successfully!');</script>";
        }
        ?>
    </div>
</body>
</html>
