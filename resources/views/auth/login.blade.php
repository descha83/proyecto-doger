
@include('partials/head')
<body>
	<section id="banner">

<div class="container">

  <div class="sign-up-form" style="min-height: 0px">
    <a href="index.html" class="logo"><img src="images/logo.png" alt="Dogers"/></a>
    <h2 class="text-white" style="font-size:2em">¡Sé parte de la comunidad de mascotas más grande!</h2>
    <div class="line-divider"></div>
    <div class="form-wrapper">
      <p class="signup-text">Iniciá sesión y conectate con Dogers de todo el mundo </p>

      <form class="formulario-ingreso" method="POST" action="{{ route('login') }}">
          @csrf

          <div class="invalid-feedback">

          </div>
          <br>
        <fieldset class="form-group">


          <div class="form-group row">
              <label for="email" class="col-md-12 col-form-label">{{ __('Usuario/e-mail') }}</label>

              <div class="col-md-12">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          <div class="invalid-feedback">
          </div>
        </fieldset>

        <div class="invalid-feedback">

        </div>
        <br>
        <fieldset class="form-group">
          <div class="form-group row">
              <label for="password" class="col-md-12 col-form-label">{{ __('Contraseña') }}</label>

              <div class="col-md-12">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
                </fieldset>
                <div class="invalid-feedback">

  							</div>

                        <br>
                    <fieldset class="form-group">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordarme') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                          </fieldset>
                          <div class="invalid-feedback">

            							</div>
            							<br>

													                                @if (Route::has('password.request'))
													                                    <a class="btn btn-link" href="{{ route('password.request') }}">
													                                        {{ __('¿Olvidaste tu contraseña?') }}
													                                    </a>
													                                @endif

													                                <br>
													                        				<br>
													                        				<a href="index.php">¿No tenés cuenta?</a>
                    <fieldset class="form-group">
                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button class="btn-secondary" type="submit" class="btn btn-primary">

                                    {{ __('Iniciar sesión') }}
                                </button>


                                  </fieldset>
                                  <div class="invalid-feedback">

                    							</div>
                    							<br>
                            </div>
                        </div>
                    </form>
                </div>
          </div>
    </div>
</div>

</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</body>
</div>

</html>
