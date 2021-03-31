<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComplaintPost extends Model
{
    //
    protected $fillable = [
        "user_id", "title", "description","service","is_urgent","status",
    ];


    public function user(){
        return $this->belongsTo('App\ComplaintPost', 'user_id');
    }


}
