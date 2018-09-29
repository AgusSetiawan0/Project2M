Laravel 5.6
line yg diubah

	0. route : web.php
		line 33
		line 37
		middleware auth (20) dan middleware admin (25)
		-> middleware admin line 26, 27

	1. 2018_08_27_151543_create_users_table.php
		
		table user
		tambahan : phone, saldo, role, registrasi_status, registrasi_token

	2. User.php
		* nambahin fillable : phone, register_token
		* bikin fungsi admin -> isAdmin() ->line 35 -> buat login admin lewat admin middleware

	3. LoginController.php : line 54 -> login with phone -> bikin lagi dokumentasinya coeg cari sumbernya

	4. RegisterController.php : line 5, line 12, line 11, line 59, line 75, line 78, line 80, line 85-89

	5. bikin model mail -> /Mail/KonfirmasiEmail.php


	multi role 

	5,5. AdminController

	6. adminMiddleware.php
	7. Kernel.php line 62

	view

	8. copy aja semuanya


Pindahin ke laravel 5.7

*auth*

auth normal

php artisan make:auth

	.env
	database create_user_table tambahin phone
	register.blade.php tambahin input phone

	AppServiceProvider.php line 6 , line 17
php artisan migrate:fresh

User.php tambahin fillable 'phone'

RegisterController.php
	fillable Phone : line 55, line 71

memakai sistem verifikasi email
https://laravel.com/docs/5.7/verification

custom HomeController.php line 16

*multi auth*

Database -> tambahan field role

route -> web.php line 20

File

AdminController.php -> view admin -> adminDashboard()
admin.blade.php
adminMiddleware.php -> request jika user bukan admin | user:guest -> abort(403)
User.php line 31 -> function isAdmin()
Kernel.php line 32 -> daftar middleware

Next -> CRUD Project