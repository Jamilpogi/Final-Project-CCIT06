<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle adding a menu item
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_menu_item'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $description = $conn->real_escape_string($_POST['description']);
    $price = floatval($_POST['price']);

    // Handle file upload
    if ($_FILES['image']['name']) {
        $image = 'uploads/' . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    }

    // Insert the menu item into the database
    $conn->query("INSERT INTO menu (name, description, price, image_url) VALUES ('$name', '$description', '$price', '$image')");
    header("Location: admin_panel.php");
    exit;
}

// Handle deleting users
if (isset($_GET['delete_user'])) {
    $id = intval($_GET['delete_user']);
    $conn->query("DELETE FROM users WHERE id = $id");
    header("Location: admin_panel.php");
    exit;
}

// Handle deleting menu items
if (isset($_GET['delete_menu_item'])) {
    $id = intval($_GET['delete_menu_item']);
    $conn->query("DELETE FROM menu WHERE id = $id");
    header("Location: admin_panel.php");
    exit;
}

// Handle editing user details
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit_user'])) {
    $id = intval($_POST['id']);
    $username = $conn->real_escape_string($_POST['username']);
    $role = $conn->real_escape_string($_POST['role']);

    $conn->query("UPDATE users SET username = '$username', role = '$role' WHERE id = $id");
    header("Location: admin_panel.php");
    exit;
}

// Handle editing menu item
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit_menu_item'])) {
    $id = intval($_POST['id']);
    $name = $conn->real_escape_string($_POST['name']);
    $description = $conn->real_escape_string($_POST['description']);
    $price = floatval($_POST['price']);

    // If a new image is uploaded, update the image path
    if ($_FILES['image']['name']) {
        $image = 'uploads/' . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    } else {
        // If no new image is uploaded, keep the existing image URL
        $image = $_POST['image_url']; // Retrieve from the hidden field
    }

    $conn->query("UPDATE menu SET name = '$name', description = '$description', price = '$price', image_url = '$image' WHERE id = $id");
    header("Location: admin_panel.php");
    exit;
}

$result = $conn->query("SELECT * FROM users");
$menu_result = $conn->query("SELECT * FROM menu");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Coffee Shop</title>
    <link rel="stylesheet" href="style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Source+Serif+Pro:wght@400&display=swap" rel="stylesheet">
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body>

    <button class="logout-btn" onclick="window.location.href='logout.php'">Logout</button>

    <h1>Coffee Shop Admin Panel</h1>

    <div class="form-container">
        <h2>Add / Edit Flower Item</h2>
        <form method="POST" action="admin_panel.php" enctype="multipart/form-data">
            <label for="name">Item Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea><br><br>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" required><br><br>

            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*"><br><br>

            <?php
            if (isset($_GET['edit_menu_item'])) {
                $id = intval($_GET['edit_menu_item']);
                $edit_result = $conn->query("SELECT * FROM menu WHERE id = $id");
                $edit_row = $edit_result->fetch_assoc();
            }
            ?>

            <?php if (isset($_GET['edit_menu_item'])): ?>
                <input type="hidden" name="id" value="<?= $edit_row['id'] ?>">
                <button type="submit" name="edit_menu_item">Save Changes</button>
            <?php else: ?>
                <button type="submit" name="add_menu_item">Add Item</button>
            <?php endif; ?>
        </form>
    </div>

    <h2 style="text-align: center; margin-top: 40px;">Users List</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <form method="POST" action="admin_panel.php">
                        <td><?= $row['id'] ?></td>
                        <td><input type="text" name="username" value="<?= htmlspecialchars($row['username']) ?>"></td>
                        <td><input type="text" name="role" value="<?= htmlspecialchars($row['role']) ?>"></td>
                        <td>
                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                            <button type="submit" name="edit_user">Edit</button>
                            <a href="admin_panel.php?delete_user=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </form>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <h2 style="text-align: center; margin-top: 40px;">Flower Items</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($menu = $menu_result->fetch_assoc()): ?>
                <tr>
                    <td><?= $menu['id'] ?></td>
                    <td><?= htmlspecialchars($menu['name']) ?></td>
                    <td><?= htmlspecialchars($menu['description']) ?></td>
                    <td><?= htmlspecialchars($menu['price']) ?></td>
                    <td><img src="<?= $menu['image_url'] ?>" class="img-preview" alt="Menu Item Image"></td>
                    <td>
                        <a href="admin_panel.php?edit_menu_item=<?= $menu['id'] ?>">Edit</a> | 
                        <a href="admin_panel.php?delete_menu_item=<?= $menu['id'] ?>" onclick="return confirm('Are you sure you want to delete this menu item?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</body>
</html>

<?php
$conn->close();
?>