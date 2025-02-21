<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable =['name','description','price','author_id','image','student_id'];

    public function students(){
        return $this->belongsTo(Student::class,'student_id','id');
    }
    public function authors(){
        return $this->belongsTo(Author::class,'author_id','id');
    }
    public function categories(){
        return $this->belongsToMany(Category::class);
}
}
