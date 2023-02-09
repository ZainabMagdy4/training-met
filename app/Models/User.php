<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'tb_user';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'name',
        'username',
        'password',
        'phone',
        'age',
        'sex',
        'email',
    ];

    public function validationRules()
       {
           return[
              'name' => 'required',
              'email' => 'required|email|unique:users,email',
              'phone' => 'required|unique',
              'sex' => 'required',
              'age' => 'required',
              'password' =>'required|min:6',

            
            
            
            ];
            
        }
    
}
