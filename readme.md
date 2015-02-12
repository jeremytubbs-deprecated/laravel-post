# IN PROGRESS NOTES

ssh vagrant@127.0.0.1 -p 2222

workbench notes:

- publish config
php artisan config:publish --path="workbench/jeremy-tubbs/laravel-post/src/config" jeremy-tubbs/laravel-post

- run migrations
php artisan migrate --bench="jeremy-tubbs/laravel-post"

- publish package assets
php artisan asset:publish --bench="jeremy-tubbs/laravel-post"