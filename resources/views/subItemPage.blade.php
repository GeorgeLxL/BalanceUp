@extends('app')
@section('title', '先頭ページ')
@section('content')

   <!--begin::Container-->
   <div class="container">
      <!--begin::Dashboard-->
      <!--begin::Row-->
      <div class="row">
         <div class="col-md-8" style="margin-left: 17%">
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
                  <div class="col-lg-12 col-md-12 content-item content-item-1 background border-radius20"> 
                     <center style="margin-top: 80px;">
                           <a href="{{url('/everyday')}}" class="btn font-weight-bold btn-square btn-outline-dark" style="width: 150px">毎日入力</a>
                           <a href="{{url('/regular')}}" class="btn font-weight-bold btn-square btn-outline-dark" style="margin-left: 5%; width: 150px">定期サポート入力</a>
                     </center>
                     <center>
                           <a href="{{url('/history')}}" class="btn font-weight-bold btn-square btn-outline-dark" style="margin-top: 10%; width: 150px">過去の記録</a>
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
   <!--end::Container-->
               
@stop