<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Content;

class Project extends Model
{
    public function contents() {
        return $this->hasMany('App\Content');
    }
}
