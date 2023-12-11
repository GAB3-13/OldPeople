<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home_care extends Model
{
    use HasFactory;

    protected $table = 'home_care';
    protected $primaryKey = 'appointmentID';


    protected $fillable = [
        'patientID',
        'doctorID',
        'appointmentDate',
        'caregiverID',
        'morningMeds',
        'afternoonMeds',
        'nightMeds',
        'breakfast',
        'lunch',
        'dinner'
    ];
    protected $attributes = [
        'patientID' => null,
        'doctorID' => null,
        'appointmentDate' => null,
        'caregiverID' => null,
        'morningMeds' => null,
        'afternoonMeds' => null,
        'nightMeds' => null,
        'breakfast' => null,
        'lunch' => null,
        'dinner' => null,
    ];
}
