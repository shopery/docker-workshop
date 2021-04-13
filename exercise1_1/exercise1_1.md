> [⬅️ Index](../README.md)
# ▶️ Exercise 1.1 - Hello world 👋

## ℹ️ Introduction

Is a tradition to always start with a "Hello World" and we want to keep it 😊.

All containers have a CMD command that's run when a container starts as the container process.

This is offen a daemon or an interactive command that keeps the container alive but in some cases it could be a process that just runs and finishes.
In that last case, the container will execute the process and stop.

This is the case for [Hello World](https://hub.docker.com/_/hello-world), a docker image that just prints a hello world message.

## 👩🏻‍💻 Exercise

On this exercise you should:

- [ ] **Run** a hello world container from the **Docker Hub latest** image
- [ ] After it finishes running, verify that no container is running
- [ ] Read the logs from the stopped container

## 🤔 Documentation and help

These links can provide the information needed to solve the exercise

* [Hello world on Docker hub](https://hub.docker.com/_/hello-world)
* [Hello world latest tag on Docker hub](https://hub.docker.com/_/hello-world?tab=tags&page=1&ordering=last_updated&name=latest)
* [Docker run reference](https://docs.docker.com/engine/reference/run/)
    * You can use [TLDR](https://tldr.sh/) for help: `tldr docker run`
* [Docker ps reference](https://docs.docker.com/engine/reference/commandline/ps/)
    * You can use [TLDR](https://tldr.sh/) for help: `tldr docker ps`
* [Docker logs reference](https://docs.docker.com/engine/reference/commandline/logs/)
    * You can use [TLDR](https://tldr.sh/) for help: `tldr docker logs`

## 🧩 Solution

> ⚠️ Try to solve it by yourself before having a look at the solution.
> 
> You can use **Documentation and help** to find a solution for the exercise

You can find the solution [in here](solution1_1.md)

## 📚 Learning goals

* How to run a docker image
* Run container from docker hub image
* List running containers
* Get logs from a container (Even stopped)
