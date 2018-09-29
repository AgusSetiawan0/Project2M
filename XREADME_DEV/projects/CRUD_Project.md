file yg dipake
2018_09_04_140757_create_project_table.php
Project.php
web.php
ProjectController -> 
public/project/gambar
resource/views/project (create/edit/index/single.blade.php)
storage/app/public/gambar


command: liat video tutorial membuat website kutipan bagian memasukan gambar
php artisan storage:link

pindahin ke laravel 5.7

1. bikin table projects
	2018_09_28_012719_create_projects_table.php
	**ga pake soft delete**

2. membuat relasi
	project->user = one to one
		1 project piunya 1 user yg ngebuatnya
		-> Project.php -> line 19

	user-> project = one to many
		1 user bisa ngebuat banyak project
		-> User.php -> line 19

*route, controller , and view*

php artisan make:controller ProjectController --resource

List fungsi ProjectController.php
	

* index() -> menampilkan list project yang sudah dibuat -> halaman index
	route -> /projects
	view -> 

* create() -> menuju ke form create
	route -> /projects/create
	view -> 

* store() -> simpen request dari user
	route -> /project
	view ->

* show() -> halaman selengkapnya dari 1 project -> halaman single
	route -> /projects/{$slug}
	view ->



*asdasgdhdf*
format date - solved

edit project -> belom bisa edit featured_image nya

guest belom bisa liat info projectnya - solved