> [⬅️ Index](../README.md)
# ▶️ Exercise 2.1 - Your first Dockerfile 📥

## ℹ️ Introduction

Dockerfiles contain the **instructions to create a container image**.

There are some basics you must know before start working on a Dockerfile:
* **Build context:** When an image is build you have access to a Build context (A local folder). You can copy files from
this context inside the image using **ADD** or **COPY**
* **Base image:** All Dockerfiles start with a Base image. This is an existent docker image that can exist locally or on
a Docker Registry (By default Docker Hub)

## 👩🏻‍💻 Exercise

> We assume that the exercise is done inside the `files` folder

On this exercise you should:

- [ ] Fill [Dockerfile](files/Dockerfile) file to build a site using nginx (instructions on the file)
- [ ] Build this image as `exercise2_1:latest`
- [ ] Find your built image on your local images
- [ ] Run this image exposing `port:80`
- [ ] Access [http://localhost](http://localhost)
- [ ] Modify files from the site on your local machine
- [ ] Confirm changes are not shown at [http://localhost](http://localhost)
- [ ] Rebuild the `exercise2_1:latest` image
- [ ] Stop the current container and run the image again exposing `port:80`
- [ ] Confirm that the changes are now shown at [http://localhost](http://localhost)

## 🤔 Documentation and help

These links can provide the information needed to solve the exercise

* [Nginx on Docker hub](https://hub.docker.com/_/nginx)
* [Nginx 1.19 tag on Docker hub](https://hub.docker.com/_/nginx?tab=tags&page=1&ordering=last_updated&ame=1.19)
* [Dockerfile reference](https://docs.docker.com/engine/reference/builder/)
  * You should use `FROM` & `COPY` commands
* [Docker build reference](https://docs.docker.com/engine/reference/commandline/build/)
    * You can use [TLDR](https://tldr.sh/) for help: `tldr docker build`
* [Docker run reference](https://docs.docker.com/engine/reference/run/)
    * You can use [TLDR](https://tldr.sh/) for help: `tldr docker run`
* [Docker stop reference](https://docs.docker.com/engine/reference/commandline/stop/)

## 🧩 Solution

> ⚠️ Try to solve it by yourself before having a look at the solution.
>
> You can use **Documentation and help** to find a solution for the exercise

You can find the solution [in here](solution2_1.md)

## 📚 Learning goals

* Basic dockerfile instructions
* Using a Base image on Docker build
* Using a build context on Docker build
* Create an image from a dockerfile
* Rebuild an image from a dockerfile
* List local images
* Run a build image
* Expose container port on build
* Changes on source files do not affect images neither containers
