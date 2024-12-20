<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";

// Establish database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all flower items from the `menu` table
$result = $conn->query("SELECT * FROM menu");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Shop | Flowers</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f6f4;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #6c757d;
            font-family: 'Georgia', serif;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .flower-card {
            background: white;
            border: 1px solid #ddd;
            border-radius: 10px;
            overflow: hidden;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .flower-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .flower-card h3 {
            color: #6c757d;
            margin: 10px 0;
            font-size: 1.2em;
        }

        .flower-card p {
            color: #555;
            font-size: 0.9em;
            padding: 0 10px;
            margin-bottom: 10px;
        }

        .flower-card .price {
            color: #28a745;
            font-weight: bold;
            font-size: 1.1em;
            margin: 10px 0;
        }

        .flower-card button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .flower-card button:hover {
            background-color: #0056b3;
        }

        @media (max-width: 768px) {
            .flower-card {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <h1>Our Flower Collection</h1>
    <p style="text-align: center">Back to dashboard: <a href="dashboard.php">Dashboard</a></p>
    <div class="container">
        <?php if ($result && $result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="flower-card">
                    <img src="<?= htmlspecialchars($row['image_url']) ?>" alt="<?= htmlspecialchars($row['name']) ?>">
                    <h3><?= htmlspecialchars($row['name']) ?></h3>
                    <p><?= htmlspecialchars($row['description']) ?></p>
                    <div class="price">$<?= number_format($row['price'], 2) ?></div>
                    <button>Add to Cart</button>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p style="text-align: center; width: 100%; color: #888;">No flowers available at the moment.</p>
        <?php endif; ?>
    </div>

</body>
</html>

<?php
$conn->close();
?>
