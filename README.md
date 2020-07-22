# easyAPI

## What is easyAPI?

easyAPI is skeleton REST API application and integrated with swagger to generate documentation API.
With easyAPI you can generate REST API less than 5 minutes.

## Installation & setup

clone this repository `git clone https://github.com/pandigresik/easyAPI.git` 
`cd easyAPI`
`composer install` to install dependency this application
`php spark serve` to run this application, default you can open this address http://localhost:8080 on your browser
Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Generate REST API
`php spark api:generate` push Enter
after that, system will ask you table name will generate that REST API. We can choose one table or all, if we want generate all write `all` or write one table name exist in your database
If there is no error, system will generate for you controller, model and entity file.
Last you must add new route will display in last command.
