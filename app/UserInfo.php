<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    // Sto proteggendo user_info da interpretazioni di laravel.
    protected $table = 'user_info';

    // Per gestire le colonne creo il fillable
    protected $fillable = [
        'telephone',
        'full_address'
    ];


    public function user() {
        return $this->belongsTo('App\User');
    }

}
