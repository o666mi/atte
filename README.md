# Atte(アット)
勤怠管理システム

##　作成した目的
人事評価のため

## アプリケーションURL
http://localhost/

## 機能一覧
会員登録
ログイン
ログアウト
勤務開始
勤務終了
休憩開始
休憩終了
日付別勤怠情報取得
ページネーション

## 使用技術(実行環境)
・PHP8.3.0
・Laravel8.83.8
・MySQL8.0.26

## テーブル設計
・attendancesテーブル
id
user_id
date
work_start
work_end
created_at
updated_at

・restsテーブル
id
attendance_id
rest_start
rest_end
created_at
updated_at

・usersテーブル
id
name
email
password
created_at
updated_at

## ER図
![alt text](<スクリーンショット (87).png>)

# 環境構築
1.docker-compose exec php bash
2.composer install
3.「.env.example」ファイルを 「.env」ファイルに命名を変更。または、新しく.envファイルを作成
4..envに以下の環境変数を追加
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass
5.アプリケーションキーの作成
php artisan key:generate
6.マイグレーションの実行
php artisan migrate
7.シーディングの実行
php artisan db:seed

