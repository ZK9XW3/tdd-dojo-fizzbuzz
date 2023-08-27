# Dockerized stack for Symfony project

#### Stack : php-apache2 mysql pma

## Requirements :
- Ubuntu 20.04 or higher
- symfony cli AND/OR composer on your local machine
- docker and docker-compose (optionnal: docker desktop)
- an IDE (phpStorm, Vscode or else)
- git (optionnal but better)

## How to set a new project
- `git clone` this project
- rename the folder you cloned with the name of your project (optionnal it's only for you to best organize your folders/project) 
- in `docker/apache/vhosts.conf` Set env variables that will set your vhosts.conf file
- duplicate `.env.template` to make `.env` file and set your environment variables (this variables are used in the `docker-compose.yml`) (.env is by default gitignored)
- install Symfony 
    - with Symfony cli `symfony new your_project_name --version="6.3"` (choose the version you want just beware it has to be compatible with your php version. cf Dockerfile)
    -  with composer `composer create-project symfony/skeleton:"6.3.*" your_project_name`
    - if you plan to run a full site/webapp symfony project you might need to install node and npm
- run `docker-compose up --build` (so you can see errors while images are building)
- Check everything went fine :
    - go to localhost:(your_port) (it is the port you defined in the .env file in the variable PHP_APACHE_HOST_PORT)
    - you should see your symfony welcome page
    - go to localhost:(your_pma_port) (it is the port you defined in the .env file in the variable PMA_HOST_PORT)
    - you should see your php my admin home page (you can log with root and password is the one you set in the .env file)
- At this point your containers should be running fine. You're ready to go !

## How to set HTTPS in your local env + traefik.me
- Incoming...
