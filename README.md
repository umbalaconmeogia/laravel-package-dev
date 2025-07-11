# laravel-package-dev
My application to test my Laravel packages

## Process of developing a Laravel package

* Create package code
  * Create new repository on GitHub.
  * Git pull the repository to local, in *packages* folder.
  * Create a new Laravel package in src folder.
    TODO: command to create new laravel package.
* Add the package into laravel-package-dev application's composer.json.
* Test the package.
* Publish the package.

### To push a page to packagis

```shell
git tag v1.0.0
git push origin v1.0.0
```

### Test the package

```shell
composer install
php vendor/bin/phpunit
```