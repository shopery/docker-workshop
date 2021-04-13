> [⬅️ Index](../README.md)
# ▶️ Exercise 3.1 - Run a container with a volume 💾

## ℹ️ Introduction

On this exercise we'll learn to use volumes to share a folder from the host OS to a container. That way we can share
our files and modify it in real time.

This is something that we use on development. That way we can have our project files inside a container that already
contains all required libraries and dependencies on a specific version to run the project.

On this case we'll keep using Nginx to serve a basic site and we'll mount a volume with the site content. As this files
are originally on our disk we can edit them and the container can seamlessly see this changes.

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
    * You can use [TLDR](https://tldr.sh/) for help: `tldr docker run
* [Get started with Bind mounts on Docker](https://docs.docker.com/get-started/06_bind_mounts/)
* [Bind mounts on Docker](https://docs.docker.com/storage/bind-mounts/)

## 🧩 Solution

> ⚠️ Try to solve it by yourself before having a look at the solution.
>
> You can use **Documentation and help** to find a solution for the exercise

You can find the solution [in here](solution3_1.md)

## 📚 Learning goals

* Run containers with bind mounted local volumes
