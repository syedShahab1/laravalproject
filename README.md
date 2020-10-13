# Laraval Assignment
## Discription:
In this project, you can do login, signup, Change password, forget password, 
change user name, change self discription and also update your profile picture (on update file also deleted from server)


## Pre requisite:
For forgetting password/reset password, if you are not register on https://mailtrap.io/ register your self on
```bash
https://mailtrap.io/
```
Go to inbox copy username and paste on MAIL_USERNAME in (.env) file, similarly for for password copy password and paste on MAIL_PASSWORD in (.env) file.

## Usage:
- Clone this project from Github.
- Start The web server and install the given (.sql) file in DB name as (laravel).
- you can also migrate the tables if you dont want to import the given (.sql) file. The command to migrate the DB TABLES is 
```bash
php artisan migrate
```
- If you change the DB name then Update that name in (.env) file. 
- if your web server have any username password then update that in (.env) file aswell.
- Open GitBash/CMD in the project directory and hit 
```bash
php artisan serve
```
- go to web browser and type URL:
```bash
http://127.0.0.1:8000/
```
- Now the project is in running state.

============================================================
