> [⬅️ Index](../README.md)
# ▶️ Exercise 5.1 - Basics of makefile 🎛

## ℹ️ Introduction

Now it's time to learn how Makefiles work. We use Makefiles on our daily basis to interact with our orchestration layer
(Docker compose) creating custom development commands to make our development easier.

Makefiles were originally created to build binaries, they contain binary build instructions. Similar to a Dockerfile but
for binaries. We use them to group application instructions and ease launching them in bulk.

On our projects you'll find the Makefiles on the root folder, most of them are documented on the project `README.md`
file and probably you'll see an entry point `Makefile` and other makefiles (`mode.Makefile`) to customize behavior on
each running mode.

On this exercise we'll go over the Makefiles structure and how they internally work.

## 👩🏻‍💻 Exercise

On this exercise you should:

- [ ] Create a target to `echo` a Hello world and execute it
- [ ] Create a target to run a steam locomotive 🚂
  * There's an image that could help you with that, have a look at [m120/sl](https://hub.docker.com/r/m120/sl) on
    Dockerhub
- [ ] Create a helper called `FUNBOX` to run `wernight/funbox` with flags `--rm -it`
- [ ] Create a target called `nyancat` that uses the `FUNBOX` helper to run the image adding `nyancat` as final
  parameter and run it
- [ ] Create more targets that use the `FUNBOX` helper adding as final parameter `asciiquarium`, `cmatrix` and `aafire`
  and run them
- [ ] Create a variable called `MAKE_FILE_TEST` with default value `hello`
- [ ] Create a target that calls `make` adding the argument `-f` using the `MAKE_FILE_TEST` to build a filename like
  `hello.Makefile` and calls target text on it
  * You can use a custom Makefile name with `-f` flag to use non-standard makefile with `make -f makefilename target`
- [ ] Execute the text target again but defining the non default value `bye` for the `MAKE_FILE_TEST` var
  * You can add env vars to a process by just adding them before the command `VAR=VALUE command`
- [ ] Have a look at `hello.Makefile` and `bye.Makefile` files to understand what's happening when we change this var
  value
- [ ] List all the environment vars present on your current environment
- [ ] Set a `MAKE_FILE_TEST` value on your environment variables with value `bye` and run the command with no extra
  variables
  * You can use `export` to do it
- [ ] List all the environment vars present on your current environment and search for this `MAKE_FILE_TEST` var
  * Remember that you can use a pipe (`|`) and `grep` to filter the results this way `command | grep filter`


## 🤔 Documentation and help

These links can provide the information needed to solve the exercise

* [Docker SL (Steam Locomotive) on Docker Hub](https://hub.docker.com/r/m120/sl)
* [Docker Funbox on Docker Hub](https://hub.docker.com/r/wernight/funbox)
* [Makefile tutorial](https://makefiletutorial.com/)
* [Bash Environment Variables Tutorial](https://linuxhint.com/bash-environment-variables/)

## 🧩 Solution

> ⚠️ Try to solve it by yourself before having a look at the solution.
>
> You can use **Documentation and help** to find a solution for the exercise

You can find the solution [in here](solution5_1.md)

## 📚 Learning goals

* Basic Makefiles usage
* Makefiles variables usage  
* Makefiles helpers (Using variables) usage
* Make flag to use custom makefile name
* How we use makefile hierarchy
* Basic env vars understanding
