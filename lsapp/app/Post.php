<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table name
    protected $table ='posts';

    //primrary key
    public $primaryKey='id';
    //timestamps
    public $timestamps=true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
