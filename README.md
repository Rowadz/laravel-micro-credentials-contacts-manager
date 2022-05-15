<p align="center">
   <img src="https://user-images.githubusercontent.com/38977667/168488230-683aa8c3-9b79-4ae9-a809-b79ae6af22b6.png" />
</p>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


# How to run this locally 

- install this repo on your machine (you can download is as a `.zip` file)
```bash
$ git clone https://github.com/MohammedAl-Rowad/laravel-micro-credentials-contacts-manager.git
```
- cd into it
```bash
$ cd laravel-micro-credentials-contacts-manager
```
- install the packages using [composer](https://getcomposer.org/)
> make sure you have composer isntalled locally 
```bash
$ composer install
```
- rename the `.env.example` to `.env` then
    - generate the app key `php artisan key:generate`
    - add the mysql connection variable there

- run the migrations
```bash
$ php artisan migrate
```

- run the app 
```bash
$ php artisan serve
```

now go to `localhost:8000` 🥳
