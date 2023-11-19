<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'day',
        'target',
        'calorie',
        'meal_1',
        'meal_2',
        'meal_3',
    ];
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Belirli bir gün için hedefi getir
    public function targetForDay($customer_id, $day)
{
    return $this->where('customer_id', $customer_id)->where('day', $day)->value('target');
}

public function calorieForDay($customer_id, $day)
{
    return $this->where('customer_id', $customer_id)->where('day', $day)->value('calorie');
}

public function meal1ForDay($customer_id, $day)
{
    return $this->where('customer_id', $customer_id)->where('day', $day)->value('meal_1');
}

public function meal2ForDay($customer_id, $day)
{
    return $this->where('customer_id', $customer_id)->where('day', $day)->value('meal_2');
}

public function meal3ForDay($customer_id, $day)
{
    return $this->where('customer_id', $customer_id)->where('day', $day)->value('meal_3');
}

}
