<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booky - Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .container {
            background: white;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.2);
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .register-btn {
            background: #ff5722;
            color: white;
            padding: 15px 30px;
            font-size: 18px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
        }
        .register-btn:hover {
            background: #e64a19;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Booky</h1>
        <p>Your personal book management system</p>
        <button class="register-btn" onclick="window.location.href='book.php'">Register Book</button>
    </div>
</body>
</html>
