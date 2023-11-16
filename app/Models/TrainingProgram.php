<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingProgram extends Model
{
    use HasFactory;

    protected $fillable = ['customer_id', 'program_content'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
