# Laravelで画面のPOSTとAjaxのPOSTで共通のFormRequest使う方法

# インストール
```
$ docker-compose up -d
$ docker-compose exec php composer install
$ docker-compose exec php cp -p .env.example .env
$ docker-compose exec php php artisan key:generate 
$ docker-compose run node npm install
$ docker-compose run node npm run dev
```

# Formを使ったPOSTのパターン
http://localhost/add

# Ajaxを使ったPOSTのパターン
http://localhost/add2