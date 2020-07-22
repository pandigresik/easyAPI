# easyAPI

## What is easyAPI?

easyAPI is skeleton REST API application and integrated with swagger to generate documentation API.
With easyAPI you can generate REST API less than 5 minutes.

## Installation & setup

- [X] clone this repository `git clone https://github.com/pandigresik/easyAPI.git` 
- [X] `cd easyAPI`
- [X] `composer install` to install dependency this application
- [X] `php spark serve` to run this application, default you can open this address http://localhost:8080 on your browser
- [X] Copy `env` to `.env` and tailor for your app, specifically the baseURL and any database settings.

## Generate REST API
- [X] `php spark api:generate`
after that, system will ask you table name will generate that REST API. We can choose one table or all, if we want generate all write `all` or write one table name exist in your database
If there is no error, system will generate for you controller, model and entity file.
- [X] Last you must add new route will display in last command.
- [X] Generate api.yaml using command `./vendor/bin/openapi -o ./public/assets/api.yaml ./app` to show API docs using swagger
- [X] Open API documentation in http://localhost:8080/swagger
