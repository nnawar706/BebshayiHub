<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompanyProfile extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'company_profiles';

    protected $fillable = [
        'user_id',
        'name',
        'type',
        'bio',
        'about',
        'services',
        'location',
        'phone_no',
        'profile_photo_url',
        'cover_photo_url'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $dates = [
        'deleted_at'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function posts() {
        return $this->hasMany(Posts::class, 'company_id', 'id');
    }
}
