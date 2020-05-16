<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    
    protected $table = 'posts';
    public $primaryKey = 'id';
    public $timestamps = true; // we have timestamps such as updated at,...

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
  