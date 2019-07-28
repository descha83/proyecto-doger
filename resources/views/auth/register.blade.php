@extends('template')

@section('pageTitle', '| Dogers - La red social para vos y tu mascota')

@section('content')
  @section('mainContent')
    <section id="banner">
      <div class="container">
        <div class="sign-up-form">
          <a href="" class="logo"><img src="images/logo.png" alt="Dogers"/></a>
            <h2 class="text-white" style="font-size:2em">¡Sé parte de la comunidad de mascotas más grande!</h2>
              <div class="line-divider"></div>
                <div class="form-wrapper">
                  <p class="signup-text">Registrate y conectate con Dogers de todo el mundo </p>
                    <form class="registro" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                      @csrf
                        <fieldset class="form-group">
                          <label for="name">{{ __('Nombre completo') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                              @error('name')
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                          </fieldset>
                          <fieldset class="form-group">
                            <label for="username">{{ __('Nombre de usuario') }}</label>
                              <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                @error('username')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </fieldset>
                            <fieldset class="form-group">
                              <label for="avatar">{{ __('Avatar') }}</label>
                                <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" autocomplete="avatar">
                                  @error('avatar')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                            </fieldset>
                            <fieldset class="form-group">
                              <label for="country">{{ __('País') }}</label>
                                <select id="country" type="text" class="form-control form-extras @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}" autocomplete="country">
                                  <option value="">Elegí un país</option>
                                </select>
                                    @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </fieldset>
                            <fieldset class="form-group">
                              <label for="email">{{ __('E-Mail') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                            </fieldset>
                            <fieldset class="form-group">
                              <label for="password">{{ __('Contraseña') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                  <small id="passwordHelpInline" class="text-muted" style="color:#FFFFFF">
                                    Debe tener más de 5 caracteres, las letras DH.
                                  </small>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </fieldset>
                            <fieldset class="form-group">
                              <label for="password-confirm">{{ __('Confirmar contraseña') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </fieldset>
                              <p>Al registrarte, aceptás los términos y condiciones</p>
                            <button type="submit" class="btn-secondary">{{ __('Registrarme') }}</button>
                        </form>
                       </div>
                      <a href="{{ route('login') }}" >¿Ya tenés una cuenta?</a>
                      <img class="form-shadow" src="images/bottom-shadow.png" alt="" />
                    </div>
                  </div>
                </section>
                          		<br>
                          		<br>
                          		<br>
                          		<br>
                          		<br>
                          		<br>
                          		<br>
                          		<br>
                          		<br>
                          		<br>
                          		<br>
                          		<br>
                          		<br>
                          		<br>
                          		<br>
                          		<br>
  @endsection
