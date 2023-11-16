@section('title', 'Danışan Listesi')
@section('content')

@extends('app')
@section('title','Trainer Dashboard')
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
                        <th scope="col">Antrenör</th>
                        <th scope="col">Hedef</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                    <tr>
                        <th scope="row">Pic/path</th>
                        <td>{{$customer->user->name}}</td>
                        <td>{{$customer->trainer->name}}</td>
                        <td>{{$customer->customer_target}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- /.content -->

@endsection