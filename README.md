# Core is a lightweight and pragmatic PHP microframework
*Core* is a very personal view on what a microframework should be. Designed to be ready for duty out of the box, it is
designed to do the painful parts, and let you be creative for the rest.

Discover all about *Core* in its own repository README here : https://github.com/Lou117/core.
## Install
*Core* is available as a package in Packagist: 
```
composer create-project lou117/core-skeleton
```
Ensure that `cache/` and `log/` directories are allowed for write operations:
```
cd core-skeleton
chmod -R 777 log
chmod -R 777 cache
```
Use `config/settings.php.dist` as your first configuration file:
```
cd config
cp settings.php.dist settings.php
```
Open your favorite browser and navigates to `http://[your-server-name]/ping`. If you see this...
```
{
    "text": "Welcome to Core framework !",
    "link": "https://github.com/lou117/core"
}
```
... then you're done and ready !
