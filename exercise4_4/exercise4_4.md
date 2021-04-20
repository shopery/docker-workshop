> [⬅️ Index](../README.md)
# ▶️ Exercise 4.4 - Docker compose with a multiple containers, volumes, networks 💽

## ℹ️ Introduction

Until now, we have already worked with some Docker Compose properties but there are many more. Let's recap some already
used and some others that we'll see on this last Docker compose exercise that we use on our daily basis.

Already used properties:
* `build`: Select a Dockerfile to build an image and start the container from it
* `image`: Selects an image to start the container from it
* `container_name`: Set a name for the container
* `volumes`: Attach a volume or a bind mount to the container
* `ports`: Configure the exposure of one or multiple container ports

Not seen properties:
* `networking`: Configures the container networks (By default all containers are attached to a default network)
* `environment`: Set environment vars for the container manually
* `env_file`: Set an environment file to set all its environment vars on the container
* `depends_on`: Set container dependencies, the dependent container won't run until it's dependency has already run
* `extra_hosts`: Adds extra hosts on the container `/etc/hosts`
* `command`: Overwrites the container CMD with new one

And there are much more 🙃, you can have a look at the
[Docker compose file v3 reference](https://docs.docker.com/compose/compose-file/compose-file-v3/)

On this exercise we'll create a complex Docker compose file with most of these properties to see them in action.

### About `links` property

You can also find `links` property on your project dockerfiles. This is a deprecated property which was equivalent to
`depends_on` and `networking` dependency. From the Docker compose documentation:

> Before the Docker network feature, you could use the Docker link feature to allow containers to discover each other.
> With the introduction of Docker networks, containers can be discovered by its name automatically.

## 👩🏻‍💻 Exercise

On this exercise you should:

- [ ] Fill the [docker-compose.yml](files/docker-compose.yml) file to raise the app
- [ ] Build an image from [Dockerfile](files/Dockerfile) and store it as `exercise4_4-php:latest`
- [ ] Use the `docker-compose` binary to start the app from the `docker-compose.yml` file on detached mode
- [ ] Visit the site and interact with it [http://localhost](http://localhost). You should be able to:
  * Navigate to the site thanks to Nginx
  * Save and retrieve quotes thanks to MySQL database
  * Send it by email and view the emails on an inbox thanks to mailhog
- [ ] Add `ping` to the Dockerfile package installation
  * Ping comes on the debian package `iputils-ping`
- [ ] Rebuild the image from [Dockerfile](files/Dockerfile) and store it as `exercise4_4-php:latest`
- [ ] Rerun the app using the `docker-compose` binary
- [ ] Check all the properties we have configured on the docker compose to see how they affect to the containers
  - [ ] Confirm that dependencies are fulfilled when you start the app and some containers wait for another to run
  - [ ] Check that you can connect between two containers that do not share network by attaching to one of them and
    trying to ping another container. Remember that the index on the `docker-compose.yml` is the host of the container
  - [ ] On the php container check the `/etc/hosts` to confirm that there's a `host.docker.internal` host
  - [ ] On the php container check the current environment vars to see that the values for the environment set on the
    `.env` file and on the `environment` property of the container

## 🤔 Documentation and help

These links can provide the information needed to solve the exercise `docker-compose.yml` file

* [Docker compose file v3 reference](https://docs.docker.com/compose/compose-file/compose-file-v3/)
* [Docker build reference](https://docs.docker.com/engine/reference/commandline/build/)
  * You can use [TLDR](https://tldr.sh/) for help: `tldr docker build`
* [Overview of docker-compose CLI](https://docs.docker.com/compose/reference/overview/)
  * You can use [TLDR](https://tldr.sh/) for help: `tldr docker-compose`
* [Docker exec reference](https://docs.docker.com/engine/reference/commandline/exec/)
  * You can use [TLDR](https://tldr.sh/) for help: `tldr docker exec`
* [Linux and Unix ping command tutorial with examples](https://shapeshed.com/unix-ping/)
  * You can use [TLDR](https://tldr.sh/) for help: `tldr ping`
* [Linux List All Environment Variables Command](https://www.cyberciti.biz/faq/linux-list-all-environment-variables-env-command/)
  * You can use [TLDR](https://tldr.sh/) for help: `tldr printenv`

## 🧩 Solution

> ⚠️ Try to solve it by yourself before having a look at the solution.
>
> You can use **Documentation and help** to find a solution for the exercise

You can find the solution [in here](solution4_4.md)

## 📚 Learning goals

* Advanced docker compose properties
* Interact with docker compose containers
* Basic Docker networking understanding
* Basic Env vars understanding
