<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="cart.css"> 
</head>
<body>
    
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    echo "<h1>Carrito de Compras</h1>";
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bookstore";
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $cart_books = array();
    foreach ($_SESSION['cart'] as $book_id) {
        $sql = "SELECT * FROM books WHERE id = $book_id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $cart_books[] = $result->fetch_assoc();
        }
    }

    $totalPrice = 0;
    foreach ($cart_books as $book) {
    $totalPrice += $book['price'];
    }

    foreach ($cart_books as $book) {
        echo "<div class='book'>";
        echo "<h2>" . $book['title'] . "</h2>";
        echo "<p>Autor: " . $book['author'] . "</p>";
        echo "<p>Precio: $" . $book['price'] . "</p>";
        echo "<img src='" . $book['image_url'] . "' alt='" . $book['title'] . "' style='width: 100px;'>"; // Ajusta el tamaño de la imagen
        
        echo "<form action='removeFromCart.php' method='post'>";
        echo "<input type='hidden' name='book_id' value='" . $book['id'] . "'>";
        echo "<input class='quitar' type='submit' value='Quitar del Carrito'>";
        echo "</form>";
        echo "</div>";
    }

    echo "<button id='buyButton'>Comprar</button>";
    echo "<a href='index.php' class='return-link'>Volver a inicio</a>";

    $conn->close();
} else {
    echo "El carrito está vacío.";
}
?>

<div id="paymentModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Proceso de Pago</h2>
    <p>Total a pagar: $<?php echo $totalPrice; ?></p>
    <p>Por favor, complete el proceso de pago para finalizar su compra.</p>
    <form id="buyForm">
    <label for="paymentMethod">Método de Pago:</label>
        <input type="radio" name="paymentMethod" value="tarjeta" required> Tarjeta
        <br><br>

        <label for="address">Dirección de Envío:</label>
        <input type="text" name="address" required>
        <br><br>

        <div id="cardDetails">
            <label for="cardNumber">Número de Tarjeta:</label>
            <input type="text" name="cardNumber">
            <br><br>

            <label for="cardExpiry">Fecha de Expiración:</label>
            <input type="text" name="cardExpiry">
            <br><br>

            <label for="cardCVC">CVC:</label>
            <input type="text" name="cardCVC">
            <br><br>
        </div>

      <input class="pagar" type="submit" value="Pagar">
    </form>
  </div>
</div>

<script>
document.getElementById('buyButton').addEventListener('click', function() {
    document.getElementById('paymentModal').style.display = 'block';
});

document.querySelector('.close').addEventListener('click', function() {
    document.getElementById('paymentModal').style.display = 'none';
});

window.addEventListener('click', function(event) {
    if (event.target == document.getElementById('paymentModal')) {
        document.getElementById('paymentModal').style.display = 'none';
    }
});

document.getElementById('buyForm').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Compra realizada con éxito');
    document.getElementById('paymentModal').style.display = 'none';
});
</script>


</body>
</html>
