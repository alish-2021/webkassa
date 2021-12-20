@section('title', 'SEO')
@extends('layouts.admin')

@section('content')
<section class="user-block">
   <div class="user-block__wrap">
      <a href="{{ route('seo.create') }}" class="user-block__btn">Добавить SEO блок <span>+</span></a>
   </div>
   @if (session('success'))
      {{ session('success') }}
   @endif
   <div class="seo">
      @foreach ($seos as $seo)
      <p class="seo__title"></p>
      <div class="seo__wrap">
         <p class="seo__desc"></p>
         <div class="seo__links">
            <a href="{{ route('seo.create') }}" class="seo__link1">Редактировать</a>
            <a href="{{ route('seo.create') }}" class="seo__link2">Удалить</a>
         </div>
      </div>
      <p class="seo__date"></p>
      @endforeach
   </div>
</section>
<a href="{{ route('admin.index') }}" class="back-link">
   Вернуться на главную
   @include('svg.back')
</a>
@endsection