> [⬅️ Index](../README.md) / [▶️ Exercise 1.1](exercise1_1.md)
# 🧩 Exercise 1.1 solution - Hello world 👋

## ℹ️ Solution

### 1️⃣ Run a hello world container from the Docker Hub latest image

```shell
docker run hello-world:latest
```

### 2️⃣ After it finishes running, verify that no container is running

```shell
docker ps
```

### 3️⃣ Read the logs from the stopped container

```shell
docker ps --all
docker logs 22c31e0adeea
```

Search the stopped container using `docker ps --all` and use the `CONTAINER ID` from the previously run container
to get the logs
