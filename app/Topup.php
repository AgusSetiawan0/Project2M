<?php

namespace App;

use Auth;
use Illuminate\Database\Eloquent\Model;

class Topup extends Model
{
	protected $fillable = [
	       'nama', 'nominal', 'bank', 'user_id', 'bukti_image',
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
