# Base image: Nginx Docker hub image at tag 1.19
FROM nginx:1.19

# Copy nginx.conf file from config folder on Context to /etc/nginx/nginx.conf
COPY config/nginx.conf /etc/nginx/nginx.conf
