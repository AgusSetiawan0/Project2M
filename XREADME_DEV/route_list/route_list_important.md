1. welcome page -> bisa dilihat user,admin,guest
	method : GET|HEAD
	url : /
	controller : ProjectController -> buat ngeluarin list project
	function : welcome -> view : welcome.blade.php
	middleware : 

2. admin page -> hanya bisa dilihat admin
	method : GET|HEAD
	url : /admin
	controller : AdminController
	function : adminDashboard -> return view admin.blade.php
	middleware : admin

3. konfirmasi email -> kirim register token ke mailtrap
	method : GET|HEAD
	url : /konfirmasiemail/{email}/{register_token}
	controller : RegisterController
	function : konfirmasiemail
	middleware

4. login,register


**Projects**
	controller : ProjectController

1. membuat project
	* route : /projects/create -> menampilkan form create project -> middleware : admin 
	-> view : peojects.create
	
	* route : /projects
		method : POST
		function : Store -> menstore request dari user saat membuat project

2. menampilkan project
3. edit project
4. delete project

