# Imagen base de PHP con extensiones necesarias
FROM php:8.2-fpm

# Instala dependencias del sistema
RUN apt-get update && apt-get install -y \
    git curl libpng-dev libonig-dev libxml2-dev zip unzip sqlite3 libsqlite3-dev

# Instala extensiones de PHP requeridas por Laravel
RUN docker-php-ext-install pdo pdo_mysql pdo_sqlite mbstring exif pcntl bcmath gd

# Instala Composer (gestor de dependencias de PHP)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Establece el directorio de trabajo
WORKDIR /var/www

# Copia el código del proyecto al contenedor
COPY . .

# Instala dependencias de Laravel
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Copia el archivo de entorno de ejemplo si no existe
RUN cp .env.example .env || true

# Genera la clave de la aplicación
RUN php artisan key:generate

# Expone el puerto 8000 para servir Laravel
EXPOSE 8000

# Comando por defecto para ejecutar Laravel
CMD php artisan serve --host=0.0.0.0 --port=8000
