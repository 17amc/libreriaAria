# Librería Virtual

Este es un proyecto de una librería virtual desarrollado en PHP y MySQL por medio de phpMyAdmin.

## Configuración

1. Descomprime el archivo en tu máquina local.
2. Importa la base de datos `bookstore.sql` en tu servidor.
3. Configura la conexión a la base de datos en el archivo `conexion.php`.
4. Abre el proyecto en tu servidor local (por ejemplo, XAMPP).

## Uso

- `index.php`: Página principal que muestra todos los libros disponibles y permite agregarlos al carrito.
- `cart.php`: Página que muestra los libros agregados al carrito y permite proceder al pago.
- `addToCart.php`: Script para agregar libros al carrito.
- `removeFromCart.php`: Script para eliminar libros del carrito.

## Pruebas

Se han incluido pruebas unitarias básicas para algunos de los scripts PHP. Para ejecutar las pruebas, sigue estos pasos:

1. Asegúrate de tener PHPUnit instalado en el entorno de desarrollo.
2. Navega a la carpeta `tests`.
3. Ejecuta el comando `vendor/bin/phpunit tests/addToCartTest.php` y `vendor/bin/phpunit tests/removeFromCartTest.php` para cada archivo de prueba.

## Errores Conocidos

- **Error al Iniciar la Sesión**: Algunas pruebas generan errores relacionados con la inicialización de la sesión después de que se hayan enviado encabezados. Esto puede deberse a la inclusión de archivos que generan salida antes de que se inicie la sesión, sin embargo, no encontré solución a estos errores. 

## Requisitos

- PHP >= 7.0
- MySQL >= 5.6
- Servidor web.

