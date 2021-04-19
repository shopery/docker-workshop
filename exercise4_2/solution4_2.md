> [⬅️ Index](../README.md) / [▶️ Exercise 4.2](exercise4_2.md)
# 🧩 Exercise 4.2 solution - Docker compose with a multiple connected containers 🔌

## ℹ️ Solution

### 1️⃣ Use the `docker-compose` binary to start the app on the `docker-compose.basic.yml` file on detached mode

```shell
docker-compose -f docker-compose.basic.yml up -d
```

* `-d` flag for detached. This flag allows you to keep using this terminal and even close it with the entire app
running.

### 2️⃣ Stop the app using the `docker-compose` binary

```shell
docker-compose -f docker-compose.basic.yml stop
```

### 3️⃣ Use the `docker-compose` binary to start the app on the `docker-compose.mysql.yml` file on detached mode

```shell
docker build -f Dockerfile ./ -t exercise4_2-php:latest
docker-compose -f docker-compose.mysql.yml up -d
```

### 4️⃣ Stop the app using the `docker-compose` binary

```shell
docker-compose -f docker-compose.mysql.yml stop
```
