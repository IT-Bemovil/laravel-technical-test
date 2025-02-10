# Prueba Técnica: Laravel - PHP

El objetivo de esta prueba es evaluar tus habilidades en Laravel, incluyendo el manejo de migraciones, modelos, seeders, factories y API Resources, así como la creación de endpoints para una API RESTful.

---

## Requerimientos

### 1. Inicializar un Nuevo Proyecto
- Crea un nuevo proyecto en Laravel.
- Configura la conexión con una base de datos MySQL o SQLite.

### 2. Crear Migraciones

#### 2.1 Migración para `payment_methods`
- Crea una migración para una tabla llamada `payment_methods`.
- La tabla debe incluir las siguientes columnas:
  - `id`: Identificador único.
  - `name`: Nombre del método de pago (máximo 100 caracteres, requerido).
  - `description`: Descripción del método de pago (opcional).
  - `created_at` y `updated_at`: Timestamps automáticos.

#### 2.2 Migración para `payment_method_options`
- Crea una migración para una tabla llamada `payment_method_options`.
- La tabla debe incluir las siguientes columnas:
  - `id`: Identificador único.
  - `payment_method_id`: Llave foránea que referencia el `id` de la tabla `payment_methods`.
  - `key`: Nombre de la opción (máximo 50 caracteres, requerido).
  - `value`: Valor de la opción (máximo 100 caracteres, requerido).
  - `created_at` y `updated_at`: Timestamps automáticos.

- Configura la relación entre `payment_methods` y `payment_method_options` como una relación uno a muchos.

---

### 3. Crear Modelos

#### 3.1 Modelo para `PaymentMethod`
- Crea un modelo llamado `PaymentMethod`.

#### 3.2 Modelo para `PaymentMethodOption`
- Crea un modelo llamado `PaymentMethodOption` que establezca una relación con `PaymentMethod`.

---

### 4. Crear Seeder y Factory

#### 4.1 Seeder y Factory para `payment_methods`
- Crea un seeder para la tabla `payment_methods`.
- Usa un factory para generar datos ficticios y crear 10 registros en la tabla `payment_methods`.

#### 4.2 Seeder y Factory para `payment_method_options`
- Crea un seeder para la tabla `payment_method_options`.
- Usa un factory para generar datos ficticios y crear entre 1 y 5 opciones por cada método de pago en la tabla `payment_method_options`.

---

### 5. Crear Endpoints

#### 5.1 Listar Métodos de Pago
- Implementa un endpoint que permita listar los métodos de pago disponibles.
- El listado debe estar paginado con 2 registros por página.
- El endpoint debe aceptar un query param para definir la página que se desea consultar.
- La respuesta debe incluir:
  - `id`: Identificador único del método de pago.
  - `name`: Nombre del método de pago.
  - `created_at`: Fecha de creación.
  - `options_count`: Cantidad de opciones disponibles para el método de pago.

#### 5.2 Consultar un Método de Pago por ID
- Implementa un endpoint que permita consultar un método de pago específico por su `id`.
- La respuesta debe incluir:
  - `id`: Identificador único del método de pago.
  - `name`: Nombre del método de pago.
  - `created_at`: Fecha de creación.
  - `options`: Lista de opciones disponibles para el método de pago. Cada opción debe incluir:
    - `id`: Identificador único de la opción.
    - `key`: Nombre de la opción.
    - `value`: Valor de la opción.

---

## Entregables
- Un repositorio público con el código del proyecto.
- Un archivo `README.md` con:
  - Instrucciones claras para configurar y ejecutar el proyecto. (README)

## Información relevante
- Se valorará la simplicidad del código y su escalabilidad
- Ten en cuenta los principios SOLID
- Ten en cuenta DRY (DONT REPEAT YOURSELF)
- Utiliza las convensiones de Laravel para el nombramiento de archivos, variables, métodos, clases etc...
