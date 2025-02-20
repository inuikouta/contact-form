# お問い合わせフォーム

## 環境構築

Dockerビルド

1. [git clone リンク](https://github.com/inuikouta/contact-form.git)
2. docker-compose up -d --build

Laravel環境構築

1. docker-compose exec php bash
2. composer install
3. .env.exampleファイルから.envを作成し、環境変数を変更
4. php artisan key:generate
5. php artisan migrate
6. php artisan db:seed

## 使用技術

- php 8.2.27
- Laravel 8.83.29
- mysql 8.0.26

## ER図

![ER-image](https://github.com/user-attachments/assets/4251e9fd-b4b8-417f-98ec-aecb9a3e9c4b)

## URL

- 開発環境 : http://localhost/
- phpMyAdmin : http://localhost:8080

## 補足

ymlファイルの記述が、LMSの教材とは少し異なっています。

- platform: linux/amd64
- phpmyadmin: arm64v8/phpmyadmin