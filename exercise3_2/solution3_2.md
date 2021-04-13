> [⬅️ Index](../README.md) / [▶️ Exercise 3.2](exercise3_2.md)
# 🧩 Exercise 3.2 solution - Overriding container files with a volume ✍️

## ℹ️ Solution

### 1️⃣ Build an image from [Dockerfile](files/Dockerfile) and store it as `exercise3_2:latest`

```shell
cd files
docker build -f Dockerfile ./ -t exercise3_2:latest
```

### 2️⃣ Run this image exposing internal `port:5000` (Default for the App) to `port:80` (Default for HTTP)

```shell
docker run -p 80:5000 exercise3_2:latest
```

### 3️⃣ Run the same image with the same flags but this time mount `files/site` on the container path `/app`

```shell
docker run -p 80:5000 -v /path-to-repo/docker-workshop/exercise3_2/files/site:/app exercise3_2:latest
```

Remember that you need to previously enable bind mount for this folder
