# Base image: Our previously generated nginx image
FROM exercise2_3-nginx:latest

# Copy site content
COPY site2 /var/www
