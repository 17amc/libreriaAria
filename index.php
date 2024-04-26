<?php
include("conexion.php");
$sql = "SELECT * FROM books";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librarería Aria</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>Librarería Aria</h1>
    
    <div class="book-list">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='book'>";
                echo "<h2>" . $row["title"] . "</h2>";
                echo "<p>Author: " . $row["author"] . "</p>";
                echo "<p>Price: $" . $row["price"] . "</p>";
                echo "<img src='" . $row["image_url"] . "' alt='" . $row["title"] . "'>";
        
                echo "<form action='addToCart.php' method='post'>";
                echo "<input type='hidden' name='book_id' value='" . $row["id"] . "'>";
                echo "<input type='submit'class='agregar' value='Agregar al carrito'>";
                echo "</form>";
                echo "</div>";
            }
        } else {
            echo "No books available.";
        }
        ?>
    </div>

    <a href="cart.php">Ver Carrito</a>
</body>
</html>
