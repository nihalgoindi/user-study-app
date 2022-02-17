<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

     /**
     * The answer that belongs to this user
     */
    public function answer()
    {
        return $this->hasOne(Answer::class);
    }
}
