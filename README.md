<!-- @format -->

# san_dock

気軽に匿名で愚痴れる掲示板サービスです。

人間の善心を害する三つのもの(「貪欲（とんよく）（＝むさぼること）」「嗔恚（しんい）（＝いかりうらむこと）」「愚痴（ぐち）（＝真理が理解できないこと）」)を指した三毒ということば
＋
船の建造、修理、係船、荷役作業などのために築造された施設を指す「ドック」

- 太陽のように明るくしたい。
  ||
  三毒(san)=

---

docker 参考
https://qiita.com/ucan-lab/items/5fc1281cd8076c8ac9f4

```
$ docker-compose build

$ docker-compose up -d

$ docker-compose exec app php -r "file_exists('.env') || copy('.env.example', '.env');"

$ docker-compose exec app composer install

$ docker-compose exec app php artisan key:generate

$ docker-compose exec app php artisan storage:link

$ docker-compose exec app chmod -R 777 storage

$ docker-compose exec app chmod -R 777 bootstrap/cache

$ docker-compose exec app php artisan config:cache

$ docker-compose exec app php artisan migrate:fresh --seed
```

```
cd backend
php artisan key:generate
php artisan config:cache
php artisan migrate:fresh
```

php artisan make:model -m

docker-compose up -d --build

クジラの中
docker-compose exec app bash

docker-compose exec app bash
php artisan migrate

Git 系

```

git status
git add .
git status
git commit -m "feat create docker db container"
git log

```

http://localhost:1002/

laravel インストール

```
 composer create-project --prefer-dist "laravel/laravel=8.*" .
 chown www-data storage/ -R

```
