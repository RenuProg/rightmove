<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Send extends Model
{
    use HasFactory;
     protected $table = 'send_queries';
    protected $fillable = [ 'first_name',
        'last_name',
        'email',
        'phone_number',
        'message']; 
}
