<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded =[];

    public function path(){
        return route('articles.show', $this);
    }
   // protected $fillable = ['title', 'exerpt', 'body'];
}
