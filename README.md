# API RESTful - La Buena Mesa 🍽️

API desarrollada en Laravel para la gestión centralizada del menú del restaurante "La Buena Mesa". Implementa operaciones CRUD completas y filtrado por categorías utilizando principios de arquitectura limpia y Eloquent ORM.

## 🚀 Instalación (Entorno Docker)

1. Clonar el repositorio:
    ```bash
    git clone [https://github.com/WalterCrace/la-buena-mesa.git](https://github.com/WalterCrace/la-buena-mesa)
    ```
2. Instalar dependencias de PHP:
   docker run --rm \
   -u "$(id -u):$(id -g)" \
   -v "$(pwd):/var/www/html" \
   -w /var/www/html \
   laravelsail/php83-composer:latest \
   composer install --ignore-platform-reqs
3. Copiar el archivo de entorno:
   cp .env.example .env
4. Levantar los contenedores de Docker (Sail):
   ./vendor/bin/sail up -d
5. Generar la clave de la aplicación y ejecutar migraciones:
   ./vendor/bin/sail artisan key:generate
   ./vendor/bin/sail artisan migrate

## 📡 Documentación de Endpoints

1. Listar todos los elementos
    - Método: GET
    - Ruta: /api/menu-items
2. Crear un nuevo elemento
    - Método: POST
    - Ruta: /api/menu-items
    - Body (JSON):
      {
      "name": "Ceviche Fusión",
      "description": "Ceviche con mango y maracuyá.",
      "price": 15.50,
      "category": "Entradas",
      "is_available": true
      }
3. Obtener un elemento específico
    - Método: GET
    - Ruta: /api/menu-items/{id}
4. Actualizar un elemento
    - Método: PUT / PATCH
    - Ruta: /api/menu-items/{id}
5. Eliminar un elemento
    - Método: DELETE
    - Ruta: /api/menu-items/{id}
6. Filtrar por categoría
    - Método: GET
    - Ruta: /api/menu-items/category/{category}
