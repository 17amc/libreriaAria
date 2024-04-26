<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_POST['book_id'])) {
    $book_id = $_POST['book_id'];

    if (($key = array_search($book_id, $_SESSION['cart'])) !== false) {
        unset($_SESSION['cart'][$key]);
        header('Location: cart.php');
        exit;
    } else {
        echo "Error: El libro no está en el carrito.";
    }
} else {
    echo "Error: No se proporcionó un ID de libro para eliminar.";
}
?>
