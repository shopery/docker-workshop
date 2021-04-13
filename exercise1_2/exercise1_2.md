> [⬅️ Index](../README.md)
# ▶️ Exercise 1.2 - Run a persistent container 🐣

## ℹ️ Introduction

On [exercise 1.1](../exercise1_1/exercise1_1.md) we started a container that stopped after doing its job. In this case 
we'll run a persistent container that once started it keeps running. This is because the CMD executed inside the
container is a process or daemon that does not stop until we order it to stop.

## 👩🏻‍💻 Exercise

On this exercise you should:

- [ ] **Run** a Hello world container from the **Docker Hub latest** with interactive mode and pseudo-TTY flags
    * This is a non daemonized container so don't panic if it runs and just stop
- [ ] **Run** a Node.js container from the **Docker Hub latest** with interactive mode and pseudo-TTY flags
    * You can run a hello world (`console.log("hello world")`) on the container
- [ ] From another terminal check the running containers
- [ ] Stop the container from this second terminal
- [ ] Read the logs for the container you stopped

## 🤔 Documentation and help

These links can provide the information needed to solve the exercise

* [Node on Docker hub](https://hub.docker.com/_/node)
* [Node latest tag on Docker hub](https://hub.docker.com/_/node?tab=tags&page=1&ordering=last_updated&name=latest)
* [Docker run reference](https://docs.docker.com/engine/reference/run/)
    * You can use [TLDR](https://tldr.sh/) for help: `tldr docker run`
* [Docker ps reference](https://docs.docker.com/engine/reference/commandline/ps/)
    * You can use [TLDR](https://tldr.sh/) for help: `tldr docker ps`
* [Docker logs reference](https://docs.docker.com/engine/reference/commandline/logs/)
    * You can use [TLDR](https://tldr.sh/) for help: `tldr docker logs`
* [Docker stop reference](https://docs.docker.com/engine/reference/commandline/stop/)

## 🧩 Solution

> ⚠️ Try to solve it by yourself before having a look at the solution.
> 
> You can use **Documentation and help** to find a solution for the exercise

You can find the solution [in here](solution1_2.md)

## 📚 Learning goals

* Run a daemonized container (A container that keeps running after start)
* Learn differences between a daemonized container and a non daemonized one
* Interact with a running container
* Stop running container from docker
* Check stopped containers and logs
