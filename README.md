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

.env 修正

```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=laravel_local
DB_USERNAME=phper
DB_PASSWORD=secret
```

```
php artisan migrate

php artisan make:model 名前 -m
php artisan make:seeder 名前TableSeeder
php artisan db:seed
php artisan migrate:fresh --seed
```
