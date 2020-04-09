Laravel 7 Example 

UserManual :

1. composer install
2. copy .env.example to .env
3. Adjust your database name on .env file
4. run php artisan migrate --seed 
   or run php artisan migrate:fresh --seed if you want to reset database
5. php artisan serve, open http://localhost:8000 on your browser