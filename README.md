
# Auth
Firsrt of all you need to clone the project from this repository.
```bash
git clone https://github.com/hamid1ganeh/auth.git
```
Now please copy env.example file that is located in the root of you'r project and past it in the same path and rename it to .env file.

After taht in order to download docker images from docker hub please run the following command:
```bash
docker-compose build app
```
and then run:
```bash
docker-compose up -d
```
```bash
docker-compose exec app composer update
```
```bash
docker-compose exec app php artisan key:generate
```
It's time to data entery in database  by running the following command:
```bash
docker-compose exec app php artisan migrate --seed
```

Now you can execute project on [localhost:1371](localhost:1371)

## Technologies used

- php 8.2

- [laravel 11](https://laravel.com/docs/11.x)

## Authors

- [@Hamid1ganeh2st](https://github.com/hamid1ganeh)
