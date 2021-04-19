> [⬅️ Index](../README.md)
# ▶️ Exercise 3.1 - Run a container with a bind mount 💾

## ℹ️ Introduction

On this exercise we'll learn to use volumes to share a folder from the host OS to a container. That way we can share
our files and modify it in real time.

There are basically two types of mounts (Popularly known as volumes):
* **Volumes:** Are stored on the host system on a folder managed by Docker (`/var/lib/docker/volumes/`). Non-Docker
processes should not modify this part of the filesystem. Volumes are the best way to persist data in Docker.
* **Bind mounts:** May be stored **anywhere** on the host system. They may even be important system files or 
directories. Non-Docker processes on the Docker host or a Docker container can modify them at any time.

On development, we usually use Bind mount to share files with the container. That way we can run our project files
inside a container that already has all required libraries and dependencies on a specific version to run the project.

On this case we'll keep using Nginx to serve a basic site, and we'll add a bind mount with the site content. As these
files are originally on our disk we can edit them and seamlessly see the changes on the container.

We will see more about the second type of mount, volumes, on [exercise 4.3](../exercise4_3/exercise4_3.md).

## 👩🏻‍💻 Exercise

On this exercise you should:

- [ ] Have a look at [Dockerfile](files/Dockerfile) to ensure that you understand it
- [ ] Build an image from [Dockerfile](files/Dockerfile) and store it as `exercise3_1:latest`
- [ ] Run the image mounting the files `mount` folder on the container path `\var\www`
- [ ] Access [http://localhost](http://localhost) to see the site
- [ ] Update the content of `site/index.html`
- [ ] Reload [http://localhost](http://localhost) to see the changes on real time

## 🤔 Documentation and help

These links can provide the information needed to solve the exercise

* [Dockerfile reference](https://docs.docker.com/engine/reference/builder/)
* [Docker build reference](https://docs.docker.com/engine/reference/commandline/build/)
  * You can use [TLDR](https://tldr.sh/) for help: `tldr docker build`
* [Docker run reference](https://docs.docker.com/engine/reference/run/)
  * You can use [TLDR](https://tldr.sh/) for help: `tldr docker run`
* [Get started with Bind mounts on Docker](https://docs.docker.com/get-started/06_bind_mounts/)
  * Have a look at the `-v` flag
* [Bind mounts on Docker](https://docs.docker.com/storage/bind-mounts/)

## 🧩 Solution

> ⚠️ Try to solve it by yourself before having a look at the solution.
>
> You can use **Documentation and help** to find a solution for the exercise

You can find the solution [in here](solution3_1.md)

## 📚 Learning goals

* Run containers with bind mounted local volumes
