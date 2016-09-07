<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';

    protected $fillable = ['id','task', 'options', 'answer_No', 'answer_Yes', 'hint', 'order', 'type'];

    public $timestamps = false;
}
