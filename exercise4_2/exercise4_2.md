> [⬅️ Index](../README.md)
# ▶️ Exercise 4.2 - Docker compose with a multiple connected containers 🔌

## ℹ️ Introduction

On this exercise we'll use Docker compose to start an application that uses multiple containers.

Besides that, on this exercise we'll directly use built Docker images instead of using the Dockerfiles as source to
start the containers.

On the first part we'll raise a PHP application that contains two containers. The first one is a Nginx web server and
the second one is a PHP-fpm able to run php files. With this we'll have a working website with PHP.

On the second part we'll add MySQL to the stack to allow the site to connect to the database to store data.

## 👩🏻‍💻 Exercise

On this exercise you should:

- [ ] Fill the [docker-compose.basic.yml](files/docker-compose.basic.yml) file to raise a basic site (No MySQL yet)
- [ ] Use the `docker-compose` binary to start the container
    * Keep in mind that the docker compose file does not have the default name
- [ ] Access [http://localhost](http://localhost) to see the site
    * Only the homepage will work, the other pages will fail as there's no MySQL database yet
- [ ] Stop the containers
- [ ] Fill the [docker-compose.mysql.yml](files/docker-compose.mysql.yml) file to raise a site with MySQL
- [ ] Use the `docker-compose` binary to start the container
    * Keep in mind that the docker compose file does not have the default name
- [ ] Access [http://localhost](http://localhost) to see the site
    * Now all pages should work taking advantage of the MySQL database

## 🤔 Documentation and help

These links can provide the information needed to solve the exercise

* [XXXXX](https://shopery.com)

## 🧩 Solution

> ⚠️ Try to solve it by yourself before having a look at the solution.
>
> You can use **Documentation and help** to find a solution for the exercise

You can find the solution [in here](solution4_2.md)

## 📚 Learning goals

* XXXXX