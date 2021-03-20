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
                     <div>
                        <h1 class="headBtn">毎日の記録</h1> 
                     </div> 
                     <form method="POST" action='/inputEveryday' class="form__wrapper">
                        @csrf
                        <div class="row m-container" style="margin-left: 20%; margin-top: 80px">
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
                  
@stop