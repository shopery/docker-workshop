> [⬅️ Index](../README.md) / [▶️ Exercise 4.1](exercise4_1.md)
# 🧩 Exercise 4.1 solution - Docker compose with a single container 📦

## ℹ️ Solution

### 1️⃣ Fill the [docker-compose.yml](files/docker-compose.yml) file

Have a look at [solution/docker-compose.yml](solution/docker-compose.yml)

### 2️⃣ Use the `docker-compose` binary to start the container

```shell
docker-compose up
```

You can use `ctrl+c` to stop it

### 3️⃣ Check the containers running using the `docker` binary to see them in action

If you haven't used the `-d` flag to detach the docker-compose up command you will need to open a second terminal to 
execute the command

```shell
docker ps
CONTAINER ID   IMAGE           COMMAND                  CREATED          STATUS         PORTS                  NAMES
63ac226b6feb   solution_site   "docker-entrypoint.s…"   3 minutes ago    Up 2 minutes   0.0.0.0:80->5000/tcp   exercise4_1
```

As you can see, docker-compose is below using docker
