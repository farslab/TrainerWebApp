@extends('app')
@section('title','Beslenme Planı')
@section('content')
<form class="px-3 pb-3" action="{{ route('nutrition.store') }}" method="POST">
    <input type="hidden" name="user_id" value="{{$user->id}}">
    @csrf
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th> Gün</th>
                <th> Hedef </th>
                <th> Kalori </th>
                <th> Öğün 1</th>
                <th> Öğün 2</th>
                <th> Öğün 3</th>
                <!-- ... Diğer öğünler ... -->
            </tr>
        </thead>
        <tbody>
            @foreach($days as $day)
            <tr>
                <th>{{ $day }}</th>
                <input type="hidden" name="day[]" value="{{ $day }}">
                <td><select class="form-control" name="targets[]">
                    <option >Seçiniz</option>
                    <option value="Kilo Alma" {{ $nutritionPlan->targetForDay($user->customer->id,$day) == 'Kilo Alma' ? 'selected' : '' }}>Kilo Alma</option>
                    <option value="Kilo Verme" {{ $nutritionPlan->targetForDay($user->customer->id,$day) == 'Kilo Verme' ? 'selected' : '' }}>Kilo Verme</option>
                    <option value="Kilo Koruma" {{ $nutritionPlan->targetForDay($user->customer->id,$day) == 'Kilo Koruma' ? 'selected' : '' }}>Kilo Koruma</option>
                    <option value="Kas Kazanma" {{ $nutritionPlan->targetForDay($user->customer->id,$day) == 'Kas Kazanma' ? 'selected' : '' }}>Kas Kazanma</option>
                </select></td>
                <td><input type="text" class="form-control" name="calories[]" value="{{ $nutritionPlan->calorieForDay($user->customer->id,$day) }}" /></td>
                <td><input type="text" class="form-control" name="meals_1[]" value="{{ $nutritionPlan->meal1ForDay($user->customer->id,$day) }}" /></td>
                <td><input type="text" class="form-control" name="meals_2[]" value="{{ $nutritionPlan->meal2ForDay($user->customer->id,$day) }}" /></td>
                <td><input type="text" class="form-control" name="meals_3[]" value="{{ $nutritionPlan->meal3ForDay($user->customer->id,$day) }}" /></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <button type="submit" class="btn btn-danger">Planı Kaydet</button>
    <button type="submit" class="btn btn-secondary" name="clear" value="clear">Temizle</button>

</form>


@endsection