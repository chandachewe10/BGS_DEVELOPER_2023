<h1 align="center">ToDo-List</h1>

<p align="center">
A simple to-do list web application using PHP Laravel
</p>


## Requirements

- PHP >= 8.1

## Installation

Clone this repository or copy the following link `https://github.com/chandachewe10/BGS_DEVELOPER_2023.git` and clone the repo using GitBash:

```bash
git clone https://github.com/chandachewe10/BGS_DEVELOPER_2023.git
```

Navigate to the root of your cloned project, open your command Line Terminal `cmd` and perform the following actions:

> **Important**: `composer update`
> `copy .env.example .env`
>  **Important**: Navigate to `.env` file, write your Database name, database username, database password on `DB_DATABASE,DB_USERNAME` and `DB_PASSWORD` respectively. Next migrate database tables as follows:    

```php
php artisan migrate
```

Finally generate the application key as:

```bash
php artisan key:generate
```

## Usage

Am assuming you have xampp installed in your local machine and you are using `PHP 8.1` or newer. You can start the application as

```php
php artisan serve --port=8080

> **Note**:
> - You can use any number as port e.g 1010 Etc.
 


```

