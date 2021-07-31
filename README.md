Попытка выполнить тестовое - Камень, ножницы, бумага
Ссылка на формулировку тз: https://docs.google.com/document/d/1WSIlI5eqyliKBuybdt_iXenlCE5vqieRL49_rbxlbjE/edit#

Для разворачиания проекта нужно выполнить:
composer install 
cp .env.example .env
php artisan key:generate
После этих действий в файле .env заполняем данные для подключения к базе и выполняем php aerisan migrate:refresh --seed
