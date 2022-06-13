

# Microservices based Backend Application

This is a application that consists of an API gateway, a microservice for posts and a microservice for comments. All requests and responses passes through the gateway 
and accessing a microservice directly is restricted. Gateway is responsible for user authentication and routing requests to the right microservice. Each microservice 
is an independent stateless application that takes request in, do the necessary work and returns the response without knowing about the existence of a gateway or another 
microservice paralelly active. 

Gateway is a full fledge laravel application and each microservice has been built using Lumen micro-framework for blazing performance advantage. Gateway is using Laravel's Passport for Oauth 2 token based authentication. Here is the 
architecture of the application:
<img src="https://yourimageshare.com/ib/8aJdc5bSnb.png" alt="Application architecture">

## About Microservices

Microservices have become a norm in backend development and is the ultimate key to scalability of an application. All the applications who have a large user base 
on the internet are fundamentally powered by microserivces. Well, many backend developers I have come across don't know a thing about it but not anymore. In this 
repo I have made it extremely simple to build a microservice based application architecture from ground up. Any backend developer is going to enjoy rebuilding 
it as much as I did.

## Steps to Rebuild

First of all clone the whole repository on your machine by running the following command
```sh
git clone https://github.com/ismail17719/apigateway-based-microservices-in-laravel-and-lumen.git
```
### API Gateway
To setup the gateway follow the steps below.
1. Open the terminal and go to the Gateway directory
2. Run the composer command to install all dependencies
```sh
composer install
```
3. Open .env.example and save it as .env file in the same root directory
4. Open .env file and change the following database details
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YOURDATABASE
DB_USERNAME=USERNAME
DB_PASSWORD=PASSWORD
```

5. Run the following command to generate a unique key for the application
```sh
php artisan key:generate
```
6.  Next we need to build the database. In order to do that run the following command in terminal. Let the process complete
```sh
php artisan migrate --seed
```
7. To setup passport run the following command to create encryption keys and create a password grant client. Copy the later and paste somewhere safe. We gonna need it later on. The rest is done for you.

```sh
php artisan passport:install
```

8. Create a virtual host for your gateway if you are working on your local machine or a subdomain if you are working on a live server.
9. Open Gateway's .env file and add the following lines. We need this for microservice authentication.

```sh

POST_SERVICE_BASE_URL=http://yourserveraddressforpostsservice.com
POST_SERVICE_SECRET=base64:KDi8mhkvmjYSoA1xQadOSiX00xyRr331vGcQtN+KwzE=

COMMENT_SERVICE_BASE_URL=http://yourserveraddressforcommentsservice.com
COMMENT_SERVICE_SECRET=base64:PiBDvD+PquYM6uP1oEAKBcLBZsHGxDxnRuMexRIj6Qg=
```
Now we need to setup each microservice separately.

### Posts Microservice
To setup this microservice follow the steps below.
1. Open the terminal and go to the post microservice directory
2. Run the composer command to install all dependencies
```sh
composer install
```
3. Go to your MySQL server and create a separate database for posts microservice.
4. Open .env.example and save it as .env file in the same root directory
5. Open .env file and change the following database details
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YOURDATABASE
DB_USERNAME=USERNAME
DB_PASSWORD=PASSWORD
```


6.  Next we need to build the database. In order to do that run the following command in terminal. Let the process complete
```sh
php artisan migrate --seed
```
7. Create a virtual host for your post microservice if you are working on your local machine or a subdomain if you are working on a live server. Make sure you add this to the gateway's .env file.
8. Open post microservice's .env file and add the following lines. We need this for authenticating a request.

```sh

ACCEPTED_SECRETS=base64:KDi8mhkvmjYSoA1xQadOSiX00xyRr331vGcQtN+KwzE=

```

### Comments Microservice
To setup this microservice follow the steps below.
1. Open the terminal and go to the comments microservice directory
2. Run the composer command to install all dependencies
```sh
composer install
```
3. Go to your MySQL server and create a separate database for comments microservice.
4. Open .env.example and save it as .env file in the same root directory
5. Open .env file and change the following database details
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YOURDATABASE
DB_USERNAME=USERNAME
DB_PASSWORD=PASSWORD
```


6.  Next we need to build the database. In order to do that run the following command in the terminal. Let the process complete
```sh
php artisan migrate --seed
```
7. Create a virtual host for your post microservice if you are working on your local machine or a subdomain if you are working on a live server. Make sure you add this to the gateway's .env file.
8. Open post microservice's .env file and add the following lines. We need this for authenticating a request.

```sh

ACCEPTED_SECRETS=base64:PiBDvD+PquYM6uP1oEAKBcLBZsHGxDxnRuMexRIj6Qg=

```
## Requests

All API endpoints are protected by Passport on the gateway. To access an endpoint and get a response you first need to get an access token. Get your favourite REST client and get to work. Needs help. You can find a sample of requests/responses in Postman file in the root directory of this project. 

Happy microservicing :sparkling_heart:

 :boom: :boom: :boom:
