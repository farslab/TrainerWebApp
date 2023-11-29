@extends('app')
@section('title','Customer Dashboard')
@section('content')
  <section class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-3 col-6">
                  <div class="small-box bg-info">
                      <div class="inner">
                          <h3>{{auth()->user()->customer->trainingPrograms->count()}}</h3>
                          <p>Antrenman Programı</p>
                      </div>
                      <div class="icon">
                        <i class="icon ion-md-fitness"></i>
                    </div>
                      <a href="{{route('training.index',auth()->user()->id)}}" class="small-box-footer"><i
                              class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>
              <div class="col-lg-3 col-6">
                  <div class="small-box bg-success">
                      <div class="inner">
                          <h3>{{auth()->user()->customer->progressRecords->count()}}</h3>

                          <p>Gelişim Verileri</p>
                      </div>
                      <div class="icon">
                          <i class="ion ion-stats-bars"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i
                              class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>
              <div class="col-lg-3 col-6">
                  <div class="small-box bg-warning">
                      <div class="inner">
                          <h3>{{\App\Models\User::count()}}</h3>

                          <p>Toplam Kullanıcı</p>
                      </div>
                      <div class="icon">
                          <i class="ion ion-person-add"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i
                              class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>
              <div class="col-lg-3 col-6">
                  <div class="small-box bg-danger">
                      <div class="inner">
                          <h3>65</h3>

                          <p>Unique Visitors</p>
                      </div>
                      <div class="icon">
                          <i class="ion ion-pie-graph"></i>
                      </div>
                      <a href="#" class="small-box-footer">More info <i
                              class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>
          </div>
          <div class="row">
          </div>
      </div>
  </section>
</div>
@endsection