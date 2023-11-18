@extends('app')
@section('title', 'Antrenör Listesi')
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
            <th scope="col">Danışan Sayısı</th>
            <th scope="col">Uzmanlık </th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody class="text-center align-items-center justify-content-center">
         
          @foreach($trainers as $trainer)
          <tr >
            <td class="py-2"><img src="{{ Storage::url($trainer->pp_path) }}" alt="Profil Fotografı"
                class="img-circle object-fit-cover" width="50" height="50"></td>
            <td style="vertical-align: middle">{{$trainer->user->name}}</td>
            <td style="vertical-align: middle">{{$trainer->customers->count()}}</td>
            <td style="vertical-align: middle">{{$trainer->specialty}}</td>

            @if(!$trainer->user->is_active)
            <td style="vertical-align: middle"><span class="badge bg-danger">DEVRE DIŞI</span></td>
            @else
            <td style="vertical-align: middle"><span class="badge bg-success">AKTİF</span></td>
            @endif

            <td style="vertical-align: middle">
              <div class="dropdown">
                <i class="fas fa-sliders-h" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false"></i>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="{{route('profile.edit',$trainer->user_id)}}">Profili Görüntüle</a>
                  @if($trainer->user->is_active==1)
                  <a class="dropdown-item" href="{{route('user.disable', $trainer->user_id)}}">Devre Dışı Bırak</a>
                  @else
                  <a class="dropdown-item" href="{{route('user.enable', $trainer->user_id)}}">Aktif Hale Getir</a>

                  @endif
                  <a class="dropdown-item" href="{{route('user.delete', $trainer->user_id)}}">Hesabı Sil</a>
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