<?php
// app/Models/Customer.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'trainer_id',
        'customer_target',
        'birth_date',
        'gender',
        'phone_number',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }

    public function trainingProgram()
    {
        return $this->hasOne(TrainingProgram::class);
    }

    public function nutritionPlan()
    {
        return $this->hasOne(NutritionPlan::class);
    }
}

