<?php
use PHPUnit\Framework\TestCase;

class RemoveFromCartTest extends TestCase {
    // Prueba de éxito: Verificar si un libro se elimina correctamente del carrito
    public function testRemoveBookFromCart() {
        $_POST['book_id'] = 1; 
        $_SESSION['cart'] = [1, 2, 3]; 
        require 'removeFromCart.php';
        $this->assertNotContains(1, $_SESSION['cart']);
    }

    // Prueba de error: Verificar si se muestra un mensaje de error adecuado cuando no se proporciona un ID de libro válido
    public function testInvalidBookID() {
        unset($_POST['book_id']); 
        ob_start(); 
        require 'removeFromCart.php';
        $output = ob_get_clean(); 
        $this->assertEquals("Error: Invalid book ID provided.", $output);
    }
}
?>
