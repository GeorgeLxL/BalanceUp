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
                  style="text-align: center; min-height:400px">
                  <div class="row">
                     <div class="col-sm-4"></div>
                     <div class="col-sm-4"><img src="{{asset('others/assets/media/logos/logo_black.png')}}"
                           style="width: 100%;"></div>
                     <div class="col-sm-4"></div>
                  </div>
                  <div>
                     <center style="margin-top: 215px;">
                        <a href="{{url('/player')}}"><span class="btn btn-info btn-lg"
                              style="min-width: 100px">選手</span></a>
                        <a href="{{url('/staff')}}"><span class="btn btn-primary btn-lg"
                              style="border-radius: 5px; min-width: 100px">スタッフ</span></a>
                     </center>
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