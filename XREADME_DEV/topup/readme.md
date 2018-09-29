user:
1. user klik tombol topup -> redirect halaman topup
2. isi form : 
	nama user -> ngambil dari database user
	total topup -> 
	dikirim atas nama -> user yg ngisi
	bank yg saya pakai untuk transfer -> 
	bukti transfer -> image

admin
3. form topup diganti sama approval
	
4. approval :
		nama user
		total topup
		dikirim atas nama
		bank yg dipakai untuk transfer
		bukti transfer -> kecilin
		tombol approval

5. tombol approval bentuknya checkbox -> klo di check diterima klo kaga ditolak
6. ilang  barisnya


database :
	
7. table
	* user : tambahin field saldo -> default 0
	
	* bikin table topup
		-> id
		-> id_user -> foreign key user
		-> nama user 
		-> total topup 
		-> dikirim atas nama -> user yg ngisi
		-> bank yg saya pakai untuk transfer
		-> bukti transfer -> image
		-> status->default(0)
		-> di approve pada tanggal


8. model
	user - topup -> one-one
	topup-user -> one-one

9. controller
	* top-up controller
		-> redirect view -> form topup -> user
		-> redirect view -> approval -> admin
		-> create & store -> user topup
		-> edit & delete -> admin -> konfirmasi
			-> edit -> status di table topup
			-> edit -> saldo di tabel user bila disetujui
			-> delete baris topup kalau di reject


implentasi
_php artisan make:migration create_topup_table
Created Migration: 2018_09_26_063208_create_topup_table_

php artisan migrate
Migrating: 2018_09_26_063208_create_topup_table
Migrated:  2018_09_26_063208_create_topup_table
