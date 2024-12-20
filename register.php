<?php
$host = 'localhost';
$dbname = 'userdb';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

$adminExists = false;
$stmt = $pdo->query("SELECT COUNT(*) AS count FROM users WHERE role = 'admin'");
if ($stmt) {
    $adminRow = $stmt->fetch(PDO::FETCH_ASSOC);
    $adminExists = $adminRow['count'] > 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirm_password']);
    $role = ($adminExists || !isset($_POST['role']) || $_POST['role'] !== 'admin') ? 'user' : 'admin';

    if (empty($username) || empty($password) || empty($confirmPassword)) {
        $error = 'All fields are required.';
    } elseif ($password !== $confirmPassword) {
        $error = 'Passwords do not match.';
    } else {

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("INSERT INTO users (username, password, role) VALUES (:username, :password, :role)");
        try {
            $stmt->execute([
                ':username' => $username,
                ':password' => $hashedPassword,
                ':role' => $role,
            ]);
            header('Location: index.php');
            exit;
        } catch (PDOException $e) {
            $error = 'Registration failed: ' . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Coffee Shop</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('coffee2.jpg');
            background-size: cover;
            background-position: center;
        }

        .container {
            background: rgba(255, 255, 255, 0.85);
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            color: #5A3D2D; /* Coffee brown */
            font-family: 'Georgia', serif;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
        }

        input, select {
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            background-color: #f9f9f9;
        }

        input:focus, select:focus {
            border-color: #D26C00; /* Coffee orange */
            outline: none;
            box-shadow: 0 0 5px rgba(210, 108, 0, 0.5);
        }

        button {
            padding: 12px;
            background-color: #D26C00; /* Coffee orange */
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #b15800;
        }

        p {
            text-align: center;
            margin-top: 15px;
            color: #555;
            font-size: 1rem;
        }

        p a {
            color: #6c63ff;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }

        .error {
            color: red;
            margin-bottom: 15px;
            font-size: 14px;
            text-align: center;
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .container {
                padding: 20px 25px;
            }

            h1 {
                font-size: 1.8rem;
            }

            input, button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Register for Our Coffee Shop</h1>
        
        <?php if (!empty($error)): ?>
            <p class="error"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>

        <form method="POST" action="register.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <?php if (!$adminExists): ?>
                <label for="role">Role:</label>
                <select id="role" name="role">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            <?php endif; ?>

            <button type="submit">Register</button>
        </form>

        <p>Already have an account? <a href="index.php">Login here</a>.</p>
    </div>

</body>
</html>
