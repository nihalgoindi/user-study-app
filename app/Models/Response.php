<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;#
    
    protected $guarded = [];

    /**
     * Get the question that this response belongs to.
     */
    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

}
