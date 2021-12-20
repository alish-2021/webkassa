@section('title', 'Админ панель')
@extends('layouts.admin')

@section('content')
   <section class="welcome-block">
      <div class="welcome">
         <h1 class="welcome__title">Добро пожаловать<span>{{ Auth::user()->name }}</span></h1> 
         <a href="{{ route('index') }}" class="welcome__btn">Вернуться на сайт</a>
      </div>
   </section> 
@endsection