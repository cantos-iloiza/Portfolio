<?php
session_start();
$error = "";

if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        $error = "⚠️ All fields are required!";
    } elseif ($username === "iloizajhane" && $password === "092704") {
        $_SESSION['username'] = $username;
        header("Location: index.php"); 
        exit();
    } else {
        $error = "❌ Invalid login credentials!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> <!-- Use your portfolio CSS -->
</head>
<body class="login-body">
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" novalidate>
            <label for="username">Username:</label>
            <input id="username" type="text" name="username" required>

            <label for="password">Password:</label>
            <input id="password" type="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <p class="error"><?php echo $error; ?></p>
    </div>
</body>
</html>
