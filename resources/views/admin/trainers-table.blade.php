@section('title', 'Antrenör Listesi')
@extends('app')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col">İsim</th>
                <th scope="col">Danışan Sayısı</th>
                <th scope="col">Uzmanlık </th>
              </tr>
            </thead>
            <tbody>
              @foreach($trainers as $trainer)
              <tr>
                <td><img src="{{ Storage::url($trainer->pp_path) }}" alt="Profil Fotografı" class="img-circle object-fit-cover" width="70" height="70"></td>
                <td>{{$trainer->user->name}}</td>
                <td>{{$trainer->customers->count()}}</td>
                <td>{{$trainer->specialty}}</td>
              </tr>
             @endforeach
            </tbody>
          </table>
        </div>
    </div>
</section>
<!-- /.content -->

@endsection