@extends('app')
@section('title','Antrenman Programı')
@section('content')

<div class="kanban d-flex justify-content-start" style="max-height: 600px!important; height:500px!important">
    <section class="content pb-3">
        <div class="container-fluid h-100">
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
                </div>
            </div>

            @endforeach
            @else
            <h3 class="card-title">
                Henüz antrenman programı oluşturulmadı. Antrenörünüzden talep edin.
            </h3>
            @endif
        </div>
    </section>
</div>
@endsection