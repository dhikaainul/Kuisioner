<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kuesioner extends Model
{
    protected $table = 'kuesioner';
    protected $fillable = ['jawaban Quesioner 1','jawaban Quesioner 2','jawaban Quesioner 3','jawaban Quesioner 4','jawaban Quesioner 5'];
}
