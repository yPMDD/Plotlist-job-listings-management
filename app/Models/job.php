<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class job extends Model
{
    
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title', 
        'company', 
        'location', 
        'website', 
        'email', 
        'description',
        'category',
        'logo'
    ];

    public function scopeFilter($query, array $filters) {

        if($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%');
        }
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}

    
