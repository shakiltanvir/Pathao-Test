<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customar extends Model
{
    use HasFactory;
    protected $primaryKey='user_id';
    public function setTag()
    {
        return $this->hasMany('App\Models\tags','tag_id');
    }
}
