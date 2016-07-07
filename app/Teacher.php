<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    protected $table = 'teacher';
//    protected $primaryKey ='';
    public function findStudentByTeacherId()
    {
//        return  $this->;
    }
    public function students()
    {
        return  $this->hasMany('App\Student');
    }
}
