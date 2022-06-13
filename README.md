

# Microservices based Backend Application

This is a application that consists of an API gateway, a microservice for posts and a microservice for comments. All requests and responses passes through the gateway 
and accessing a microservice directly is restricted. Gateway is responsible for user authentication and routing requests to the right microservice. Each microservice 
is an independent stateless application that takes request in, do the necessary work and returns the response without knowing about the existence of a gateway or another 
microservice paralelly active. 

Gateway is a full fledge laravel application and each microservice has been built using Lumen micro-framework for blazing performance advantage. Here is the 
architecture of the application:
<img src="https://yourimageshare.com/ib/8aJdc5bSnb.png" alt="License">

## About Microservices

Microservices have become a norm in backend development and is the ultimate key to scalability of an application. All the applications who have a large user base 
on the internet are fundamentally powered by microserivces. Well, many backend developers I have come across don't know a thing about it but not anymore. In this 
repo I have made it extremely simple to build a microservice based application architecture from ground up. Any backend developer is going to enjoy rebuilding 
it as much as I did.

## Steps to Rebuild

1. Clone the repository by running the following command
```sh
git clone https://github.com/ismail17719/Rhanra.git
```
2. Open the terminal and go to the project root directory
3. Run the composer command to install all dependencies
```sh
composer install
```
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

6. Run the following command to generate a unique for the application
```sh
php artisan key:generate
```
7.  Next we need to build the database. In order to do that run the following command in terminal. Let the process complete
```sh
php artisan migrate --seed
```
8. We also need to build the project resources. To do that you should to have Nodejs installed

For signup:
```sh
curl --location --request POST 'http://yourdomain.com/project-directory/public/api/signup' \
--header 'Accept: application/json' \
--form 'name="YOUR NAME"' \
--form 'email="youremail@domain.com"' \
--form 'password="YOUR PASSWORD"' \
--form 'password_confirmation="YOUR PASSWORD"'
```
For login:
```sh
curl --location --request POST 'http://yourdomain.com/project-directory/public/api/login' \
--header 'Accept: application/json' \
--form 'email="youremail@domain.com"' \
--form 'password="YOUR DOMAIN"'
```
9. You should get correct JSON responses for all requests

 :boom: :boom: :boom:
