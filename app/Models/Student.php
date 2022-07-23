<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;

    //protected $table ='sinh_vien';  neu muon dung ten bang la sinh_vien, con khong thi model se mac dinh dung database ten la model vs them s, (students)

    public  function  getHoTen(){
        return $this->first_name ." ". $this->last_name;
    }

//    protected function fullname():Attribute
//    {
//        return Attribute::make(
//            get: fn ($value, $attributes)
//        );
//    }

    public function fullname()
    {
        return  $this->attributes['first_name'] .  $this->attributes['last_name'];
    }

//    protected function fullnames(): Attribute
//    {
//        return Attribute::make(
//            get
//                $this->attributes['first_name'].$this->attributes['last_name'],
//            ),
//        );
//    }

    public function getAge()
    {
        $date = new DateTime($this->attributes['birthdate']);
        $now = new DateTime();
        return  $now->diff($date)->y;
    }

    public function getGender()
    {
        return  ($this->attributes['gender'])===1 ? 'Male' : 'Female';
    }



}
