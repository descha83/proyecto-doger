  @include('partials/head')

  <body>

    <section id="banner">
			<div class="container">

        <div class="sign-up-form">
          <a href="index.html" class="logo"><img src="images/logo.png" alt="Dogers"/></a>
          <h2 class="text-white" style="font-size:2em">¡Sé parte de la comunidad de mascotas más grande!</h2>
          <div class="line-divider"></div>
          <div class="form-wrapper">
            <p class="signup-text">Registrate y conectate con Dogers de todo el mundo </p>

    <div class="row justify-content-center">



                <div class="card-body">
                    <form class="registro"  method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="name" class="col-md-12 col-form-label">{{ __('name') }}</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-12 col-form-label">{{ __('E-Mail') }}</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-12 col-form-label">{{ __('Contraseña') }}</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-12 col-form-label">{{ __('Confirm Password') }}</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <p>Al registrarte, aceptás los términos y condiciones</p>
                            <div class="col-md-12">

                           <a href="/login">¿Ya tenés una cuenta?</a>
                         </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn-secondary">
                                    {{ __('Registrarme') }}
                                </button>
                         	     </div>

                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
