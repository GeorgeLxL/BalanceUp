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
               <!--begin::Body-->
               <div class="card-body d-flex flex-column px-0"
                  style="text-align: center; min-height:400px">
                  <div class="col-lg-12 col-md-12 content-item content-item-1 background border-radius20" style="padding: 20px;position: relative;"> 
                     <div class="col-md-6">
                        <h1 class="headBtn" style="border-style: none none solid none">次回の食事チェックまでの目標!</h1> 
                     </div> 
                     <form method="POST" action='/savenextMeal' class="form__wrapper" style="margin-top: 50px">
                        @csrf
                        <div>
                        
                              <div style="margin-left: 10%;">
                                 <div class="row col-md-12">
                                       <div id="div-title">今回良かった料理グループ</div>
                                       <div style="margin-left: 15%">
                                          <input class="form-control-md-3" type="text" name="goodfood1">
                                          <input class="form-control-md-3" type="text" name="goodfood2">
                                          <input class="form-control-md-3" type="text" name="goodfood3">
                                       </div>
                                 </div> 
                                 <div style="height: 30px;"></div>
                                 <div class="row col-md-12">
                                       <div id="div-title">次回に向けて改善できる料理グループ</div>
                                       <div style="margin-left: 8%">
                                          <input class="form-control-md-3" type="text" name="nextfood1">
                                          <input class="form-control-md-3" type="text" name="nextfood2">
                                          <input class="form-control-md-3" type="text" name="nextfood3">
                                       </div>
                                 </div>
                                 <div style="height: 50px;"></div>
                                 <div class="col-lg-4">
                                       <div style="text-decoration:underline">次回の食事チェックまでの目標!</div> 
                                 </div> 
                                 <div style="height: 50px;"></div>
                                 <div>
                                       <div class="row col-md-12">
                                          <div>い つ</div>
                                          <input class="form-control-md-3" type="text" name="when" style="margin-left: 10%">
                                          <div style="padding-left: 20%">例）練習の前•後 ?</div>
                                       </div>
                                       <div style="height: 30px;"></div>
                                       <div class="row col-md-12">
                                          <div>どこで</div>
                                          <input class="form-control-md-3" type="text" name="where" style="margin-left: 9%">
                                          <div style="padding-left: 20%">例）家 ・練習場 ?</div>
                                       </div>
                                       <div style="height: 30px;"></div>
                                       <div class="row col-md-12">
                                          <div>何 を</div>
                                          <input class="form-control-md-3" type="text" name="how" style="margin-left: 10%">
                                          <div style="padding-left: 20%">例）どの食品を ?</div>
                                       </div>
                                       <div style="height: 70px;"></div>
                                       <div class="" style="margin-left: 30%; font-size:18px; font-weight: bold">食べることで、5 角形を大きくする! </div> 
                                 </div>
                              </div>
                              </div>
                              <div style="display: block;margin-top: 50px;margin-left: 90%">
                                 <button type="submit" id="submit" style="display: none;"></button>
                                 <a class="nextBtn" href="javascript: $('#submit').click();" style="margin-top: 100px">ホーム画面へ</a>
                              </div>
                     </form> 
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