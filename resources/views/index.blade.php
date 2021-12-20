@section('title', 'Главная')
@extends('layouts.page')

@section('content')

<section class="banner-block mb-80">
   <div class="container">
      <div class="banner">
         <div class="banner__wrap">
            <p class="banner__subtitle">ЛУЧШЕЕ РЕШЕНИЕ, ДЛЯ ЛЮБОГО БИЗНЕСА</p>
            <h1 class="banner__title">
               Подключить <span>онлайн-кассу</span>
            </h1>
            <p class="banner__text">Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта. Вам будет необходимо предоставить исходные данные, по которым копирайтеры составят текст.</p>
            <a href="#" class="btn1">Оставить заявку</a>
            <a href="#o-kompanii" class="banner__btn yakor">
               <span></span>
               Смотреть ниже
            </a>
         </div>
         <div class="banner__img">
            <img src="{{ asset('images/banner.png') }}" alt="">
         </div>
      </div>
   </div>
</section>

<section class="o-kompanii-block mb-100" id="o-kompanii">
   <div class="container">
      <div class="o-kompanii first">
         <div class="o-kompanii__img">
            <img src="{{ asset('images/block1.png') }}" alt="">
         </div>
         <div class="o-kompanii__wrap">
            <p class="block-subtitle mb-15">ЗДЕСЬ БУДЕТ дополнительный сео текст</p>
            <p class="block-title mb-30">Ваша онлайн-касса для любой сферы бизнеса</p>
            <p>
               Мини-описание. Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта. Вам будет необходимо предоставить исходные данные, по которым наши копирайтеры составят правильный текст, который будет содержать в себе информацию о деятельности компании.
            </p>
            <p class="mb-30">
               Мини-описание. Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта. Вам будет необходимо предоставить исходные данные, по которым наши копирайтеры составят правильный текст, который будет содержать в себе информацию о деятельности компании.
            </p>
            <div class="o-kompanii__btns">
               <a href="#" class="btn1">Узнать больше</a>
               <a href="$" class="o-kompanii__btn">
                  Видео-гайд
                  @include('svg.youtube')
               </a>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="seo-block mb-100">
   <div class="container">
      <div class="block-text mb-120">
         <p class="block-subtitle">дополнительный сео текст</p>
         <p class="block-title">Сео текст преимущества</p>
      </div>
      <div class="seo">
         <div class="seo__wrap">
            <div class="seo__img">
               <p class="seo__number">01</p>
               <svg width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M1.89408 61.3773L3.54019 59.5389C3.28157 59.3073 3.07462 59.0238 2.93282 58.7069C2.79102 58.39 2.71756 58.0468 2.71721 57.6997V10.8133C2.71799 10.1591 2.97823 9.53188 3.44084 9.06926C3.90346 8.60665 4.53068 8.34641 5.18492 8.34563H36.0312V5.87793H5.18492C3.87642 5.8794 2.62193 6.39985 1.69668 7.3251C0.771432 8.25035 0.250981 9.50483 0.249512 10.8133V57.6997C0.250054 58.3938 0.396777 59.08 0.680129 59.7136C0.963481 60.3473 1.37711 60.9141 1.89408 61.3773Z" fill="#222222"/> <path d="M11.3541 14.5146H36.0311V12.0469H11.3541C10.0456 12.0483 8.79112 12.5688 7.86587 13.494C6.94062 14.4193 6.42017 15.6738 6.4187 16.9823V63.8686C6.41985 64.889 6.73668 65.8841 7.32572 66.7173C7.91476 67.5505 8.74717 68.1811 9.70876 68.5225L10.5317 66.1961C10.0508 66.0254 9.63453 65.71 9.33995 65.2933C9.04537 64.8766 8.88695 64.3789 8.8864 63.8686V16.9823C8.88718 16.328 9.14742 15.7008 9.61003 15.2382C10.0726 14.7756 10.6999 14.5154 11.3541 14.5146Z" fill="#222222"/> <path d="M57.0066 37.958H59.4743V51.5304H57.0066V37.958Z" fill="#222222"/> <path d="M22.4589 36.7246C21.7268 36.7246 21.0111 36.9417 20.4024 37.3484C19.7937 37.7552 19.3193 38.3333 19.0391 39.0096C18.7589 39.686 18.6856 40.4303 18.8285 41.1483C18.9713 41.8663 19.3238 42.5259 19.8415 43.0436C20.3592 43.5612 21.0187 43.9138 21.7367 44.0566C22.4548 44.1994 23.199 44.1261 23.8754 43.8459C24.5518 43.5658 25.1299 43.0914 25.5366 42.4826C25.9433 41.8739 26.1604 41.1583 26.1604 40.4262C26.1593 39.4448 25.769 38.5039 25.0751 37.81C24.3811 37.116 23.4403 36.7257 22.4589 36.7246ZM22.4589 41.66C22.2148 41.66 21.9763 41.5877 21.7734 41.4521C21.5705 41.3165 21.4123 41.1238 21.3189 40.8983C21.2256 40.6729 21.2011 40.4248 21.2487 40.1854C21.2963 39.9461 21.4139 39.7263 21.5864 39.5537C21.759 39.3811 21.9788 39.2636 22.2182 39.216C22.4575 39.1684 22.7056 39.1928 22.9311 39.2862C23.1565 39.3796 23.3492 39.5378 23.4848 39.7407C23.6204 39.9436 23.6927 40.1821 23.6927 40.4262C23.6924 40.7533 23.5622 41.0669 23.3309 41.2982C23.0996 41.5295 22.786 41.6596 22.4589 41.66Z" fill="#222222"/> <path d="M28.6279 36.7246H48.3695V39.1923H28.6279V36.7246Z" fill="#222222"/> <path d="M28.6279 41.6602H53.3049V44.1279H28.6279V41.6602Z" fill="#222222"/> <path d="M22.4589 49.0625C21.7268 49.0625 21.0111 49.2796 20.4024 49.6863C19.7937 50.0931 19.3193 50.6712 19.0391 51.3475C18.7589 52.0239 18.6856 52.7682 18.8285 53.4862C18.9713 54.2042 19.3238 54.8638 19.8415 55.3814C20.3592 55.8991 21.0187 56.2517 21.7367 56.3945C22.4548 56.5373 23.199 56.464 23.8754 56.1838C24.5518 55.9037 25.1299 55.4292 25.5366 54.8205C25.9433 54.2118 26.1604 53.4962 26.1604 52.7641C26.1593 51.7827 25.769 50.8418 25.0751 50.1479C24.3811 49.4539 23.4403 49.0636 22.4589 49.0625ZM22.4589 53.9979C22.2148 53.9979 21.9763 53.9255 21.7734 53.79C21.5705 53.6544 21.4123 53.4617 21.3189 53.2362C21.2256 53.0108 21.2011 52.7627 21.2487 52.5233C21.2963 52.284 21.4139 52.0641 21.5864 51.8916C21.759 51.719 21.9788 51.6015 22.2182 51.5539C22.4575 51.5063 22.7056 51.5307 22.9311 51.6241C23.1565 51.7175 23.3492 51.8757 23.4848 52.0786C23.6204 52.2815 23.6927 52.52 23.6927 52.7641C23.6924 53.0912 23.5622 53.4048 23.3309 53.6361C23.0996 53.8674 22.786 53.9975 22.4589 53.9979Z" fill="#222222"/> <path d="M28.6279 49.0625H53.3049V51.5302H28.6279V49.0625Z" fill="#222222"/> <path d="M22.4589 61.4014C21.7268 61.4014 21.0111 61.6185 20.4024 62.0252C19.7937 62.4319 19.3193 63.01 19.0391 63.6864C18.7589 64.3628 18.6856 65.107 18.8285 65.8251C18.9713 66.5431 19.3238 67.2026 19.8415 67.7203C20.3592 68.238 21.0187 68.5905 21.7367 68.7333C22.4548 68.8762 23.199 68.8029 23.8754 68.5227C24.5518 68.2425 25.1299 67.7681 25.5366 67.1594C25.9433 66.5507 26.1604 65.835 26.1604 65.1029C26.1593 64.1215 25.769 63.1807 25.0751 62.4867C24.3811 61.7928 23.4403 61.4025 22.4589 61.4014ZM22.4589 66.3368C22.2148 66.3368 21.9763 66.2644 21.7734 66.1288C21.5705 65.9933 21.4123 65.8006 21.3189 65.5751C21.2256 65.3496 21.2011 65.1016 21.2487 64.8622C21.2963 64.6229 21.4139 64.403 21.5864 64.2305C21.759 64.0579 21.9788 63.9404 22.2182 63.8928C22.4575 63.8452 22.7056 63.8696 22.9311 63.963C23.1565 64.0564 23.3492 64.2145 23.4848 64.4174C23.6204 64.6203 23.6927 64.8589 23.6927 65.1029C23.6924 65.43 23.5622 65.7437 23.3309 65.975C23.0996 66.2063 22.786 66.3364 22.4589 66.3368Z" fill="#222222"/> <path d="M28.6279 66.3369H50.8372V68.8046H28.6279V66.3369Z" fill="#222222"/> <path d="M28.6279 24.3857H36.031V26.8534H28.6279V24.3857Z" fill="#222222"/> <path d="M28.6279 29.3213H36.031V31.789H28.6279V29.3213Z" fill="#222222"/> <path d="M68.1112 0.942383H44.668C43.0324 0.94422 41.4643 1.59478 40.3077 2.75134C39.1512 3.90791 38.5006 5.47601 38.4988 7.11164V25.6194C38.5006 27.255 39.1512 28.8231 40.3077 29.9797C41.4643 31.1363 43.0324 31.7868 44.668 31.7887H50.8373V37.9579C50.8373 38.1939 50.9049 38.4249 51.0322 38.6236C51.1596 38.8223 51.3412 38.9804 51.5556 39.079C51.77 39.1776 52.0082 39.2126 52.2419 39.18C52.4756 39.1473 52.6951 39.0483 52.8742 38.8947L61.1645 31.7887H68.1112C69.7468 31.7868 71.3149 31.1363 72.4715 29.9797C73.6281 28.8231 74.2786 27.255 74.2805 25.6194V7.11164C74.2786 5.47601 73.6281 3.90791 72.4715 2.75134C71.3149 1.59478 69.7468 0.94422 68.1112 0.942383ZM71.8128 25.6194C71.8117 26.6008 71.4213 27.5416 70.7274 28.2356C70.0334 28.9295 69.0926 29.3199 68.1112 29.321H60.7081C60.4135 29.3209 60.1287 29.4263 59.905 29.618L53.305 35.2752V30.5548C53.305 30.2276 53.175 29.9137 52.9436 29.6823C52.7122 29.4509 52.3984 29.321 52.0711 29.321H44.668C43.6867 29.3199 42.7458 28.9295 42.0519 28.2356C41.3579 27.5416 40.9676 26.6008 40.9665 25.6194V7.11164C40.9676 6.13026 41.3579 5.1894 42.0519 4.49546C42.7458 3.80152 43.6867 3.41119 44.668 3.41008H68.1112C69.0926 3.41119 70.0334 3.80152 70.7274 4.49546C71.4213 5.1894 71.8117 6.13026 71.8128 7.11164V25.6194Z" fill="#222222"/> <path d="M56.3459 5.87793H55.1996C53.716 5.8796 52.2935 6.46973 51.2444 7.51885C50.1953 8.56796 49.6052 9.99039 49.6035 11.4741V13.281H52.0712V11.4741C52.0722 10.6446 52.4021 9.84949 52.9886 9.26301C53.5751 8.67653 54.3702 8.34661 55.1996 8.34563H56.3459C56.9646 8.34563 57.5695 8.52911 58.084 8.87286C58.5984 9.21662 58.9994 9.70521 59.2362 10.2769C59.473 10.8485 59.5349 11.4775 59.4142 12.0844C59.2935 12.6912 58.9956 13.2487 58.558 13.6862L56.1779 16.0663C55.6567 16.5848 55.2434 17.2014 54.9621 17.8807C54.6807 18.5599 54.5369 19.2882 54.5389 20.0234V21.918H57.0066V20.0234C57.0055 19.6124 57.0859 19.2053 57.2432 18.8256C57.4005 18.4459 57.6315 18.1011 57.9229 17.8113L60.303 15.4312C61.0857 14.6485 61.6187 13.6514 61.8346 12.5658C62.0505 11.4803 61.9397 10.3551 61.5161 9.3325C61.0926 8.30993 60.3753 7.43592 59.455 6.82101C58.5347 6.20611 57.4527 5.87791 56.3459 5.87793Z" fill="#159ED9"/> <path d="M54.5391 24.3857H57.0068V26.8534H54.5391V24.3857Z" fill="#159ED9"/> <path d="M57.0066 37.958H59.4743V51.5304H57.0066V37.958Z" fill="#222222"/> <path d="M56.8663 70.8609C56.6956 71.3418 56.3802 71.7581 55.9635 72.0527C55.5468 72.3473 55.0491 72.5057 54.5388 72.5062H17.5233C16.8691 72.5055 16.2418 72.2452 15.7792 71.7826C15.3166 71.32 15.0564 70.6928 15.0556 70.0385V31.7892H21.2248C22.5333 31.7877 23.7878 31.2672 24.7131 30.342C25.6383 29.4167 26.1588 28.1623 26.1603 26.8538V20.6845H36.0311V18.2168H24.9264C24.7644 18.2168 24.6039 18.2487 24.4542 18.3107C24.3045 18.3727 24.1685 18.4636 24.0539 18.5782L12.9493 29.6828C12.8347 29.7974 12.7438 29.9334 12.6818 30.0831C12.6198 30.2328 12.5879 30.3933 12.5879 30.5553V70.0385C12.5894 71.347 13.1098 72.6015 14.0351 73.5268C14.9603 74.452 16.2148 74.9725 17.5233 74.9739H54.5388C55.5592 74.9728 56.5543 74.656 57.3875 74.0669C58.2207 73.4779 58.8513 72.6455 59.1928 71.6839L56.8663 70.8609ZM21.2248 29.3215H16.8004L23.6925 22.4293V26.8538C23.6918 27.508 23.4315 28.1352 22.9689 28.5978C22.5063 29.0604 21.8791 29.3207 21.2248 29.3215Z" fill="#222222"/> <path d="M69.3451 53.998H36.0312C35.8076 53.9981 35.5883 54.0593 35.397 54.175V54.1739L29.2277 57.8754C29.045 57.985 28.8938 58.1401 28.7888 58.3255C28.6838 58.5109 28.6287 58.7204 28.6287 58.9335C28.6287 59.1465 28.6838 59.356 28.7888 59.5414C28.8938 59.7268 29.045 59.8819 29.2277 59.9915L35.397 63.693V63.6919C35.5883 63.8076 35.8076 63.8688 36.0312 63.8689H66.8774V65.1027C66.8771 65.4298 66.747 65.7435 66.5157 65.9748C66.2843 66.2061 65.9707 66.3362 65.6436 66.3366H53.3051V68.8043H65.6436C66.625 68.8032 67.5658 68.4128 68.2598 67.7189C68.9537 67.0249 69.344 66.0841 69.3451 65.1027V63.8689C70.6541 63.8689 71.9094 63.3489 72.835 62.4233C73.7606 61.4977 74.2805 60.2424 74.2805 58.9335C74.2805 57.6245 73.7606 56.3692 72.835 55.4436C71.9094 54.518 70.6541 53.998 69.3451 53.998ZM34.7973 57.4112V60.4557L32.2601 58.9335L34.7973 57.4112ZM37.265 56.4657H48.3697V61.4012H37.265V56.4657ZM50.8374 61.4012V56.4657H66.8774V61.4012H50.8374ZM69.3451 61.4012V56.4657C69.9996 56.4657 70.6273 56.7257 71.0901 57.1885C71.5529 57.6513 71.8128 58.279 71.8128 58.9335C71.8128 59.5879 71.5529 60.2156 71.0901 60.6784C70.6273 61.1412 69.9996 61.4012 69.3451 61.4012Z" fill="#222222"/> </svg>
            </div>
            <div class="seo__inner">
               <p class="seo__title">Заголовок преимущества</p>
               <p>Мини-описание. Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта.</p>
            </div>
         </div> 
      </div>
   </div>
