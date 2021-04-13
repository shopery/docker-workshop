> [⬅️ Index](../README.md) / [▶️ Exercise 3_1](exercise3_1.md)
# 🧩 Exercise 3.1 solution - Run a container with a volume 💾

## ℹ️ Solution

### 1️⃣ Build an image from [Dockerfile](files/Dockerfile) and store it as `exercise3_1:latest`

```shell
cd files
docker build -f Dockerfile ./ -t exercise3_1:latest
```

### 2️⃣ Run the image mounting the files `mount` folder on the container path `\var\www`

Before mounting the volume, you have to ensure that the folder can be bind mounted. On the mac this means you have to
add the desired folder or any parent to `Docker > Preferences > Resources > File Sharing` (More info
[here](https://docs.docker.com/docker-for-mac/) on File Sharing section) on linux this shouldn't be needed.

More info: [Bind Mounts on Docker](https://docs.docker.com/storage/bind-mounts/)

```shell
docker run -p 80:80 -v /path-to-repo/docker-workshop/exercise3_1/files/site:/var/www exercise3_1:latest
```

* `-p` to expose port `<public_port>:<container_port>`
* `-v` flag for volume bind mount `<local_path>:<container_path>`
