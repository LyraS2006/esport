<!-- resources/views/auth/register.blade.php -->

@extends('layouts.loginapp')

@section('content')
    <div class="my-login-page">
        <section class="h-100">
            <div class="container h-100">
                <div class="row justify-content-md-center h-100">
                    <div class="card-wrapper">
                        <div class="card fat">
                            <div class="card-body">
                                <div class="imgbox">
                                    <img src="img/222.png" alt="">
                                </div>
                                <h2 data-text="Login">Login</h2>
                                <form action="/login" method="POST" class="my-login-validation">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Nama<font color="red">*</font></label>
                                        <input id="nama" type="text" class="form-control" name="nama"
                                            placeholder="" required autofocus>
                                        <div class="invalid-feedback">
                                            Wajib di isi dong maniesss:3
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password <font color="red">*</font></label>
                                        <input id="password" type="password" class="form-control" name="password" required
                                            data-eye>
                                        <div class="invalid-feedback">
                                            Password nya kok salah sieee
                                        </div>
                                    </div>
                                    <font color="red">*</font>
                                    <font color="grey"><i>Harap di Cek Kembali Data Anda dengan Benar</i></font>

                                    <div class="form-group m-0 mt-3">
                                        <button type="submit" class="btn btn-block">
                                            Login
                                        </button>
                                    </div>
                                    <br>
                                    <div>
                                        <a href="/register" class="btn bth-block">
                                            Register
                                        </a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="footer">
                            Esports Smakensa Community
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
