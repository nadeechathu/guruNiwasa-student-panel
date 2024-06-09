@extends('web.layouts.app')
@section('content')
<div class="container-fluid py-lg-5 py-3 px-lg-5">
   <div class="  " id="basicMenuList">
      <div class="row justify-content-around">
         <div class="col-lg-1"></div>
         <div class="col-lg-3 col-sm-5  col-9 ">
            <a href="" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35">
                  <div class="col-2 py-1">
                     <i class="fa fa-video fs-3 text-white"></i>
                  </div>
                  <div class="col-8 py-1">
                     <p class="font-15 text-white fw-500">Live Class</p>
                     <p class="font-15 text-white fw-500">Live Class</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-5  col-9 pt-lg-0 pt-sm-0 pt-3">
            <a href="" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35">
                  <div class="col-2 py-1">
                     <i class="fab fa-youtube fs-3 text-white"></i>
                  </div>
                  <div class="col-8 py-1">
                     <p class="font-15 text-white fw-500">Video Recoding</p>
                     <p class="font-15 text-white fw-500">Video Recoding</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-1"></div>
      </div>
      <div class="row justify-content-around pt-lg-5">
         <div class="col-lg-1"></div>
         <div class="col-lg-3 col-sm-5  col-9 pt-lg-0 pt-3">
            <a href="" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35">
                  <div class="col-2 py-1">
                     <i class="fa-solid fa-money-bill-1-wave fs-3 text-white"></i>
                  </div>
                  <div class="col-8 py-1">
                     <p class="font-15 text-white fw-500">Class Fees</p>
                     <p class="font-15 text-white fw-500">Class Fees</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-5  col-9 pt-lg-0 pt-3">
            <a href="" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35">
                  <div class="col-2 py-1">
                     <i class="fa fa-book fs-3 text-white"></i>
                  </div>
                  <div class="col-8 py-1">
                     <p class="font-15 text-white fw-500">Class Tutes & Books</p>
                     <p class="font-15 text-white fw-500">Class Tutes & Books</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-1"></div>
      </div>
      <div class="row justify-content-around pt-lg-5">
         <div class="col-lg-3 col-sm-5  col-9 pt-lg-0 pt-3">
            <a href="" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35">
                  <div class="col-2 py-1">
                     <i class="fa fa-clock fs-3 text-white"></i>
                  </div>
                  <div class="col-8 py-1">
                     <p class="font-15 text-white fw-500">Time Tables</p>
                     <p class="font-15 text-white fw-500">Time Tables</p>
                  </div>
               </div>
            </a>
         </div>
      </div>
   </div>
   <div class="  d-none" id="advaceMenuList">
      <div class="row">
         <div class="col-lg-3 col-sm-5  col-6 px-lg-5 mb-3">
            <a href="" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35">
                  <div class="col-1  py-1">
                     <i class="fa fa-video fs-3 text-white"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-15 text-white fw-500">Live Class</p>
                     <p class="font-15 text-white fw-500">Live Class</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-5  col-6 px-lg-5 mb-3">
            <a href="" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35">
                  <div class="col-1  py-1">
                     <i class="fab fa-youtube fs-3 text-white"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-15 text-white fw-500">Video Recoding</p>
                     <p class="font-15 text-white fw-500">Video Recoding</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-5  col-6 px-lg-5 mb-3">
            <a href="" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35">
                  <div class="col-1  py-1">
                     <i class="fa fa-book fs-3 text-white"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-15 text-white fw-500">Class Tutes and Books</p>
                     <p class="font-15 text-white fw-500">Class Tutes and Books</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-5  col-6 px-lg-5 mb-3">
            <a href="" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35">
                  <div class="col-1  py-1">
                     <i class="fa fa-book-open fs-3 text-white"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-15 text-white fw-500">Class Paper</p>
                     <p class="font-15 text-white fw-500">Class Paper</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-5  col-6 px-lg-5 mb-3">
            <a href="" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35">
                  <div class="col-1  py-1">
                     <i class="fa fa-video fs-3 text-white"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-15 text-white fw-500">Live Class</p>
                     <p class="font-15 text-white fw-500">Live Class</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-5  col-6 px-lg-5 mb-3">
            <a href="" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35">
                  <div class="col-1  py-1">
                     <i class="fab fa-youtube fs-3 text-white"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-15 text-white fw-500">Video Recoding</p>
                     <p class="font-15 text-white fw-500">Video Recoding</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-5  col-6 px-lg-5 mb-3">
            <a href="" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35">
                  <div class="col-1  py-1">
                     <i class="fa fa-book fs-3 text-white"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-15 text-white fw-500">Class Tutes and Books</p>
                     <p class="font-15 text-white fw-500">Class Tutes and Books</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-5  col-6 px-lg-5 mb-3">
            <a href="" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35">
                  <div class="col-1  py-1">
                     <i class="fa fa-book-open fs-3 text-white"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-15 text-white fw-500">Class Paper</p>
                     <p class="font-15 text-white fw-500">Class Paper</p>
                  </div>
               </div>
            </a>
         </div>

         <div class="col-lg-3 col-sm-5  col-6 px-lg-5 mb-3">
            <a href="" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35">
                  <div class="col-1  py-1">
                     <i class="fa fa-video fs-3 text-white"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-15 text-white fw-500">Live Class</p>
                     <p class="font-15 text-white fw-500">Live Class</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-5  col-6 px-lg-5 mb-3">
            <a href="" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35">
                  <div class="col-1  py-1">
                     <i class="fab fa-youtube fs-3 text-white"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-15 text-white fw-500">Video Recoding</p>
                     <p class="font-15 text-white fw-500">Video Recoding</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-5  col-6 px-lg-5 mb-3">
            <a href="" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35">
                  <div class="col-1  py-1">
                     <i class="fa fa-book fs-3 text-white"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-15 text-white fw-500">Class Tutes and Books</p>
                     <p class="font-15 text-white fw-500">Class Tutes and Books</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-5  col-6 px-lg-5 mb-3">
            <a href="" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35">
                  <div class="col-1  py-1">
                     <i class="fa fa-book-open fs-3 text-white"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-15 text-white fw-500">Class Paper</p>
                     <p class="font-15 text-white fw-500">Class Paper</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-5  col-6 px-lg-5 mb-3">
            <a href="" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35">
                  <div class="col-1  py-1">
                     <i class="fa fa-video fs-3 text-white"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-15 text-white fw-500">Live Class</p>
                     <p class="font-15 text-white fw-500">Live Class</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-5  col-6 px-lg-5 mb-3">
            <a href="" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35">
                  <div class="col-1  py-1">
                     <i class="fab fa-youtube fs-3 text-white"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-15 text-white fw-500">Video Recoding</p>
                     <p class="font-15 text-white fw-500">Video Recoding</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-5  col-6 px-lg-5 mb-3">
            <a href="" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35">
                  <div class="col-1  py-1">
                     <i class="fa fa-book fs-3 text-white"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-15 text-white fw-500">Class Tutes and Books</p>
                     <p class="font-15 text-white fw-500">Class Tutes and Books</p>
                  </div>
               </div>
            </a>
         </div>
         <div class="col-lg-3 col-sm-5  col-6 px-lg-5 mb-3">
            <a href="" class="hvr-shrink w-100">
               <div class="row align-items-center gradient-background-1 py-3 justify-content-around rounded-35">
                  <div class="col-1  py-1">
                     <i class="fa fa-book-open fs-3 text-white"></i>
                  </div>
                  <div class="col-10 py-1 ps-4">
                     <p class="font-15 text-white fw-500">Class Paper</p>
                     <p class="font-15 text-white fw-500">Class Paper</p>
                  </div>
               </div>
            </a>
         </div>
      </div>

   </div>
</div>
@endsection