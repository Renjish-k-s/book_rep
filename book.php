<?php 
include 'config.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $book_name = trim($_POST['book_name']);
    $price = trim($_POST['price']);
    $genre = trim($_POST['genre']);
    
    // Validate inputs
    if (!empty($book_name) && !empty($price) && !empty($genre)) {
        // Prepare the SQL statement
        $stmt = $con->prepare("INSERT INTO books (book_name, price, genre) VALUES (?, ?, ?)");

        if ($stmt) {
            $stmt->bind_param("sds", $book_name, $price, $genre);
            
            if ($stmt->execute()) {
                $message = "Book registered successfully!";
                $msgType = "success";
            } else {
                $message = "Error registering book.";
                $msgType = "error";
            }

            $stmt->close();
        } else {
            $message = "Database error.";
            $msgType = "error";
        }
    } else {
        $message = "All fields are required!";
        $msgType = "error";
    }
}
?>

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
        .message {
            padding: 10px;
            text-align: center;
            margin-bottom: 15px;
            border-radius: 5px;
            font-weight: bold;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register a Book</h2>

        <?php if (isset($message)): ?>
            <div class="message <?= $msgType ?>"><?= $message ?></div>
        <?php endif; ?>

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
                <button type="submit">Register Book</button>
                <a href="display.php">
                    <button type="button">View Book List</button>
                </a>
            </div>
        </form>
    </div>
</body>
</html>

<?php $con->close(); ?>
            