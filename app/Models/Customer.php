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
        'pp_path',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }

    public function trainingPrograms()
    {
        return $this->hasMany(TrainingProgram::class)->orderBy('created_at','desc');
    }
    public function progressRecords()
    {
        return $this->hasMany(ProgressRecord::class)->orderBy('created_at','asc');
    }

    public function nutritionPlan()
    {
        return $this->hasOne(NutritionPlan::class);
    }
}

