# カスタムログ
## サンプルの確認方法
1. gitから取得
    ```
    git clone https://github.com/seiyu-nico/laravel-custom-log.git
    ```
1. セットアップ
    ```
    # cd laravel-custom-log 
    # composer install 
    # cp .env.example .env 
    # php artisan key:generate
    ```
1. 適宜自分の環境に必要な項目を修正
1. アクセス
   - /storage/logs/にそれぞれカスタムログが作成されます。
