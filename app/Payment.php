<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
  protected $fillable = [

    'user_id','amount','order_id','paid_on','payment_refrence',
  ];
  public function customer(){
    return $this->BelongsTo(
      User::class);
  }
  public function order(){
    return $this->BelongsTo(
      Order::class
    );
  }
}
