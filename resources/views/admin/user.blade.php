@section('title', 'Пользователи')
@extends('layouts.admin')

@section('content')
<section class="user-block">
   <div class="user-block__wrap">
      <a href="{{ route('admin.userCreate') }}" class="user-block__btn">Добавить пользоваттеля <span>+</span></a>
   </div>
   <div class="user">
      @foreach ($users as $user)
         <div class="user__wrap">
            <div class="user__img">
               <img src="{{ asset('images/admin/user.svg') }}" alt="">
            </div>
            <p class="user__name">{{ $user->name }}</p> 
         </div>
      @endforeach
   </div>
</section>
<a href="{{ route('admin.index') }}" class="back-link">
   Вернуться назад
   @include('svg.back')
</a>
@endsection