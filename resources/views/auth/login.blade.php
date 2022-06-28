
@include('layouts.header')

<main id="Login">
    <section class="login-container">
        <form method="post" action="{{ route('login.perform') }}">
            
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            @include('layouts.partials.messages')

            <div class="form-group mb-3">
                <label for="floatingName">Email ou Nom d'Utilisateur</label>
                <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Email ou Nom d'Utilisateur" required="required" autofocus>
                
                @if ($errors->has('username'))
                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                @endif
            </div>
            
            <div class="form-group mb-3">
                <label for="floatingPassword">Mot de passe</label>
                <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Mot de passe" required="required">
                
                @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <button type="submit" class="button-jaune" id="button-2">
                <div id="slide"></div>
                <span>SE CONNECTER</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path class="fleche" d="M504.3 273.6l-112.1 104c-6.992 6.484-17.18 8.218-25.94 4.406c-8.758-3.812-14.42-12.45-14.42-21.1L351.9 288H32C14.33 288 .0002 273.7 .0002 255.1S14.33 224 32 224h319.9l0-72c0-9.547 5.66-18.19 14.42-22c8.754-3.809 18.95-2.075 25.94 4.41l112.1 104C514.6 247.9 514.6 264.1 504.3 273.6z"/></svg>
            </button>
            
        </form>
    </section>
    <div class="images-background">
        <img class="burger" src="{{asset('images/burger-draw 1.svg')}}" alt="">
        <img class="pizza" src="{{asset('images/pizza-draw 1.svg')}}" alt="">
    </div>
</main>
@include('layouts.footer')