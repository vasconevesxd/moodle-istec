<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{

    public function years(){
        return $this->belongsToMany('App\Lecture');
    }

}