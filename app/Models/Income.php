<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory; 

    protected $fillable = [
        
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
