<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_name',
        'morning_medication',
        'afternoon_medication',
        'night_medication',
        'breakfast',
        'lunch',
        'dinner',
    ];
}

