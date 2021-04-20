> [⬅️ Index](../README.md) / [▶️ Exercise 4.3](exercise4_3.md)
# 🧩 Exercise 4.3 solution - Docker compose with a multiple containers sharing a volume 💾

## ℹ️ Solution

### 1️⃣ Fill the [docker-compose.yml](files/docker-compose.yml) file to raise the app sites

You can find the solution at [solution/docker-compose.yml](solution/docker-compose.yml)

### 2️⃣ Use the `docker-compose` binary to start the app from the `docker-compose.yml` file on detached mode

```shell
docker-compose up -d
```

### 3️⃣ Create a hello world `index.html` file on the site path `/var/www`

We can do this in many ways, for example

#### ▶️ Vim

Install vim

```shell
apt-get install vim
```

Edit the file, remember to use `i` to edit the file and `:wq` to save and quit

```shell
vim /var/www/index.html
```

#### ▶️ Nano

Install nano

```shell
apt-get install nano
```

Edit the file, remember to use `ctrl + o` to save and `ctrl + x` to exit

#### ▶️ Tee

Just echo the file content and pipe (`|`) with `tee` and the file path

```shell
echo "<html><body><h1>Hello world</h1></body></html>" | tee /var/www/index.html
```
