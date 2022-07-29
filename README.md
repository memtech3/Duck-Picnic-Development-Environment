# Duck-Picnic-Development-Environment
Development environment for the Duck Picnic Grav theme

# What Is This

This repository contains a full grav install with sample content to help with developing the duck-picnic theme

# How To Use

## Grav Admin Credentials
Username: admin <br>
Password: Admin1234

## Clone The Repositories
Clone this repository and the duck-picnic repository 

## Compiling SASS (.scss files)

This theme uses SASS for css. Install npm either through nodejs.org or through your favorite package manager. To compile the .scss files, 
run ```npm sass-dev``` in your ```duck-picnic``` folder.

## Running Grav CMS With a Local Dev Server

### Create A Symbolic Link (Symlink)
Symlink the duck-picnic repository folder into the ```/user/themes``` folder in your Duck-Picnic-Development-Environment folder (the root folder of
the git repository). 

#### Windows
On Windows, the command for creating a symlink to a folder is ```mklink /D <path of the link to be created> <path to the folder to be linked>```. 
For this project, the syntax would probably look like ```mklink /D Duck-Picnic-Development-Environment\user\themes duck-picnic``` if you opened
```Command Prompt``` in your ```Github``` folder

#### Linux
On Linux, the command for creating a symlink to a folder is ```ln -s <path to the file/folder to be linked> <path of the link to be created>```. 
For this project, the syntax would probably look like ```ln -s ~Documents/GitHub/duck-picnic Duck-Picnic-Development-Environment/user/themes``` if your 
```terminal session``` is in your ```Github``` folder

### Setting Up/Running The Dev Server

### Windows
```Laragon``` has proven to be a simple yet effective option to run Grav CMS. Download it at [laragon.org](https://laragon.org/). Point laragon to your 
Duck-Picnic-Development-Environment.

### Linux
The development server built in to PHP has worked well for me on Ubuntu. In order to run grav you need to install ```php, php-curl, php-ctype, php-dom,
php-gd, php-json, php mbstring, php-opnssl, php-session, php-simplexml, php-xml, php-zip```. Then you can run ```php -S localhost:8080 system/router.php``` in your ```Duck-Picnic-Development-Environment``` folder
to start the development server.

## Running Grav CMS With Docker

A docker image with grav exists at https://hub.docker.com/r/linuxserver/grav. Create a docker-compose.yml in the directory of your choosing (the directory that docker will run and create its files in, probably not in this repo's folder) with the following:
```
---
version: "2.1"
services:
  grav:
    image: lscr.io/linuxserver/grav:latest
    container_name: grav
    environment:
      - PUID=1000
      - PGID=1000
      - TZ=America/New_York
    volumes:
      - ../GitHub/Duck-Picnic-Development-Environment:/app/grav-admin
      - ../GitHub/duck-picnic:/app/grav-admin/user/themes/duck-picnic
    ports:
      - 8080:80
    restart: unless-stopped
```
Replace '''../GitHub/Duck-Picnic-Development-Environment''' '''../GitHub/duck-picnic:/app/grav-admin/user/themes/duck-picnic''' with the paths to your
```Duck-Picnic-Development-Environment``` and ```duck-picnic``` repositories. To start the container, run ```docker-compose up```.
