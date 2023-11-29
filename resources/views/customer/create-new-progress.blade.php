@extends('app')
@section('title','Gelişim Verisi Ekle')
@section('content')
<div class="row d-flex flex-row">
<div class="col-5 py-2 mx-2">
    <form action="{{ route('pr.add') }}" method="POST">
        @csrf
        <input type="hidden" value="{{ auth()->user()->customer->id }}" name="customer_id" />
    
        <div class="mb-3">
            <label for="weight" class="form-label">Kilo</label>
            <input placeholder="40-200 Kg" type="number" class="form-control" id="weight" name="weight" required min="40" max="200">
        </div>
    
        <div class="mb-3">
            <label for="height" class="form-label">Boy</label>
            <input placeholder="100-250 cm" type="number" class="form-control" id="height" name="height" required min="100" max="250">
        </div>
    
        <div class="mb-3">
            <label for="body_fat_percentage" class="form-label">Vücut Yağ Oranı</label>
            <input placeholder="2-60 %" type="number" class="form-control" id="body_fat_percentage" name="body_fat_percentage" required min="2" max="60" step="0.1">
        </div>
    
        <div class="mb-3">
            <label for="muscle_mass" class="form-label">Kas Kütlesi</label>
            <input placeholder="20-120 Kg" type="number" class="form-control" id="muscle_mass" name="muscle_mass" required min="20" max="120" step="0.1">
        </div>
    
        <div class="mb-3">
            <label for="body_mass_index" class="form-label">Vücut Kitle İndeksi</label>
            <input placeholder="15-40" type="number" class="form-control" id="body_mass_index" name="body_mass_index" required min="15" max="40" step="0.1">
        </div>
    
        <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
    
</div>
<div class="col-6" style="max-height: 450px; overflow:scroll">
    <h3>Gelişim Verileri</h3>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>Kilo</th>
                <th>Boy</th>
                <th>Yağ Oranı</th>
                <th>Kas Kütle</th>
                <th>Kitle İndeksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach(auth()->user()->customer->progressRecords as $veri)
            <tr>
                <td>{{ $veri->weight }}</td>
                <td>{{ $veri->height }}</td>
                <td>{{ $veri->body_fat_percentage }}</td>
                <td>{{ $veri->muscle_mass }}</td>
                <td>{{ $veri->body_mass_index }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>

@endsection