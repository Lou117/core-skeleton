# You're about to discover *Core* microframework !
`core-skeleton` repository is a very basic functional example for *Core* microframework : you can discover *Core* 
[by clicking here](https://github.com/Lou117/core).
## Installation procedure
## Creating project with [Composer](https://get-composer.org/)
*Core* is available as a package in Packagist, and *Core* skeleton as a project :
```
composer create-project lou117/core-skeleton
```
## Updating permissions
Ensure that `var/` directory is allowed for write operations:
```
cd core-skeleton
chmod -R 777 var
```
Of course, any mode will do as long as user executing PHP can write in `var/` directory.
## Setting up your web server
### PHP integrated web server (development only)
The easiest way to get a working application is to run integrated PHP webserver:
```
cd web
php -S localhost:8000
```
Open your favorite browser and navigates to `http://localhost:8000/ping`. If you see this...
```
{
    "text": "Welcome to Core framework !",
    "link": "https://github.com/lou117/core"
}
```
... then you're done and ready !
### Apache users
Make sure :
- `DocumentRoot` of your `VirtualHost` is set to `web/` directory of your newly created project ;
- `mod-rewrite` is activated ;
- `Allow` directive for your `VirtualHost` allows for `.htaccess` file interception.

`.htaccess` file in `web/` directory is ready-to-use.
### NGINX users
An NGINX configuration piece is available in `web/` directory to help you.


