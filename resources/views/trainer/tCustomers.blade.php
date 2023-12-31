@extends('app')
@section('title','Danışan Listesi')
@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <table class="table table-striped table-hover">
                <thead class="text-center">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">İsim</th>
                        <th scope="col">Antrenor</th>
                        <th scope="col">Hedef </th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="text-center align-items-center justify-content-center">

                    @foreach($customers as $customer)
                    <tr>
                        <td class="py-2"><img src="{{ Storage::url($customer->pp_path) }}" alt="Profil Fotografı"
                                class="img-circle object-fit-cover" width="50" height="50"></td>
                        <td style="vertical-align: middle">{{$customer->user->name}}</td>
                        <td style="vertical-align: middle">{{$customer->trainer->name}}</td>
                        <td style="vertical-align: middle">{{$customer->customer_target}}</td>

                        @if(!$customer->user->is_active)
                        <td style="vertical-align: middle"><span class="badge bg-danger">DEVRE DIŞI</span></td>
                        @else
                        <td style="vertical-align: middle"><span class="badge bg-success">AKTİF</span></td>
                        @endif

                        <td style="vertical-align: middle">
                            <div class="dropdown">
                                <i class="fas fa-sliders-h" id="dropdownMenuButton" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"></i>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{route('profile.edit',$customer->user_id)}}">Profili
                                        Görüntüle</a>
                                    <a class="dropdown-item"
                                        href="{{route('nutrition.index',$customer->user_id)}}">Beslenme Planı</a>
                                    <a class="dropdown-item"
                                        href="{{route('training.index',$customer->user_id)}}">Antrenman Programı</a>
                                    <a class="dropdown-item"
                                        href="{{route('graphics.index',$customer->user_id)}}">Gelişim Grafiği</a>

                                </div>
                            </div>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- /.content -->

@endsection