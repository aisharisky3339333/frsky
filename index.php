<?php
session_start();

// Username dan password yang benar
$correct_username = "riskyaishaa";
$correct_password = "31102024"; // Format: 31 Oktober 2024

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == $correct_username && $password == $correct_password) {
        $_SESSION['loggedin'] = true;
        header("Location: index.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Anniversary</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #ffe6e6;
            color: #ff3366;
            margin-top: 50px;
        }
        form {
            background-color: white;
            padding: 30px;
            width: 300px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
            margin: auto;
            margin-top: 100px;
        }
        input[type="text"], input[type="password"] {
            padding: 12px;
            margin: 15px 0;
            width: 100%;
            border: 2px solid #ccc;
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #ff3366;
            color: white;
            padding: 12px 20px;
            width: 100%;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
        }
        input[type="submit"]:hover {
            background-color: #ff6699;
        }
        .error {
            color: red;
            margin-top: 10px;
        }
        h1 {
            color: #ff3366;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Login Dulu, Sayang</h1>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Login">
        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>
    </form>
</body>
</html>
