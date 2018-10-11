<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TastePreference extends Model
{
    protected $guarded = ['id'];

    public function userAccount(){
        return $this->belongsTo(UserAccount::class);
    }
}
