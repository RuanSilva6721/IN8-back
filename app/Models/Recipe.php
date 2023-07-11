<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $table = 'recipes';
    
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'instructions',
        'created_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
