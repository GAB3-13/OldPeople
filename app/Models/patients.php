<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patients extends Model
{
   
        protected $fillable = [
            'individualID',
            'careGroupID',
            'admissionDate',
            'morningMed',
            'afternoonMed',
            'nightMed',
            
        ];
    
    
    }
