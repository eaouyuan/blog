<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User as UserEloquent;
use App\Score as ScoreEloquent;


class Student extends Model
{
    protected $table='students';

    public function user(){
        return $this->belongsTo(UserEloquent::class);
    }

    public function score(){
        return $this->hasone(ScoreEloquent::class);
    }

    public function scopeOrderBySubject($query){
        return $query->orderBy('scores.chinese','DESC')
        ->orderBy('scores.english'.'DESC')
        ->orderBy('scores.math','DESC');
    }
}
