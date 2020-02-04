<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [

    'title','discriptions','unit','price','total',
  ];
  public function images(){
    return $this->hasMany(
      Image::class
    );
  }
  public function review(){
      return $this->hasMany(Review::class);
  }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tag(){
      return $this->belongsToMany(
          Tag::class
      );
    }

  }
