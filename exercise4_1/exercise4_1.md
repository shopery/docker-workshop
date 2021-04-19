> [⬅️ Index](../README.md)
# ▶️ Exercise 4.1 - Docker compose with a single container 📦

## ℹ️ Introduction

On this exercise we'll start working with docker compose. Docker compose is an orchestration technology that helps us
build a container ecosystem and all it's dependencies, relations, configurations, volumes, etc.

It's important to understand that all that Docker Compose does can be achieved by just running some docker commands but
this orchestration technology helps us simplify this process and ensure that all the containers are on a specific state.

There are other docker orchestration technologies like Docker Swarm or Kubernetes

Docker Compose uses the Yaml data-serialization language and by default searches for a `docker-compose.yml` file but you
can use and specify an alternative name for the file. The file follows a defined syntax defined on it's documentation
and the `docker-compose` binary has a set of commands to run and interact with the containers defined on the file.

## 👩🏻‍💻 Exercise

On this exercise you should:

- [ ] Fill the [docker-compose.yml](files/docker-compose.yml) file
- [ ] Use the `docker-compose` binary to start the container
- [ ] Access [http://localhost](http://localhost) to see the site again
- [ ] Check the containers running using the `docker` binary to see them in action

## 🤔 Documentation and help

These links can provide the information needed to solve the exercise

* [Docker compose file v3 reference](https://docs.docker.com/compose/compose-file/compose-file-v3/)
* [Overview of docker-compose CLI](https://docs.docker.com/compose/reference/overview/)
    * You can use [TLDR](https://tldr.sh/) for help: `tldr docker-compose`

## 🧩 Solution

> ⚠️ Try to solve it by yourself before having a look at the solution.
>
> You can use **Documentation and help** to find a solution for the exercise

You can find the solution [in here](solution4_1.md)

## 📚 Learning goals

* Basic `docker-compose.yml` file structure
* Basic `docker-compose` run command
* Basic understanding on docker ↔ docker-compose interaction
