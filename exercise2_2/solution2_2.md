> [⬅️ Index](../README.md) / [▶️ Exercise 2.2](exercise2_2.md)
# 🧩 Exercise 2.2 solution - Multi-step Dockerfile 🪜

## ℹ️ Solution

### 1️⃣ Dockerfile

Have a look to the Dockerfile solution at [📄 Dockerfile](solution/Dockerfile)

### 2️⃣ Build this image as `exercise2_2:latest`

Assuming you are on exercise root folder

Access the files folder to run the build command

```shell
cd files
docker build -f Dockerfile ./ -t exercise2_2:latest
```

* `-f` to select the Dockerfile to build
* `./` As the Build context
* `exercise2_2:latest` The image to run and tag (`<image>:<tag>`)

Alternatively you could do it from outside the folder pointing to the right Dockerfile and Build context

```shell
docker build -f files/Dockerfile ./files -t exercise2_2:latest
```

### 3️⃣ Find your built image on your local images

```shell
docker images
REPOSITORY    TAG      IMAGE ID       CREATED         SIZE
exercise2_2   latest   5cf351c02fe3   2 minutes ago   1.03GB
```

Have a look to the image size, **more than 1Gb**!

### 4️⃣ Change app image from Node 15.14 to Node 15.14-alpine (Lighter image)

On the second step `FROM` change `node:15.14` to `node:15.14-alpine`

After that, rebuild the image

```shell
docker build -f files/Dockerfile ./files -t exercise2_2:latest
```

Have a look to the new image size, **120MB with the app**!

### 5️⃣ Find your built image on your local images

```shell
docker images
REPOSITORY    TAG      IMAGE ID       CREATED         SIZE
exercise2_2   latest   5cf351c02fe3   3 minutes ago   120MB
```

Have a look to the new image size, **120MB with the same app**!

### 6️⃣ Run this image exposing internal `port:5000` (Default for the App) to `port:80` (Default for HTTP)

```shell
docker run -p 80:5000 exercise2_2:latest
```

* `-p` to expose port `<public_port>:<container_port>`

Visit [http://localhost](http://localhost) to see your site
