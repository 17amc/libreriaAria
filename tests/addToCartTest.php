<?php
use PHPUnit\Framework\TestCase;

class AddToCartTest extends TestCase {
    // Prueba de error: Verificar si un libro se agrega correctamente al carrito
    public function testAddBookToCart() {
        $_POST['book_id'] = 30; // 
        require 'addToCart.php';
        $this->assertContains(1, $_SESSION['cart']);
    }

    // Prueba de error: Verificar si se muestra un mensaje de error adecuado cuando no se proporciona un ID de libro
    public function testInvalidBookID() {
        unset($_POST['book_id']); 
        ob_start(); 
        require 'addToCart.php';
        $output = ob_get_clean(); 
        $this->assertEquals("Error: No book ID provided.", $output);
    }
}
?>
