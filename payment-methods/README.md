
# Payment method project

## Pasos para ejecutar el aplicativo

- Clonar el aplicativo
- Crear base de datos en MySQL
- Configurar variables de entorno
- Ejecutar el comando: composer install
- Ejecutar el comando: php artisan migrate:fresh --seed, esto creara 3 metodos de pago y 3 opciones de pago por cada metodo de pago
- Para consultar el metodo de pago por id, este es el endpoint: http://127.0.0.1:8000/api/v1/payment-method/1, donde el /1 es el id del metodo de pago, tambien pueden probar con el id 2, 3
- Para consultar por todos los metodos de pago paginados de a 2, este es el endpoint: http://127.0.0.1:8000/api/v1/payment-methods?page=1, donde page es el numero de pagina donde nos queremos parar.
- Eso seria todo, gracias por seguir los pasos.
- 
