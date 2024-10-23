Laravel CRUD Product
1. composer create-project laravel/laravel (nama)
2. cd / (nama)
3. - instalasi tailwind =
   - npm install -D tailwindcss postcss autoprefixer
   - npm tailwindcss init -p
   - konfigurasi tailwind.config.js
   - tambahkan @tailwind
   - npm.run dev
4. Breeze Auth =
   - composer require laravel/breeze --dev
   - php artisan breeze:install
   - php artisan migrate
   - npm run dev
   - localhost:8000/register 
5. Buat CRUD (nama) & (nama) = (nama adalah contoh dari dua data crud)!!
   - Tabel (nama) name_prod, image,desc_prod, price, stock, id_(nama)
   - Tabel (nama) (name_cat, desc_cat)
   - Buat Model
     php artisan make:model (nama_1) -m
     php artisan make:model (nama_2) -m
     table create (nama_2) ganti nomer biar di atas (nama_2)
6. Buat Controller =
