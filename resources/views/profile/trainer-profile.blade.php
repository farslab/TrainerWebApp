<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle" src="{{Storage::url($user->trainer->pp_path)}}"
                alt="Profil Fotografi" />
            </div>
            <h3 class="profile-username text-center"><i class="fas fa-truck-container"></i> {{$user->name}}</h3>
            <p class="text-muted text-center">Antrenör</p>
           
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
                        placeholder="İsim" required/>
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
                    <label for="inputName2" class="col-sm-2 col-form-label">Deneyimler</label>
                    <div class="col-sm-10">
                      <input type="text" name="experiences" value="{{$user->trainer->experiences}}" class="form-control"
                        id="experiences" placeholder="Deneyim" required />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">Uzmanlık Alanı</label>
                    <div class="col-sm-10">
                      <input type="text" disabled name="experiences" value="{{$user->trainer->specialty}}"
                        class="form-control" id="experiences" placeholder="Deneyim" />
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputSkills" class="col-sm-2 col-form-label">Telefon</label>
                    <div class="col-sm-10">
                      <input type="tel" value="{{$user->trainer->phone}}" name="phone" class="form-control"
                        id="inputSkills" placeholder="Telefon Numarası" required />
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