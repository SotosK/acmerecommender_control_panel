<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopPreference extends Model
{
	protected $fillable= [ "item_id", "preference"];
	public $timestamps= false;
    public function userAccount(){
    	return $this->belongsTo(UserAccount::class);
    }
}
