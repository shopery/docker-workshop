> [⬅️ Index](../README.md)
# ▶️ Exercise 2.3 - Multiple Dockerfiles 👯

## ℹ️ Introduction

Each Dockerfile only generates a final image, even if it uses intermediate images. We can use multiple Dockerfiles to
re-use this intermediate images for other purposes. For example for CI/CD or to build multiple apps.

To do this you create a first Dockerfile to create the first image and save it with a specific tag. After that you can
build this image and save it into a Docker registry.
When this first image is generated a second Dockerfile can use this first generated image to start from it.

To fully understand why this is really useful, imagine that to run your application you need a bunch of binaries, for
example a specific version of PHP with a specific set of libraries, imagemagick to resize images or composer to download
php dependencies. You need all of this to build your app but for running your tests too... Why doing this twice? Just
create a base dockerfile and start from this point to execute your CI/CD pipeline or to build your final app.

With this you can doo all kind of stuff... Do you want to create a base image for all your JS or PHP apps? Do you want
to just avoid some steps every time?

In our case we mainly use this base image for multiple things so this image is build EVERY TIME. Be careful with that,
if you build an image from a Dockerfile that depends on a previous image it will look on your local registry or the
remote registry. Docker is not smart enough to rebuild the first image, you have to do it manually in case you want it.
On our projects we always call the build for all the images unless they are basic images from Docker Hub.

In this specific exercise we'll build a base image that just installs and configures Nginx to serve a site from
`/var/www`. After that we'll create two different sites using the first image as base.

## 👩🏻‍💻 Exercise

On this exercise you should:

- [ ] Have a look at [base.Dockerfile](files/base.Dockerfile), [app1.Dockerfile](files/app1.Dockerfile)
  and [app1.Dockerfile](files/app1.Dockerfile) to ensure that you understand them and their interdependencies
- [ ] Build an image from [base.Dockerfile](files/base.Dockerfile) and store it as `exercise2_3-nginx:latest`
- [ ] Build an image from [app1.Dockerfile](files/app1.Dockerfile) and store it as `exercise2_3-app1:latest`
- [ ] Build an image from [app1.Dockerfile](files/app1.Dockerfile) and store it as `exercise2_3-app1:latest`
- [ ] Run a container from image `exercise2_3-app1:latest` exposing `port:80` from the container into public `port:81`
- [ ] Run a container from image `exercise2_3-app2:latest` exposing `port:80` from the container into public `port:82`
- [ ] Visit [http://localhost:81](http://localhost:81) to see Site 1
- [ ] Visit [http://localhost:82](http://localhost:82) to see Site 2
- [ ] Stop all sites
- [ ] Remove the shared `exercise2_3-nginx:latest` image and run any of the sites again. Does it work? Why?
- [ ] Remove the Site 1 image `exercise2_3-app1:latest` and rebuild it again. Does it work? Why?

## 🤔 Documentation and help

These links can provide the information needed to solve the exercise

* [Dockerfile reference](https://docs.docker.com/engine/reference/builder/)
* [Docker build reference](https://docs.docker.com/engine/reference/commandline/build/)
  * You can use [TLDR](https://tldr.sh/) for help: `tldr docker build`
* [Docker run reference](https://docs.docker.com/engine/reference/run/)
  * You can use [TLDR](https://tldr.sh/) for help: `tldr docker run`

## 🧩 Solution

> ⚠️ Try to solve it by yourself before having a look at the solution.
>
> You can use **Documentation and help** to find a solution for the exercise

You can find the solution [in here](solution2_3.md)

## 📚 Learning goals

* Dockerfiles can have custom name
* Build images from other previously built images (Similar to multistep but with the possibility to reuse images)
* Run two apps at the same time without ports colliding

