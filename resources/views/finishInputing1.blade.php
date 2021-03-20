@extends('app')
@section('title', '先頭ページ')
@section('content')

   <!--begin::Container-->
   <div class="container">
      <!--begin::Dashboard-->
      <!--begin::Row-->
      <div class="row">
         <div class="col-xl-12">
            <!--begin::Tiles Widget 1-->
            <div class="card card-custom gutter-b card-stretch">
               <!--begin::Header-->
               <div class="card-header border-0 pt-5">
                  <div class="card-title">
                  </div>
               </div>
               <!--end::Header-->
               <!--begin::Body-->
               <div class="card-body d-flex flex-column px-0"
                  style="text-align: center; min-height:400px; margin-top: 100px">
                     <div class="col-lg-12 col-md-12 content-item content-item-1 background border-radius20">
                           <h2 class="main-title text-center dark-blue-text">入力ありがとうございました<i class="icon-xl far fa-grin" style="margin-left: 5%"></i></h2>
                           <a href='/toscreen' class="btn font-weight-bold btn-square btn-outline-dark" style="margin-top: 100px">ホー厶画面へ</a>
                     </div>
               </div>
               <!--end::Body-->
            </div>
            <!--end::Tiles Widget 1-->
         </div>
      </div>
      <!--end::Row-->
      <!--end::Dashboard-->
   </div>
   
@stop