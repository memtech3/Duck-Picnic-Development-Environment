# Duck-Picnic-Development-Environment
Development environment for the Duck Picnic Grav theme

# What Is This

This repository contains a full grav install with sample content to help with developing the duck-picnic theme

# How To Use

## Credentials
Username: admin <br>
Password: Admin1234

## Clone The Repositories
Clone this repository and the duck-picnic repository 

## Create A Symbolic Link (Symlink)
Symlink the duck-picnic repository folder into the ```/user/themes``` folder in your Duck-Picnic-Development-Environment folder (the root folder of
the git repository). 

### Windows
On Windows, the command for creating a symlink to a folder is ```mklink /D <path of the link to be created> <path to the folder to be linked>```. 
For this project, the syntax would probably look like ```mklink /D Duck-Picnic-Development-Environment\user\themes duck-picnic``` if you opened
```Command Prompt``` in your ```Github``` folder

### Linux
On Linux, the command for creating a symlink to a folder is ```ln -s <path to the file/folder to be linked> <path of the link to be created>```. 
For this project, the syntax would probably look like ```ln -s duck-picnic Duck-Picnic-Development-Environment/user/themes``` if your 
```terminal session``` is in your ```Github``` folder

## Compiling SASS (.scss files)

This theme uses SASS for css. Install npm either through nodejs.org or through your favorite package manager. To compile the .scss files, 
run ```npm sass-dev``` in your ```duck-picnic``` folder.

## Running Grav CMS

### Windows
```Laragon``` has proven to be a simple yet effective option to run Grav CMS. Download it at [laragon.org](https://laragon.org/). Point laragon to your 
Duck-Picnic-Development-Environment.

### Linux
The development server built in to PHP has worked well for me on Ubuntu. In order to run grav you need to install ```php, php-curl, php-ctype, php-dom,
php-gd, php-json, php mbstring, php-opnssl, php-session, php-simplexml, php-xml, php-zip```. Then you can run ```php -S localhost:8080 system/router.php```
to start the development server.
