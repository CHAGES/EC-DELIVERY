# Usa una imagen base de PHP con Apache
FROM php:7.4-apache

# Instala las dependencias necesarias y extensiones de PHP
RUN apt-get update && apt-get install -y git libmariadb-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Habilita el módulo de reescritura de Apache
RUN a2enmod rewrite

# Configurar Apache para permitir .htaccess
RUN sed -i 's/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Establecer el ServerName para evitar la advertencia
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Clonar el repositorio de GitHub
RUN git clone https://github.com/CHAGES/EC-DELIVERY.git /var/www/html

# Asignar permisos adecuados a los directorios
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Cambiar el puerto de Apache de 80 a 8081
RUN sed -i 's/80/8081/g' /etc/apache2/ports.conf /etc/apache2/sites-available/000-default.conf

# Exponer el puerto 8081 para acceder al sitio
EXPOSE 8081

# Iniciar Apache
CMD ["apache2-foreground"]
