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
    <style>
        :root{
            --dark-green: #626F47;
            --light-green: #A4B465;
            --cream: #F5ECD5;
            --input-border: #ccc;
        }

        * { box-sizing: border-box; }

        body { 
            font-family: 'Poppins', sans-serif; 
            background: var(--light-green); 
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center; 
        }

        .container { 
            width: 360px;
            max-width: calc(100% - 40px);
            padding: 28px; 
            background: var(--cream); 
            border-radius: 12px; 
            box-shadow: 0 6px 18px rgba(0,0,0,0.25); 
        }

        h2 { 
            text-align: center; 
            color: #333;
            margin: 0 0 6px 0;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 8px;
        }

        label {
            font-size: 0.95rem;
            color: #333;
        }

        input[type="text"],
        input[type="password"],
        button {
            width: 100%;
            padding: 12px 14px;   
            font-size: 1rem;
            border-radius: 8px;
            display: block;
        }

        input[type="text"],
        input[type="password"] {
            border: 1px solid var(--input-border);
            background: #fff;
            outline: none;
            min-height: 46px; 
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            box-shadow: 0 0 0 4px rgba(164,180,101,0.12);
            border-color: #bdb;
        }

        button { 
            background: var(--dark-green);
            color: white; 
            border: none; 
            cursor: pointer; 
            font-weight: 600;
            min-height: 46px; 
        }

        button:hover { 
            background: #4e5838; 
        }

        .error { 
            color: red; 
            text-align: center; 
            margin-top: 6px; 
        }

        @media (max-width: 420px) {
            .container { padding: 20px; }
        }
    </style>
</head>
<body>
    <div class="container">
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
