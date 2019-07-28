@extends('template')

@section('pageTitle', 'Iniciá sesión')

@section('mainContent')

  <section id="banner">
      <div class="container">
         <div class="sign-up-form" style="min-height: 0px">
             <a href="" class="logo"><img src="images/logo.png" alt="Dogers"/></a>
                <h2 class="text-white" style="font-size:2em">¡Sé parte de la comunidad de mascotas más grande!</h2>
                    <div class="line-divider"></div>
                        <div class="form-wrapper">
                               <p class="signup-text">Iniciá sesión y conectate con Dogers de todo el mundo </p><div class="card-body">
                                 <form class="formulario-ingreso" method="POST" action="{{ route('login') }}">
                                   @csrf
                                   <fieldset class="form-group">
                                     <label for="email">{{ __('E-Mail o Nombre de usuario') }}</label>
                                       <input id="emailUserName" type="text" class="form-control @error('emailUserName') is-invalid @enderror" name="emailUserName" value="{{ old('emailUserName') }}" required autocomplete="emailUserName" autofocus>
                                         @error('emailUserName')
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                             </span>
                                         @enderror
                                  </fieldset>
                                  <fieldset class="form-group">
                                    <label for="password">{{ __('Contraseña') }}</label>
                                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    <br>
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Recordarme') }}
                                        </label>
                                    </div>
                                  </fieldset>
                                  <button type="submit" class="btn-secondary">
                                      {{ __('Iniciar sesión') }}
                                  </button>
                                </form>
                       </div>
                        <br>
                        <br>
                          @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                              {{ __('¿Olvidaste tu contraseña?') }}
                            </a>
                          @endif
                            <a class="btn btn-link" href="{{ route('register') }}">¿No tenés cuenta?</a>
                              <img class="form-shadow" src="images/bottom-shadow.png" alt="" />
        </div>
     </div>
  </section>

  @endsection
