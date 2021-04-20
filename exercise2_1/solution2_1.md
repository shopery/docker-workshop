> [⬅️ Index](../README.md) / [▶️ Exercise 2.1](exercise2_1.md)
# 🧩 Exercise 2.1 solution - Your first Dockerfile 📥

## ℹ️ Solution

### 1️⃣ Dockerfile

Have a look at the Dockerfile solution at [📄 Dockerfile](solution/Dockerfile)

### 2️⃣ Build this image as `exercise2_1:latest`
Access the files folder to run the build command

```shell
cd files
docker build -f Dockerfile ./ -t exercise2_1:latest
```

* `-f` to select the Dockerfile to build
* `./` As the Build context
* `exercise2_1:latest` The image to run and tag (`<image>:<tag>`)

Alternatively you could do it from outside the folder pointing to the right Dockerfile and Build context

```shell
docker build -f files/Dockerfile ./files -t exercise2_1:latest
```

### 3️⃣ Find your built image on your local images

```shell
docker images
REPOSITORY    TAG      IMAGE ID       CREATED          SIZE
exercise2_1   latest   755c56ea400e   2 minutes ago    133MB
```

### 4️⃣ Run this image exposing `port:80`

```shell
docker run -d -p 80:80 exercise2_1:latest
```

* `-d` flag for detached (The terminal does not get stuck on the container)
* `-p` to expose port `<public_port>:<container_port>`

After this point you can access the app at [http://localhost](http://localhost)

### 5️⃣ Rebuild the `exercise2_1:latest` image

Just run the same build command, the image will be overwritten

```shell
docker build -f files/Dockerfile ./files -t exercise2_1:latest
```

### 6️⃣ Stop the current container and run the image again exposing `port:80`

Search for the container to stop

```shell
docker ps
CONTAINER ID   IMAGE                COMMAND                  CREATED         STATUS         PORTS                NAMES
c3f3377a95bd   exercise2_1:latest   "/docker-entrypoint.…"   3 seconds ago   Up 2 seconds   0.0.0.0:80->80/tcp   epic_rhodes
```

Stop the container
```shell
docker stop c3f3377a95bd
```

Re-run the container
```shell
docker run -d -p 80:80 exercise2_1:latest
```
