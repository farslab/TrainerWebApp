<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgressRecord extends Model
{
    protected $fillable = [
        'weight', 'height', 'body_fat_percentage', 'muscle_mass', 'body_mass_index','customer_id'
    ];
    use HasFactory;
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
