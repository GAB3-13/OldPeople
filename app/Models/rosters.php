<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rosters extends Model
{
    use HasFactory;
    protected $fillable = [
        'rosterDate',
        'supervisorID',
        'doctorID',
        'caregiverID1',
        'caregiverID2',
        'caregiverID3',
        

    ];
}

