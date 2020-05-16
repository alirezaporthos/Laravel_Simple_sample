<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;

class TestPage extends Model
{
    use SoftDeletes;
    
    protected $primaykey = 'id';
    protected $fillable=['name','email','age'];//as a white list
    protected $guarded=['_token','id'  ];//as a black list
    
    protected static function boot(){
        parent::boot();
        static::addGlobalScope('age',function(Builder $builer){

            $builer->where('age','>',18);

        });
    }
    
    function scopeOver18(Builder $b){
        $b->where('age','>',18);
    }
    
    
}
