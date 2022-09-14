<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{

    public function lectures(){
        return $this->belongsToMany('App\Year');
    }

}