<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'employer_id',
        'rating_category',
        'rating_description',
    ];

    public function employers()
    {
        return $this->belongsTo(Employer::class);
    }
}
