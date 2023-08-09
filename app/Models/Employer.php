<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'suffix',
        'pronouns',
        'email',
        'country',
        'country_code',
        'city',
        'address',
        'start_date',
        'end_date',
        'profile_image',
        'cover_image',
        'plan',
        'plan_amount'

    ];

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
