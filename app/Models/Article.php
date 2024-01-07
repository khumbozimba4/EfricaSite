<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    
    use HasFactory;
    protected $fillable = ['title','photo_url' ,'content' ,	'slug','user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
