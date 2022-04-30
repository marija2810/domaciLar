<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable=['title','description','genre_id','writer_id','pages','img'];

    public function writer(){
        return $this->belongsTo(Writer::class);
    }
    public function genre(){
        return $this->belongsTo(Genre::class);
    }
}
