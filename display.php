<?php
include 'config.php';
// Fetch books
$sql = "SELECT id, book_name, price, genre FROM books";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
            text-align: center;
        }
        h2 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background: #5a67d8;
            color: white;
        }
        tr:nth-child(even) {
            background: #f9f9f9;
        }
        .back-button {
            background: #5a67d8;
            color: white;
            border: none;
            padding: 10px;
            margin-top: 15px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        .back-button:hover {
            background: #4c51bf;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Book List</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Book Name</th>
                <th>Price</th>
                <th>Genre</th>
                <th>Added On</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['book_name']}</td>
                            <td>{$row['price']}</td>
                            <td>{$row['genre']}</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No books registered yet.</td></tr>";
            }
            $con->close();
            ?>
        </table>
        <a href="book.php" class="back-button">Back to Registration</a>
    </div>
</body>
</html>
