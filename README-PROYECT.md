# Instalación del Proyecto Laravel

## Requisitos Previos
Antes de instalar el proyecto, asegúrese de tener instalado:

- **PHP >= 8.0**
- **Composer**
- **MySQL o PostgreSQL** (según la configuración del proyecto)
- **Node.js y NPM** (opcional, si el proyecto usa assets frontend con Vite o Laravel Mix)

## Pasos de Instalación

### 1. Clonar el repositorio
```bash
git clone https://github.com/usuario/proyecto.git
cd proyecto
```

### 2. Instalar dependencias de PHP con Composer
```bash
composer install
```

### 3. Crear el archivo de entorno
```bash
cp .env.example .env
```
Luego, edita el archivo **.env** y configura la conexión a la base de datos.

### 4. Generar la clave de aplicación
```bash
php artisan key:generate
```

### 5. Configurar la base de datos
Crea una base de datos en MySQL/PostgreSQL y actualiza las credenciales en el archivo **.env**:
```ini
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_base_datos
DB_USERNAME=usuario
DB_PASSWORD=contraseña
```

### 6. Ejecutar migraciones y seeders (Opcional)
```bash
php artisan migrate --seed
```
Si solo deseas ejecutar migraciones sin seeders:
```bash
php artisan migrate
```

### 7. Iniciar el servidor local
```bash
php artisan serve
```
Accede a la aplicación en **http://127.0.0.1:8000**

### 8. Compilar assets frontend (Si aplica)
Si el proyecto usa Vite o Laravel Mix:
```bash
npm install
npm run dev
```

## Comandos útiles
- **Limpiar caché:**
  ```bash
  php artisan cache:clear && php artisan config:clear && php artisan route:clear && php artisan view:clear
  ```
- **Ejecutar seeders nuevamente:**
  ```bash
  php artisan db:seed
  ```
- **Actualizar dependencias:**
  ```bash
  composer update
  ```

## API Endpoints (Si aplica)
Si el proyecto tiene API, revisa `routes/api.php` para los endpoints disponibles.

---
Eso es todo. ¡Disfruta programando! 🚀

