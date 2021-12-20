@section('title', 'Создание SEO')
@extends('layouts.admin')

@section('content')

<section class="create-block">
   <div class="create">
      <form action="{{ route('seo.store') }}" method="POST" class="create__form">
         @csrf
         <div class="create__wrap">
            <p class="create__title">Заголовок превью</p>
            <input type="text" name="title" class="create__input">
         </div>
         <div class="create__wrap">
            <p class="create__title">SVG</p>
            <textarea name="svg" class="create__text"></textarea>
         </div>
         <div class="create__wrap">
            <p class="create__title">Описание</p>
            <textarea placeholder="text" name="text" class="create__text"></textarea>
         </div>
         <button class="create__btn" type="submit">Добавить <span>+</span></button>
      </form>
   </div>
</section>

@endsection
