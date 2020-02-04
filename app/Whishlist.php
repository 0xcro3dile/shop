<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Whishlist extends Model
{
    protected $fillable = [
        'user_id','wish_list',
        ];

    protected function customer(){
        return $this->hasOne(User::class);
    }
}
