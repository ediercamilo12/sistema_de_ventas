@extends('app')
@section('content')
    <main class="login-from">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <h3 class="card-header text-center"> Iniciar Secion</h3>
                        <div class="card-body">
                            <form method="GET" action="{{  route('login.custom') }}">
                                @csrf
                                <div class="from-group mb-3">
                                    <input type="text" placeholder="email" id="email" class="form-control" name="email" required
                                    autofocus>
                                    @if($errors->has('email'))
                                        <span class="text-danger">{{  $errors->first('email')  }}</span>
                                    @endif
                                </div>
                                <div class="from-group mb-3">
                                    <input type="password" placeholder="Password" class="form-control" name="password" required>
                                    @if($errors->has('password'))
                                        <span class="text-danger">{{  $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label>
                                        <input type="checkbox" name="remember"> reduerdame
                                    </label>
                                </div>
                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">Iniciar Sesion </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

