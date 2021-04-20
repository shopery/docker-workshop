> [⬅️ Index](../README.md)
# ▶️ Exercise 4.3 - Docker compose with a multiple containers sharing a volume 💾

## ℹ️ Introduction

On this exercise we'll use the help of docker compose to raise an app with a shared volume.

As we already told on previous sections, there are basically two types of mounts (Popularly known as volumes):
* **Volumes:** Are stored on the host system on a folder managed by Docker (`/var/lib/docker/volumes/`). Non-Docker
  processes should not modify this part of the filesystem. Volumes are the best way to persist data in Docker.
* **Bind mounts:** May be stored **anywhere** on the host system. They may even be important system files or
  directories. Non-Docker processes on the Docker host or a Docker container can modify them at any time.

These volumes are usually used for two different purposes. The first one is to persist data from the container. For
example, you can add a volume to your MySQL image and rebuild a container with a new image restoring the same volume to
avoid losing data. Even remove all your containers and run it again without data loss.

The second purpose is to share data between containers. This is a less known feature because on production we try to
avoid using the disk on the app. Remember that multiple containers of the app could be used to improve performance. But,
on development, sometimes we need to share files between containers. To do that we can use volumes mounting the same
volume on multiple containers. That way the two or more containers will have access to the same volume.

On this exercise we'll run two an empty site and we'll share the site content between the two containers. Then we'll
enter one of the containers to create an index.html basic file and we'll see the changes in both containers as they
share the site folder.

## 👩🏻‍💻 Exercise

On this exercise you should:

- [ ] Fill the [docker-compose.yml](files/docker-compose.yml) file to raise the app sites
- [ ] Use the `docker-compose` binary to start the app from the `docker-compose.yml` file on detached mode
- [ ] Visit both sites, there's no content on both site so both sites should return a 403 error
  * Site 1 url: [http://localhost:81](http://localhost:81)
  * Site 2 url: [http://localhost:82](http://localhost:82)
- [ ] Access the container of one of the sites
  * You can `exec` a Bash command shell (`/bin/bash`) to the running container.
- [ ] Create a hello world `index.html` file on the site path `/var/www`
  * You can just add `<html><body><h1>Hello world</h1></body></html>` to the file content
  * Install your favourite editor with just `apt-get update` and then `apt-get install vim` or `apt-get install nano`
  * Or write a string on a file using `tee` with `echo "content" | tee /file/path.txt`
- [ ] Visit both sites, as the volume is shared, this file should be available on both sites.
  * Site 1 url: [http://localhost:81](http://localhost:81)
  * Site 2 url: [http://localhost:82](http://localhost:82)

## 🤔 Documentation and help

These links can provide the information needed to solve the exercise

* [Docker compose file v3 reference](https://docs.docker.com/compose/compose-file/compose-file-v3/)
  * Have a look at the [volumes](https://docs.docker.com/compose/compose-file/compose-file-v3/#volumes) section
* [Overview of docker-compose CLI](https://docs.docker.com/compose/reference/overview/)
  * You can use [TLDR](https://tldr.sh/) for help: `tldr docker-compose`
* [Docker exec reference](https://docs.docker.com/engine/reference/commandline/exec/)
  * You can use [TLDR](https://tldr.sh/) for help: `tldr docker exec`
* [Tee command on Wikipedia](https://en.wikipedia.org/wiki/Tee_(command))


https://docs.docker.com/engine/reference/commandline/exec/

## 🧩 Solution

> ⚠️ Try to solve it by yourself before having a look at the solution.
>
> You can use **Documentation and help** to find a solution for the exercise

You can find the solution [in here](solution4_3.md)

## 📚 Learning goals

* Refresh basic `docker-compose` usage
* Attach a bash to a running container
* Mounted volumes understanding
