<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingProgram extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'exercise_name',
        'target',
        'sets',
        'reps',
        'video_guide',
        'start_date',
        'duration',
    ];
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
