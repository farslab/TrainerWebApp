@extends('app')
@section('title','Admin Dashboard')
@section('content')
  <!-- Content Header (Page header) -->
  <div class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
              <div class="col-sm-6">
                  <h1 class="m-0">{{auth()->user()->role}} Dashboard</h1>
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
          <!-- Small boxes (Stat box) -->
          <div class="row">
              <div class="col-lg-3 col-6">
                  <!-- small box -->
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
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                  <!-- small box -->
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
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                  <!-- small box -->
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
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                  <!-- small box -->
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
              <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">

          </div>
          <!-- /.row (main row) -->
      </div>
      <!-- /.container-fluid -->
  </section>
  <!-- /.content -->

@endsection