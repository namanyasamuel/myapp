<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;



class Patient extends Model
{
    use HasFactory;
    public function test_result():HasMany
    {
        return $this->hasMany(Test_Result::class);
    }
   
   
   
protected $fillable = ['user_id','sname','lname','email','contact','sex','age','agecount','test_date'];
}
