@section('title', 'Antrenör Listesi')
@section('content')

@extends('app')
@section('title','Trainer Dashboard')
@section('content')

  <div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Antrenör Listesi</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            {{auth()->user()->name}}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/logout">Logout</a>
                            <a class="dropdown-item" href="/profile">Profile</a>
                            <a class="dropdown-item" href="#">Something Else</a>
                            <!-- Add more items as needed -->
                        </div>
                    </div>

                </ol>
            </div>

            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /.content-header -->

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
                <th scope="row">Pic/path</th>
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