@extends('auth.layouts.main')

@section('container')
    <div class="row justify-content-center my-5">
        <div class="col-xl-10 col-lg-12 col-md-9 bg-light rounded shadow-lg my-4">
            <div class="">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-flex bg-login-image">
                            <img class="bg-login-image" src="/assets/img/img.jpg" width="400">
                        </div>
                        <div class="col-lg-6">
                            <div class="p-lg-5 p-2">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <small for="password">Email</small>
                                        <input type="email" name="email" class="form-control form-control-sm"
                                            id="email" placeholder="example@gmai.com">
                                    </div>
                                    <div class="form-group">
                                        <small for="password">Password</small>
                                        <input type="password" name="password" class="form-control form-control-sm"
                                            id="password" placeholder="password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm btn-user btn-block">Login</button>
                                    <hr>
                                </form>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="register.html">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
