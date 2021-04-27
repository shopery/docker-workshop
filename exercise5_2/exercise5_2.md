> [⬅️ Index](../README.md)
# ▶️ Exercise 5.2 - Makefile to run docker projects 👟

## ℹ️ Introduction

On this exercise we'll go a bit deeper into Makefiles, we'll use a makefile to run multiple commands on the same target
and to execute Docker compose commands or even other make commands. This makefile will look more alike other makefiles
on our projects.

Using this makefile we'll be able to start and stop our project, reset the database or even connect to the running PHP
container.

We'll also create two working modes, one with no bind mount that uses a full project build and another one with bind
mount that will allow us to modify the files on real time.

## 👩🏻‍💻 Exercise

On this exercise you should:

- [ ] Create a `MODE` variable that will help us decide between `mount` and `build` modes. By default, will have a
  `build` value
- [ ] Create a helper to execute docker compose with the `-f` flag using the `MODE` variable to build the docker
  compose file name, with the default value should be `docker-compose.build.yml`
- [ ] Update the `start` target so it can start the app, it should execute the following commands:
    * Use `docker build` to build the Dockerfile file into a `exercise5_2-php:latest` image
    * Use the docker compose helper to start the project using `up` command on **detached mode**
- [ ] Run the `make start` command to start the project and visit [http://localhost](http://localhost) to see the
  project working
- [ ] Update the `stop` target so it uses docker compose helper to stop the project
- [ ] Run the `make stop` command to start the project
  * You can visit [http://localhost](http://localhost) to see the project has stopped working
- [ ] Start the project again and add some quotations to the database
- [ ] Run the `make reset-quotations` command to see how the database is emptied, add some more quotations
- [ ] Update the `start` target to execute a `reset-quotations` after starting the project
- [ ] Stop and start the project using make commands and confirm that the database is emptied
- [ ] Update the php-bash target to connect to the PHP container
  * Remember that you can achieve this by executing (`exec`) a bash (`/bin/bash`) on the `php` container
  * You can use `docker-compose` to execute a command on a container by its yaml name definition
- [ ] Update the php-bash target to connect to the PHP container
- [ ] Connect to the PHP container and run `php -v` to confirm that you are on the container
  * It should output PHP version 8.0
- [ ] Update some texts on the `site/index.php` file and check if the changes are seen on the site
  * Remember that we are using `build` mode
- [ ] Stop the project and start it again by setting the `MODE` var to `mount`
- [ ] Update some texts on the `site/index.php` file and check if the changes are seen on the site
    * Remember that we are using `mount` mode

## 🤔 Documentation and help

These links can provide the information needed to solve the exercise

* [Makefile tutorial](https://makefiletutorial.com/)
* [`docker-compose exec` documentation](https://docs.docker.com/compose/reference/exec/)

## 🧩 Solution

> ⚠️ Try to solve it by yourself before having a look at the solution.
>
> You can use **Documentation and help** to find a solution for the exercise

You can find the solution [in here](solution5_2.md)

## 📚 Learning goals

* Composed Makefile target (Multiple commands)
* How we use environment vars (Like mode) to change between multiple docker compose definitions
* Connect to the docker compose containers
