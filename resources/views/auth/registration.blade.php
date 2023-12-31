@extends('app')
@section('content')
    <main class="signup-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center">Registrate!</h3>
                        <div class="card-body">
                            <form method="get" action="{{  route('register.custom') }}" >
                                @csrf
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                    required autofocus>
                                    @if($errors->has('name'))
                                        <samp class="text-danger">{{  $errors->first('name') }}</samp>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control" name="email"
                                           required autofocus>
                                    @if($errors->has('email'))
                                        <samp class="text-danger">{{  $errors->first('email') }}</samp>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <input type="password" placeholder="password" id="password" class="form-control" name="password"
                                           required >
                                    @if($errors->has('password'))
                                        <samp class="text-danger">{{  $errors->first('password') }}</samp>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="remember"> Recordarme</label>
                                    </div>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Registrarme</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
