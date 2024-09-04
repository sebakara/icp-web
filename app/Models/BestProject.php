<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BestProject extends Model
{
    use HasFactory;

    // The table associated with the model.
    protected $table = 'winners_or_special_certificate';

    // The attributes that are mass assignable.
    protected $fillable = [
        'student_full_name',
        'project_name_or_special_award',
        'description',
        'date',
        'file_path',
        'qr_code_path',
    ];
}
