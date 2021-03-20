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
                  <div class="col-lg-12 col-md-12 content-item content-item-1 background border-radius20" style="padding: 20px;position: relative;"> 
                     <!-- <div>
                        <p class="headBtn">アカウント作成</p> 
                     </div>  -->
                     <form method="POST" action="{{url('/inputRegular')}}" class="form__wrapper">
                        @csrf
                        <div class="row m-container" style="margin-left: 20%; margin-top: 40px">
                           <table>
                              <tr>
                                    <td>
                                       <td id="td-title">身長</td>
                                       <td><input class="form-control" type="text" name="height"></td>
                                       <td>cm</td>
                                    </td> 
                                    <td style="float: right; margin-left: 100px;">
                                       <td id="td-title">体重</td>
                                       <td><input class="form-control" type="text" name="weight"></td>
                                       <td>kg</td>
                                    </td>
                              </tr>
                              <tr style="height: 30px;"></tr>
                              <tr>
                                    <td>
                                       <td id="td-title">除脂肪量</td>
                                       <td><input class="form-control" type="text" name="fat"></td> 
                                       <td>kg</td>
                                    </td>
                                    <td style="float: right;">
                                       <td id="td-title">筋肉量</td>
                                       <td><input class="form-control" type="text" name="muscle"></td>  
                                       <td>kg</td>
                                    </td>                               
                              </tr>	
                              <tr style="height: 30px;"></tr>
                              <tr>
                                    <td>
                                       <td id="td-title">練習頻度</td>
                                       <td><input class="form-control" type="text" name="frequency"></td> 
                                       <td>回/週</td>
                                    </td>
                                    <td style="float: right;">
                                       <td id="td-title">練習時間</td>
                                       <td><input class="form-control" type="text" name="time"></td>  
                                       <td>時間/週</td>
                                    </td>                               
                              </tr>
                           </table>
                           <div style="display: block;margin-top: 250px;margin-left: 10%">
                              <button type="submit" id="submit" style="display: none;"></button>
                              <a class="nextBtn" href="javascript: $('#submit').click();" style="margin-top: 100px">Next</a>
                           </div>
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