<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle" src="{{Storage::url($user->customer->pp_path)}}"
                alt="Profil Fotografi" />
            </div>
            <h3 class="profile-username text-center"><i class="fas fa-truck-container"></i> {{$user->name}}</h3>
            <p class="text-muted text-center">Danışan</p>
            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Danışan</b> <a class="float-right">500</a>
              </li>
              <li class="list-group-item">
                <b>Antrenman Programları</b> <a class="float-right">543</a>
              </li>
              <li class="list-group-item">
                <b>Beslenme Programları</b> <a class="float-right">13,287</a>
              </li>
            </ul>
          </div>
        </div>

      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item ">
                <a class="nav-link active" href="#settings" data-toggle="tab">Profil Bilgileri</a>
              </li>
            </ul>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="active tab-pane" id="settings">
                <form class="form-horizontal" method="POST" action="{{route('profile.update')}}"
                  enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" value="{{$user->id}}" name="user_id" />
                  <input type="hidden" value="{{$user->role}}" name="role" />

                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">İsim</label>
                    <div class="col-sm-10">
                      <input value="{{$user->name}}" type="text" name="name" class="form-control " id="inputName"
                        placeholder="Name" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input disabled value="{{$user->email}}" type="email" name="email" class="form-control" id="email"
                        placeholder="Email" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputName2" class="col-sm-2 col-form-label">Doğum Tarihi</label>
                    <div class="col-sm-10">
                      <input type="date" name="birth_date" value="{{$user->customer->birth_date}}" class="form-control"
                        id="experiences" placeholder="Dogum Günü" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">Hedef</label>
                    <div class="col-sm-10">
                      <input type="text" disabled name="experiences" value="{{$user->customer->customer_target}}"
                        class="form-control" id="experiences" placeholder="Deneyim" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">Cinsiyet</label>
                    <div class="col-sm-10">
                      <input type="text" disabled name="experiences" value="{{$user->customer->gender}}"
                        class="form-control" id="experiences" placeholder="Deneyim" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputSkills" class="col-sm-2 col-form-label">Telefon</label>
                    <div class="col-sm-10">
                      <input type="tel" value="{{$user->customer->phone_number}}" name="phone" class="form-control"
                        id="inputSkills" placeholder="Skills" />
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputSkills" class="col-sm-2 col-form-label">Profil Fotoğrafı</label>
                    <div class="col-sm-10">
                      <input type="file" name="profile_photo">
                    </div>
                  </div>


                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">
                        Değişiklikleri Kaydet
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>