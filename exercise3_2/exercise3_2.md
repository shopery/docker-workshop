> [⬅️ Index](../README.md)
# ▶️ Exercise 3.2 - Overriding container files with a volume ✍️

## ℹ️ Introduction

When we bind mount a folder into an image, we are overwriting everything that's on this container folder.

That's important to understand because it's something that we have to keep in mind specially on development. There's no
sense on creating a complex build or download a bunch of dependencies on a folder if this folder is going to be
overwritten by our local folder.

## 👩🏻‍💻 Exercise

On this exercise you should:

- [ ] Build an image from [Dockerfile](files/Dockerfile) and store it as `exercise3_2:latest`
- [ ] Run this image exposing internal `port:5000` (Default for the App) to `port:80` (Default for HTTP)
- [ ] Access [http://localhost](http://localhost) to see the site
  * At this point you are visiting the site from the files on the container, no volumes yet
- [ ] Run the same image with the same flags but this time mount `files/site` on the container path `/app`
- [ ] Access [http://localhost](http://localhost) to see the site again
  * What are you watching at this point? Which site?
- [ ] Modify your files on real time and see the changes on the site
  * The build from the original image just disappeared from our container

## 🤔 Documentation and help

These links can provide the information needed to solve the exercise

* [Dockerfile reference](https://docs.docker.com/engine/reference/builder/)
* [Docker build reference](https://docs.docker.com/engine/reference/commandline/build/)
  * You can use [TLDR](https://tldr.sh/) for help: `tldr docker build`
* [Docker run reference](https://docs.docker.com/engine/reference/run/)
  * You can use [TLDR](https://tldr.sh/) for help: `tldr docker run`
  * Have a look at the `-v` flag
* [Get started with Bind mounts on Docker](https://docs.docker.com/get-started/06_bind_mounts/)
* [Bind mounts on Docker](https://docs.docker.com/storage/bind-mounts/)

## 🧩 Solution

> ⚠️ Try to solve it by yourself before having a look at the solution.
>
> You can use **Documentation and help** to find a solution for the exercise

You can find the solution [in here](solution3_2.md)

## 📚 Learning goals

* Repercussions of mounting a local volume on a container non-empty folder.
