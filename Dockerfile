# Imagen base con PHP y Composer
FROM php:8.3-cli

# Instalar dependencias necesarias
RUN apt-get update && apt-get install -y unzip git libzip-dev && docker-php-ext-install zip pdo pdo_mysql

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Crear directorio de trabajo
WORKDIR /var/www/html

# Copiar archivos del proyecto
COPY . .

# Instalar dependencias de PHP y de Node (si usas Vite)
RUN composer install --no-interaction --no-scripts --no-dev && \
    npm install && npm run build || true

# Exponer el puerto que Railway usará
EXPOSE 8000

# Comando para ejecutar Laravel en 0.0.0.0
CMD php artisan serve --host=0.0.0.0 --port=8000
