<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home_care extends Model
{
    use HasFactory;
    protected $table = "home_care";
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

