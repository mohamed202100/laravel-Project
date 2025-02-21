<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable =['name','email','profile_image','bio','job_description'];
    public function books(){
        return $this->hasMany(Book::class,'author_id');
    }
}
