# Usa PHP 8.3 ya que las dependencias requieren >=8.3
FROM php:8.3-cli

# Instala dependencias del sistema
RUN apt-get update && apt-get install -y unzip git libzip-dev && docker-php-ext-install zip pdo pdo_mysql

# Instala Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Copia el proyecto
COPY . .

# Instala dependencias PHP (solo de producción)
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Compila assets si usas Vite (ignora error si no hay npm)
RUN npm install && npm run build || true

# Expone el puerto (Railway usa variable PORT automáticamente)
EXPOSE 8000

# Comando para iniciar Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]