</section>

@include('module.analitika')

@include('module.tarif')

<section class="o-kompanii-block mb-60">
   <div class="container">
      <div class="o-kompanii second">
         <div class="o-kompanii__wrap">
            <p class="block-subtitle mb-15">дополнительный сео тектс</p>
            <p class="block-title mb-35">
               Консалтинговые услуги в сфере налогообложения
            </p>
            <p>
               Мини-описание. Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта. Вам будет необходимо предоставить исходные данные, по которым наши копирайтеры составят правильный текст, который будет содержать в себе информацию о деятельности компании.
            </p>
            <p class="mb-40">
               Мини-описание. Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта. Вам будет необходимо предоставить исходные данные, по которым наши копирайтеры составят правильный текст, который будет содержать в себе информацию о деятельности компании.
            </p>
            <a href="#" class="btn1">Узнать больше</a>
         </div>
         <div class="o-kompanii__img">
            <img src="{{ asset('images/block2.png') }}" alt="">
         </div>
      </div>
   </div>
</section>

<section class="o-kompanii-block mb-60">
   <div class="container">
      <div class="o-kompanii third">
         <div class="o-kompanii__img">
            <img src="{{ asset('images/block3.png') }}" alt="">
         </div>
         <div class="o-kompanii__wrap">
            <p class="block-subtitle mb-15">дополнительный сео тектс</p>
            <p class="block-title mb-35">
               Оборудование для ритейла
            </p>
            <p>
               Мини-описание. Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта. Вам будет необходимо предоставить исходные данные, по которым наши копирайтеры составят правильный текст, который будет содержать в себе информацию о деятельности компании.
            </p>
            <p class="mb-40">
               Мини-описание. Это текст о компании. Он необходим для дальнейшего продвижения Вашего сайта. Вам будет необходимо предоставить исходные данные, по которым наши копирайтеры составят правильный текст, который будет содержать в себе информацию о деятельности компании.
            </p>
            <div class="o-kompanii__btns">
               <a href="#" class="btn1">Узнать больше</a>
               <a href="#" class="o-kompanii__btn">
                  Скачать прайс
                  @include('svg.doc')
               </a>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="partnery-block mb-100">
   <div class="container">
      <div class="partnery-block__wrap">
         <p class="partnery-block__title">Наши клиенты и партнеры</p>
         @include('module.partnery')
      </div>
   </div>
</section>

@endsection