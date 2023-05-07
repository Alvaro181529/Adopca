    @extends('layouts.guest')

@section('content')
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-4">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create una cuenta!</h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text"
                                            class="form-control form-control-user @error('name') is-invalid @enderror"
                                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                            placeholder="Primer Nombre">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="namesec"
                                            class="form-control form-control-user @error('namesec') is-invalid @enderror"
                                            name="namesec" value="{{ old('namesec') }}" required autocomplete="namesec"
                                            autofocus placeholder="Segundo Nombre">
                                        @error('namesec')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text"
                                            class="form-control form-control-user @error('lastmat') is-invalid @enderror"
                                            name="lastmat" value="{{ old('lastmat') }}" required autocomplete="lastmat"
                                            autofocus placeholder="Apellido Materno">
                                        @error('lastmat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-sm-6">
                                        <input type="lastpat"
                                            class="form-control form-control-user @error('lastpat') is-invalid @enderror"
                                            name="lastpat" value="{{ old('lastpat') }}" required autocomplete="lastpat"
                                            placeholder="Apellido Paterno">
                                        @error('lastpat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group mb-3 row">
                                    <div class="col-sm-12">
                                        <select hidden name="genero" id="genero" class="form-control" aria-label="Prefiero no decirlo" style="font-size: 14px; border-radius:20px">
                                            <option>Seleccione su rol en el sistema</option>
                                            <option value="Cliente" selected>Cliente</option>
                                          </select>
                                    </div>
                                </div>
                           

                                <div class="form-group row">
                                    <div class="col-sm-7 mb-3 mb-sm-0">
                                        <input type="email"
                                            class="form-control form-control-user @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email"
                                            placeholder="Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text"
                                            class="form-control form-control-user @error('celular') is-invalid @enderror"
                                            name="celular" value="{{ old('celular') }}" required autocomplete="celular"
                                            autofocus placeholder="celular">
                                        @error('celular')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password"
                                            class="form-control form-control-user @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="new-password" id="password"
                                            placeholder="Contraseña">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="password-confirm" type="password" class="form-control form-control-user"
                                            name="password_confirmation" required autocomplete="new-password"
                                            placeholder="Repetir Contraseña">
                                    </div>
                                    <input type="hidden" value="Cliente" name="rol">
                                </div>
                                <button href="login.html" class="btn btn-primary btn-user btn-block">
                                    {{ __('Register') }}
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{ route('password.request') }}">Olvidaste tu
                                    contraseña</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}">Tienes cuenta?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
