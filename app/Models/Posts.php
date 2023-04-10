<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'company_id',
        'details',
        'file_url_1',
        'file_url_2',
        'file_url_3',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
    
    public function company()
    {
        return $this->belongsTo(CompanyProfile::class, 'company_id');
    }

    public function reactions() {
        return $this->hasMany(PostReaction::class, 'post_id', 'id');
    }
    
    public function saved_posts() {
        return $this->hasMany(SavePosts::class, 'post_id', 'id');
    }
}
