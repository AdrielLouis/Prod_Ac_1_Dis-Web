# Etapa 1: Construir frontend con Node
FROM node:20 as build

WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# Etapa 2: Ejecutar Laravel
FROM php:8.3-cli

# Instalar dependencias de sistema y extensiones de PHP
RUN apt-get update && apt-get install -y unzip git libzip-dev libpng-dev && docker-php-ext-install pdo pdo_mysql zip gd

# Copiar Composer desde la imagen oficial
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copiar el proyecto Laravel
COPY . .

# Copiar los archivos construidos de Vite desde la etapa anterior
COPY --from=build /app/public/build ./public/build

# Instalar dependencias de PHP sin dev
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# Configurar variables de entorno
ENV APP_ENV=production
ENV APP_DEBUG=false
ENV APP_URL=http://0.0.0.0:8080

# Exponer el puerto usado por Laravel
EXPOSE 8080

# Comando para iniciar Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
