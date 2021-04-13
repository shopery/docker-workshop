> [⬅️ Index](../README.md) / [▶️ Exercise 2.3](exercise2_3.md)
# 🧩 Exercise 2.3 solution - Multiple Dockerfiles 👯

## ℹ️ Solution

### 1️⃣ Build images for Nginx and both Sites

```shell
cd files
docker build -f base.Dockerfile ./ -t exercise2_3-nginx:latest
docker build -f app1.Dockerfile ./ -t exercise2_3-app1:latest
docker build -f app2.Dockerfile ./ -t exercise2_3-app2:latest
```

Remember that the two last images depend on the first one. If the first image is not created the two last builds will
fail

Be careful with all images too, once the first image is build and stored on your local registry the two other images
will use it. If you make any change on the base image and do not remember to re-build it you won't see the last changes
on your sites.

### 2️⃣ Running the sites

```shell
docker run -d -p 81:80 exercise2_3-app1:latest
docker run -d -p 82:80 exercise2_3-app2:latest
```

* `-d` flag for detached (The terminal does not get stuck on the container)
* `-p` to expose port `<public_port>:<container_port>`

After that, you can visit [http://localhost:81](http://localhost:81) and [http://localhost:82](http://localhost:82)

### 3️⃣ Stop all the sites

Look for the container ID's

```shell
docker ps
CONTAINER ID   IMAGE                     COMMAND                  CREATED          STATUS          PORTS                NAMES
a317f96f5d91   exercise2_3-app2:latest   "/docker-entrypoint.…"   57 seconds ago   Up 55 seconds   0.0.0.0:82->80/tcp   busy_volhard
183dd9b3a4b8   exercise2_3-app1:latest   "/docker-entrypoint.…"   58 seconds ago   Up 57 seconds   0.0.0.0:81->80/tcp   confident_ardinghelli
```

And stop it

```shell
docker stop a317f96f5d91
docker stop 183dd9b3a4b8
```

### 4️⃣ Remove the shared `exercise2_3-nginx:latest` image and run any of the sites again

Check that the image is there (optional)

```shell
docker images
REPOSITORY          TAG      IMAGE ID       CREATED         SIZE
exercise2_3-nginx   latest   4637450703c6   3 minutes ago   133MB
```

Remove the image

```shell
docker image rm exercise2_3-nginx
```

Run the site again
```shell
docker run -d -p 81:80 exercise2_3-app1:latest
```
* **Does it work?** YES
* **Why?** The image is already generated and contain all the needed instructions to run the container. The dependency is
on the Dockerfile for this image but once the image is generated it copies the instructions it contains the output for
the already executed commands

### 5️⃣ Remove the Site 1 image `exercise2_3-app1:latest` and rebuild it again.

Check that the image is there (optional)

```shell
docker images
REPOSITORY        TAG      IMAGE ID       CREATED         SIZE
exercise2_3-app1  latest   f441c4b55e29   5 minutes ago   133MB
```

Remove the image

```shell
docker image rm exercise2_3-app1
```

It will fail because there's a running or stopped container using this image. You need to kill (Not stop) for any
existent container using this image

```shell
docker kill f23f6e17e81a
```

Now you can remove the image without any problem

```shell
docker image rm exercise2_3-app1
```

Now, try to rebuild the image (Remember that we have previously removed the shared nginx image)

```shell
docker run -d -p 81:80 exercise2_3-app1:latest
Unable to find image 'exercise2_3-app1:latest' locally
docker: Error response from daemon: pull access denied for exercise2_3-app1, repository does not exist or may require 'docker login': denied: requested access to the resource is denied.
See 'docker run --help'
```

* **Does it work?** NO
* **Why?** When re-generating the image from the site dockerfile, it has a dependency on an image that no longer exist.
Docker is not smart enough to understand that can re-generate this image from another file so in case you want to do it
you must do it manually.
