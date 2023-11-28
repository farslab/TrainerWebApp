@extends('app')
@section('title','Antrenman Programı')
@section('content')

<div class="kanban d-flex justify-content-start" style="max-height: 600px!important; height:550px!important">


  <section class="content pb-3">
    <div class="container-fluid h-100">
      <div class="card card-row card-secondary">
        <div class="card-header">
          <h3 class="card-title">
            Yeni Program Ekle
          </h3>
        </div>
        <div class="card-body">

          <form method="POST" action="{{route('training.store')}}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{$user->id}}" name="user_id" />

            <div class="form-group">
              <label for="exercise_name">Egzersiz Adı:</label>
              <input type="text" class="form-control" id="exercise_name" name="exercise_name" required>
            </div>

            <div class="form-group">
              <label for="target">Hedef:</label>
              <input class="form-control" id="target" name="target" required />
            </div>

            <div class="form-group">
              <label for="sets">Set Sayısı:</label>
              <input type="text" class="form-control" id="sets" name="sets" required>
            </div>

            <div class="form-group">
              <label for="reps">Tekrar Sayısı:</label>
              <input type="text" class="form-control" id="reps" name="reps" required>
            </div>

            <div class="form-group">
              <label for="video_guide">Video Rehberi (Opsiyonel):</label>
              <input type="file" class="form-control" id="video_guide" name="video_guide">
            </div>

            <div class="form-group">
              <label for="start_date">Başlangıç Tarihi:</label>
              <input type="date" class="form-control" id="start_date" name="start_date" required>
            </div>

            <div class="form-group">
              <label for="duration">Egzersiz Süresi:</label>
              <input type="text" class="form-control" id="duration" name="duration" required>
            </div>

            <button type="submit" class="btn btn-primary">Programı Kaydet</button>
          </form>


        </div>
      </div>
      @if(!$user->customer->trainingPrograms->isEmpty())
      @foreach($user->customer->trainingPrograms as $trainingProgram)
      <div class="card card-row card-success">
        <div class="card-header">
          <h3 class="card-title">
            {{$trainingProgram->exercise_name}}
          </h3>
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
          <div class="col d-flex flex-column ">
            <strong>Egzersiz Adı:</strong> {{$trainingProgram->exercise_name}}<br>
            <strong>Hedef:</strong> {{$trainingProgram->target}}<br>
            <strong>Set Sayısı:</strong> {{$trainingProgram->sets}}<br>
            <strong>Tekrar:</strong> {{$trainingProgram->reps}}<br>
            <strong>Video:</strong> {{$trainingProgram->video_guide}} <br>
            <strong>Başlangıç:</strong> {{$trainingProgram->start_date}}<br>
            <strong>Süre:</strong> {{$trainingProgram->duration}}<br>
          </div>
          <a href="{{route('trainingDelete', $trainingProgram->id)}}" class="btn btn-danger">Programı Sil<i class="px-2 fas fa-trash text-white"></i></a>

        </div>
      </div>

      @endforeach
      @endif
    </div>
  </section>
</div>
@endsection