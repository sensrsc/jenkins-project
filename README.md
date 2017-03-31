
# kkday-b2b-api

The project is for interaction with partner apis to retrieve partner data.

  - Phase1: GetYourGuide

## Setup

### Prerequisites

  - PHP >= 5.6.4
  - Laravel >= 5.4

### Installations

    $ php composer.phar update
    # composer update

### Start Service

    $ php artisan serve
    # Laravel development server started: <http://127.0.0.1:8000>

### Testing

    $ ./vendor/phpunit/phpunit/phpunit

## FAQ

This FAQ is meant to help debug common issues during system setup. It can also be used for common instructions about the project.

### Composer Related

    $ php composer.phar install
    # installs the vendor packages according to composer.lock (or creates composer.lock if not present)

    $ php composer.phar update
    # always regenerates composer.lock and installs the lastest versions of available packages based on composer.json

    $ php composer.phar dump-auto
    # won’t download a thing. It just regenerates the list of all classes that need to be included in the project (autoload_classmap.php). Ideal for when you have a new class inside your project.

### PHP artisan

### Codeclimate

    $ codeclimate analyze app

### CI/CD
