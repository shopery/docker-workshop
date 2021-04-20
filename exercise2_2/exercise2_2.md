> [⬅️ Index](../README.md)
# ▶️ Exercise 2.2 - Multi-step Dockerfile 🪜

## ℹ️ Introduction

In this exercise well go deeper on the Dockerfile image generation. One of the best practise that can be harder to
understand is multi-step image generation.

This means that on a single file we generate a first image and after that we generate a second image using part of the
content build on the first one.

This can be really useful because most of the time the dependencies needed to build the app and run it are totally
different. For example for a JS app you need all the dependencies, source files, etc. But once it is built and the
static files are generated you no longer need any of them so why would you like to deploy it to your productions
servers?

This also happens with PHP apps where you need for example Composer to install dependencies, this is not really a
dependency to run the app, so you don't really need it on your production container.

For this exercise we'll use NodeJS, specifically a node "Hello world" example. On the first step we'll install the
required dependencies to build the static site files.
On the second step we'll start from a clean image and copy only the build from the first step and launch the site.

On this exercise we'll also see the difference between a normal image and an alpine or slim ones. Slim and alpine images
come with less installed packages and utilities but are much lighter so are better candidates for production images. On
the other hand, this images can require different ways to install packages. For example alpine does not come with the
debian package manager (apt-get) and uses a lighter package installer (apk).

## 👩🏻‍💻 Exercise

On this exercise you should:

- [ ] Fill [Dockerfile](files/Dockerfile) (instructions on the file)
    * The difficulty gap between the latest exercise is High, remember to read **Documentation and help** section
- [ ] Build this image as `exercise2_2:latest`
- [ ] Find your built image on your local images
  * Have a look at the image size, **more than 1Gb**!
- [ ] Change app image from Node 15.14 to Node 15.14-alpine (Lighter image) and rebuild the image
- [ ] Find your built image on your local images
    * Have a look at the new image size, **120MB with the same app**!
- [ ] Run this image exposing internal `port:5000` (Default for the App) to `port:80` (Default for HTTP)
- [ ] Visit [http://localhost](http://localhost) to see your site

## 🤔 Documentation and help

These links can provide the information needed to solve the exercise

* [Node on Docker hub](https://hub.docker.com/_/node)
* [Node 15.14 tag on Docker hub](https://hub.docker.com/_/node?tab=tags&page=1&ordering=last_updated&name=15.14)
* [Dockerfile reference](https://docs.docker.com/engine/reference/builder/)
  * You should use `FROM`, `RUN`, `WORKDIR`, `COPY` & `CMD` commands
* [Docker Multistage build Doc](https://docs.docker.com/develop/develop-images/multistage-build/)
* [Node hello world README](files/hello-world/README.md)
  * You can install dependencies running `npm install`
  * You can build the project by executing `npm run build`, project will be built on `build` folder
* [Install NPM package Globally](https://docs.npmjs.com/downloading-and-installing-packages-globally)
* [Serve NPM server documentation](https://www.npmjs.com/package/serve)
  * To start the server from a path just run `serve -s /path`
* [Docker build reference](https://docs.docker.com/engine/reference/commandline/build/)
  * You can use [TLDR](https://tldr.sh/) for help: `tldr docker build`
* [Docker run reference](https://docs.docker.com/engine/reference/run/)
  * You can use [TLDR](https://tldr.sh/) for help: `tldr docker run`
* [Alpine Linux on Wikipedia](https://en.wikipedia.org/wiki/Alpine_Linux)
* [Hello world based on React Hello World](https://www.bogotobogo.com/DevOps/Docker/Docker-React-App.php)

## 🧩 Solution

> ⚠️ Try to solve it by yourself before having a look at the solution.
>
> You can use **Documentation and help** to find a solution for the exercise

You can find the solution [in here](solution2_2.md)

## 📚 Learning goals

* Multi-step Dockerfile
* Performance using Multi-Step: Final image only contains required files
* Using alpine images for lighter output image
* Expose container ports on other ports
