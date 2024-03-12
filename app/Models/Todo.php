<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //protected $fillable = ['title'];  //mention which all fields are using massassign
    protected $guarded = []; // use this can make the fields all mmass assignable assign values in this will not mass assignable
}
