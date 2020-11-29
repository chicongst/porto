# Laravel Porto Generator

Easy to make Action and Taks with Porto structure.

## Install

```shell
composer require chicongst/porto
```

### Config

You may want to save the root of your project folder out of the app and add another namespace, for example

```php
    'namespace'=> 'App\\Containers\\',
    'generator'=>[
        'stub' => app_path('stubs/action.stub')
    ]
```

#### Commands

To generate everything you need, run this command:

```terminal
php artisan porto:action Service/ActionName
php artisan porto:task Service/TaskName
```
#### Publish Configuration

```shell
php artisan vendor:publish --provider="Chicongst\Porto\ServiceProvider"
```
