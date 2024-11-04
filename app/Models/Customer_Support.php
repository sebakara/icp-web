<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_Support extends Model
{
    use HasFactory;

    protected $fillable = [
        'Full_name',
        'Email',
        'Subject',
        'Message'
    ];
}
