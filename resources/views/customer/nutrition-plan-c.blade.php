@extends('app')
@section('title','Beslenme Planı')
@section('content')
<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>Gün</th>
            <th>Hedef</th>
            <th>Kalori</th>
            <th>Öğün 1</th>
            <th>Öğün 2</th>
            <th>Öğün 3</th>
        </tr>
    </thead>
    <tbody>
        @foreach($days as $day)
        <tr>
            <th>{{ $day }}</th>
            <td>{{ $nutritionPlan->targetForDay($user->customer->id, $day) }}</td>
            <td>{{ $nutritionPlan->calorieForDay($user->customer->id, $day) }}</td>
            <td>{{ $nutritionPlan->meal1ForDay($user->customer->id, $day) }}</td>
            <td>{{ $nutritionPlan->meal2ForDay($user->customer->id, $day) }}</td>
            <td>{{ $nutritionPlan->meal3ForDay($user->customer->id, $day) }}</td>
        </tr>
        @endforeach
    </tbody>
</table>



@endsection