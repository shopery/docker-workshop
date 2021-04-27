> [⬅️ Index](../README.md) / [▶️ Exercise 5.1](exercise5_1.md)
# 🧩 Exercise 5.1 solution - Basics of makefile 🎛

## ℹ️ Solution

### 1️⃣ Makefile solution

You can find the solution at [solution/Makefile](solution/Makefile)

### 2️⃣ Execute make targets

Just run `make` and the target name

```shell
make hello-world
```

### 3️⃣ List all environment vars

You can print all environment vars by just executing

```shell
printenv
```

You can check the value for a specific var adding the var name as a parameter

```shell
printenv PATH
printenv MAKE_FILE_TEST
``` 

You can also filter one or some environment vars using `grep`

For example, to search all environment vars with `co` on the name or value execute:

```shell
printenv | grep co
``` 

### 4️⃣ Set an environment var

You can set an environment var by executing

```shell
export TEST_VAR="Hello world"
``` 

You can check that the var has been defined with:

```shell
printenv
``` 

Or just check for this variable value:

```shell
printenv TEST_VAR
``` 
