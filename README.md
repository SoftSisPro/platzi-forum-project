# Foro de Preguntas y Respuestas

Este es un proyecto de foro de preguntas y respuestas construido con Laravel y Livewire. Los usuarios pueden crear, editar y responder preguntas, así como filtrar preguntas por categorías.

## Características

- **Autenticación de Usuarios**: Los usuarios pueden registrarse e iniciar sesión.
- **Creación de Preguntas**: Los usuarios autenticados pueden crear nuevas preguntas.
- **Edición de Preguntas**: Los usuarios pueden editar sus propias preguntas.
- **Respuestas**: Los usuarios pueden responder a las preguntas.
- **Filtrado por Categorías**: Las preguntas pueden ser filtradas por categorías.
- **Paginación**: Las preguntas y respuestas están paginadas para una mejor experiencia de usuario.

## Estructura del Proyecto

- `app/Http/Controllers/ThreadController.php`: Controlador para manejar la creación, edición y actualización de preguntas.
- `app/Livewire/ShowThreads.php`: Componente Livewire para mostrar y filtrar preguntas.
- `app/Livewire/ShowThread.php`: Componente Livewire para mostrar una pregunta específica y sus respuestas.
- `app/Livewire/ShowReply.php`: Componente Livewire para manejar las respuestas a las preguntas.
- `resources/views/thread/`: Vistas Blade para la creación y edición de preguntas.
- `resources/views/livewire/`: Vistas Blade para los componentes Livewire.
- `database/seeders/DatabaseSeeder.php`: Seeder para poblar la base de datos con datos de prueba.

## Instalación

1. Clona el repositorio:
    ```sh
    git clone https://github.com/tu-usuario/tu-repositorio.git
    cd tu-repositorio
    ```

2. Instala las dependencias de PHP:
    ```sh
    composer install
    ```

3. Instala las dependencias de Node.js:
    ```sh
    npm install
    ```

4. Copia el archivo `.env.example` a `.env` y configura tus variables de entorno:
    ```sh
    cp .env.example .env
    ```

5. Genera la clave de la aplicación:
    ```sh
    php artisan key:generate
    ```

6. Ejecuta las migraciones y seeders para preparar la base de datos:
    ```sh
    php artisan migrate --seed
    ```

7. Compila los assets de frontend:
    ```sh
    npm run dev
    ```

8. Inicia el servidor de desarrollo:
    ```sh
    php artisan serve
    ```

## Uso

- Visita `http://localhost:8000` en tu navegador.
- Regístrate o inicia sesión para comenzar a crear y responder preguntas.

## Contribución

¡Las contribuciones son bienvenidas! Por favor, abre un issue o envía un pull request.

## Licencia

Este proyecto está licenciado bajo la [MIT License](LICENSE).
