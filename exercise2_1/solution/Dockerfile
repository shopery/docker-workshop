# Base image: Nginx Docker hub image at tag 1.19
FROM nginx:1.19

# Copy nginx.conf file from config folder on Context to /etc/nginx/nginx.conf
COPY config/nginx.conf /etc/nginx/nginx.conf

# Copy site folder from on Context to /var/www
COPY site /var/www

# The Nginx base image already has a valid CMD so no further changes are needed
