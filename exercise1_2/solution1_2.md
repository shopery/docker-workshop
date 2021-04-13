> [⬅️ Index](../README.md) / [▶️ Exercise 1.2](exercise1_2.md)
# 🧩 Exercise 1.2 solution - Run a persistent container 🐣

## ℹ️ Solution

### 1️⃣ Run a Hello world container from the Docker Hub latest image without any flag

```shell
docker run -it hello-world:latest
```

The container will echo its message and stop, that's normal as this is not a daemonized container

### 2️⃣ Run a Node.js container from the Docker Hub latest with interactive mode and pseudo-TTY flags

```shell
docker run -it node:latest 
```

The container will run on an interactive environment where you can run Node commands.
If you look at the CMD on the latest image, it just executes `node`
If you try to do this on your local environment you'll see that Node starts on an interactive way as it happens on the
container

```shell
~ node
Welcome to Node.js v15.9.0.
Type ".help" for more information.
>
```

Once your container is running on interactive mode you can interact on it just typing the desired command

```shell
~ docker run -it node:latest
Welcome to Node.js v15.12.0.
Type ".help" for more information.
> console.log("hello world")
hello world
undefined
>
```


### 3️⃣ From another terminal check the running containers

```shell
docker ps
```

This command should output something similar to these:
```shell
CONTAINER ID   IMAGE         COMMAND                  CREATED         STATUS         PORTS     NAMES
e73014f90e18   node:latest   "docker-entrypoint.s…"   6 seconds ago   Up 5 seconds             serene_lamport
```

Here you can see the running container

### 4️⃣ Stop the container from this second terminal

Getting the CONTAINER ID from the previous command you can just execute

```shell
docker stop e73014f90e18
```

After that the container is stopped, the interactive mode from the first terminal is killed.
Now you can perform a docker ps to check that no container is currently active

```shell
docker ps
CONTAINER ID   IMAGE     COMMAND   CREATED   STATUS    PORTS     NAMES
```

You can check for all containers to see your stopped container

```shell
docker ps --all
CONTAINER ID   IMAGE         COMMAND                  CREATED          STATUS                       PORTS     NAMES
e73014f90e18   node:latest   "docker-entrypoint.s…"   39 seconds ago   Exited (137) 6 seconds ago             serene_lamport
```

### 5️⃣ Read the logs for the container you stopped

Use the ID you found on the previous command (`docker ps --all`) or just run it again to get it

```shell
docker logs e73014f90e18
Welcome to Node.js v15.12.0.
Type ".help" for more information.
> console.log("hello world")
hello world
undefined
> %
```

Here you can see all the interaction you did on the container and all the logs that the container redirects to the
standard out.

Some containers send relevant logs to this log to understand what was happening inside the container at any point and
this can be very useful to debug or see why this container stopped.
