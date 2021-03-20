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
                  <!--begin::Body-->
                  <div class="card-body d-flex flex-column px-0"
                     style="text-align: center; min-height:400px">
                     <div class="col-lg-12 col-md-12 content-item content-item-1 background border-radius20">     
                              <p  style="margin-left: 75%; width: 150px">スタッフ用画面</p>
                        <center style="margin-top: 80px;">
                              <a href="{{url('/playerlist')}}" class="btn btn-square btn-outline-dark" style="width: 150px; font-size: 28px; font-weight: bold">選手情報</a>
                        </center>
                        <center>
                              <a href="{{url('/outputCSV')}}" class="btn font-weight-bold btn-square btn-outline-dark" style="margin-top: 10%; width: 150px">CSV出力</a>
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