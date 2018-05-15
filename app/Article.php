<?php

namespace Corp;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function user(){
        return $this->belongsTo('Corp/User');
    }
}
