@extends('app')
@section('title','Admin Dashboard')
@section('content')

  <section class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-3 col-6">
                  <div class="small-box bg-info">
                      <div class="inner">
                          
                          <h3>53<sup style="font-size: 20px">%</sup></h3>

                          <p>Günlük Abonelik</p>
                      </div>
                      <div class="icon">
                          <i class="ion ion-bag"></i>
                      </div>
                      <a href="#" class="small-box-footer"> <i
                              class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>
              <div class="col-lg-3 col-6">
                  <div class="small-box bg-success">
                      <div class="inner">
                        <h3>{{\App\Models\Trainer::count()}}</h3>

                        <p>Antrenör</p>
                      </div>
                      <div class="icon">
                          <i class="ion ion-stats-bars"></i>
                      </div>
                      <a href="trainers" class="small-box-footer">Listeye Git <i
                              class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>
              <div class="col-lg-3 col-6">
                  <div class="small-box bg-warning">
                      <div class="inner">
                          <h3>{{\App\Models\Customer::count()}}</h3>

                          <p>Danışan</p>
                      </div>
                      <div class="icon">
                          <i class="ion ion-person-add"></i>
                      </div>
                      <a href="/customers" class="small-box-footer">Listeye Git <i
                              class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>
              <div class="col-lg-3 col-6">
                  <div class="small-box bg-danger">
                      <div class="inner">
                          <h3>65</h3>

                          <p>Günlük Ziyaretçi</p>
                      </div>
                      <div class="icon">
                          <i class="ion ion-pie-graph"></i>
                      </div>
                      <a href="#" class="small-box-footer"> <i
                              class="fas fa-arrow-circle-right"></i></a>
                  </div>
              </div>
          </div>
          <div class="row">

          </div>
      </div>
  </section>

@endsection