<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;


class cv extends Model
{   
    use HasFactory;

    protected $fillable = [ 'title', 'file' , 'category','user_id'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
