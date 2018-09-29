<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//
use Auth;
// use Illuminate\Database\Eloquent\SoftDeletes;


class Project extends Model
{
    // use SoftDeletes; // 
	// protected $dates = ['deleted_at'];
	protected $fillable = [
		'judul', 'slug','dibuat', 'ditutup', 'deskripsi', 'jumlah_uang','slot', 'user_id', 'featured_image',
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function isOwner()
	{
        if (Auth::guest())
            return false;
        
		return Auth::user()->id == $this->user->id;
	}
}
