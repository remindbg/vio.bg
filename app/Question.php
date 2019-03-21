<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];
    protected $table = 'questions';


    public function category() {

        return $this->belongsTo('App\Category');
    }

}
