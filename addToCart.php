<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(isset($_POST['book_id']) && is_numeric($_POST['book_id'])) {
    $book_id = $_POST['book_id'];

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    $_SESSION['cart'][] = $book_id;
    header('Location: index.php');
    exit;
} else {
    echo "Error: Invalid book ID provided.";
}
?>
