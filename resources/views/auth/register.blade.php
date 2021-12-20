@section('title', 'Добавить пользователя')
@extends('layouts.admin')

@section('content')
<section class="register-block">
    <form method="POST" class="register" action="{{ route('register') }}">
        @csrf
    
        <input id="name" type="text" placeholder="ФИО" class="register__input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" >
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    
      
        <input id="login" type="text" placeholder="Логин" class="register__input @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="login">
        @error('login')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      
     
        <input id="password" type="password" placeholder="Пароль" class="register__input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror 
    
        <input id="password-confirm" type="password" placeholder="Подтверждение пароля" class="register__input" name="password_confirmation" required autocomplete="new-password">
     
        <button type="submit" class="register__btn">
            Добавить
            <span>+</span>
        </button> 
    </form>  
</section>
<a href="{{ route('admin.userIndex') }}" class="back-link">
    Вернуться назад
    @include('svg.back')
</a>
@endsection
