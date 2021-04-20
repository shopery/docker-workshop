> [⬅️ Index](../README.md) / [▶️ Exercise 4.4](exercise4_4.md)
# 🧩 Exercise 4.4 solution - Docker compose with a multiple containers, volumes, networks 💽

## ℹ️ Solution

### 1️⃣ Fill the [docker-compose.yml](files/docker-compose.yml) file to raise the app

Have a look at [solution/docker-compose.yml](solution/docker-compose.yml)

### 2️⃣ Build an image from [Dockerfile](files/Dockerfile) and store it as `exercise4_4-php:latest`

```shell
cd files
docker build -f Dockerfile ./ -t exercise4_4-php:latest
```

### 3️⃣ Use the `docker-compose` binary to start the app from the `docker-compose.yml` file on detached mode

```shell
docker-compose up -d
```

### 4️⃣ Add `ping` to the Dockerfile package installation

To do that you must just add the `iputils-ping` package on the packages installation

```shell
# Install Debian dependences
RUN apt-get update \
    && apt-get install -y \
        libicu-dev \
        msmtp \
        iputils-ping \
    && apt-get clean all \
;
```

The `\` are used to build multi-line commands

### 5️⃣ Rebuild the php image and rerun the app

```shell
docker build -f Dockerfile ./ -t exercise4_4-php:latest
docker-compose up -d
```

### 6️⃣ Check all the properties we have configured on the docker compose to see how they affect to the containers

#### ▶️ Check containers network

To ping from one container to another you'll need ping, this binary may not be installed on some containers. To install
it you can execute the following steps:

```shell
apt-get update
apt-get install iputils-ping
```

We connect to the nginx container to try to connect to the mail container (No network between them)
```shell
docker exec -it exercise4_4_nginx /bin/bash
ping mail
```

You'll get the response `ping: mail: Name or service not known` as the image does not know what's the host `mail`

We connect to the php container to try to connect to the mail container (Network enabled)
```shell
docker exec -it exercise4_4_php /bin/bash
ping mail
```

You can stop the execution by `ctrl+c`

In this case the ping will work and you'll get a response similar to this:

```shell
PING mail (172.25.0.2) 56(84) bytes of data.
64 bytes from exercise4_4_mail.solution_mail (172.25.0.2): icmp_seq=1 ttl=64 time=0.072 ms
64 bytes from exercise4_4_mail.solution_mail (172.25.0.2): icmp_seq=2 ttl=64 time=0.374 ms
^C
--- mail ping statistics ---
2 packets transmitted, 2 received, 0% packet loss, time 5ms
rtt min/avg/max/mdev = 0.072/0.223/0.374/0.151 ms
```

#### ▶️ Validate that the host has been added to the php app

On the php container:

```shell
cat /etc/hosts
```

You will see the added host:

```shell
...
172.17.0.1	host.docker.internal
...
```

#### ▶️ Check the env variables on the docker container

```shell
printenv
```

You'll see the vars from the `.env` file and the manually set

```shell
...
TESTING_VAR2="Ho ho ho"
TESTING_VAR=Shopery
HELLO_WORLD=Hello world
...
```

You can check for an specific env var with:

```shell
printenv TESTING_VAR
```

Or filter the vars with `grep`

```shell
printenv | grep TESTING
```

The grep command will filter the printenv output and you'll get something similar to

```shell
TESTING_VAR2="Ho ho ho"
TESTING_VAR=Shopery
```
