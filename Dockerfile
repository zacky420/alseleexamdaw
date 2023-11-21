# Dockerfile para MySQL
FROM mysql:8.2

# Establecer las variables de entorno para la configuración de MySQL
ENV     MYSQL_ROOT_PASSWORD: root
ENV     MYSQL_DATABASE: alsele
ENV     MYSQL_USER: fiumba
ENV     MYSQL_PASSWORD: fiumba

