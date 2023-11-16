@extends('app')
@section('title','Yeni Kullanıcı Oluştur')
@section('content')
   
    
    <div class="container">
        <ul class="nav nav-tabs" id="myTabs">
            <li class="nav-item">
                <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1">Danışan Kullanıcısı</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2">Antrenör Kullanıcısı</a>
            </li>
        </ul>

        <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="tab1">
                <form class="col-md-6 py-4" action="{{ route('create-store') }}" method="post">
                    @csrf
                    <input type="hidden" name="role" value="customer">

                    <div class="mb-3">
                        <label for="customer_name" class="form-label">Ad:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="customer_email" class="form-label">E-posta:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="customer_birth_date" class="form-label">Doğum Tarihi:</label>
                        <input type="date" name="customer_birth_date" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="gender">Cinsiyet:</label>
                        <select name="gender" class="form-control" required>
                            <option value="male">Erkek</option>
                            <option value="female">Kadın</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="customer_target">Danışan Hedefi:</label>
                        <select name="customer_target" class="form-control" required>
                            <option value="kilo_aldirma">Kilo Alma</option>
                            <option value="kilo_verdirme">Kilo Verme</option>
                            <option value="kilo_koruma">Kilo Koruma</option>
                            <option value="kas_kazanma">Kas Kazanma</option>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="customer_phone_number" class="form-label">Telefon Numarası:</label>
                        <input type="text" name="phone_number" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="customer_password" class="form-label">Parola:</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="customer_password_confirmation" class="form-label">Parola Tekrar:</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>

                    <!-- Diğer gerekli alanları ekleyebilirsiniz -->

                    <button type="submit" class="btn btn-primary">Danışan Oluştur</button>
                </form>
            </div>

            <div class="tab-pane fade" id="tab2">
                <form class="col-md-6 py-4" method="POST" action="{{ route('create-store') }}">
                    @csrf
                    <input type="hidden" name="role" value="trainer">

                    <div class="form-group">
                        <label for="name">Ad:</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>


                    <div class="form-group">
                        <label for="specialty">Uzmanlık Alanı:</label>
                        <select name="specialty" class="form-control" required>
                            <option value="kilo_aldirma">Kilo Aldırma</option>
                            <option value="kilo_verdirme">Kilo Verdirme</option>
                            <option value="kilo_koruma">Kilo Koruma</option>
                            <option value="kas_kazanma">Kas Kazanma</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="experiences">Deneyimler:</label>
                        <input name="experiences" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Telefon:</label>
                        <input type="text" name="phone" class="form-control" required> 
                    </div>

                    <div class="form-group">
                        <label for="password">Parola:</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Parola Tekrar:</label>
                        <input type="password" name="password_confirmation" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Antrenör Oluştur</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.content -->


@endsection

