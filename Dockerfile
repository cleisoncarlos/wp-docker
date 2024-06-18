FROM wordpress:latest

# Copiar o tema para a pasta de temas do WordPress
COPY ./meu-tema /var/www/html/wp-content/themes/meu-tema
