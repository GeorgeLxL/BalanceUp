@extends('app')
@section('title', '先頭ページ')
@section('content')
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/playerList.js')}}"></script>

   <!--begin::Container-->
   <div class="container">
      <!--begin::Dashboard-->
      <!--begin::Row-->
      <div class="row">
         <div class="col-xl-12">
            <!--begin::Tiles Widget 1-->
            <div class="card card-custom gutter-b card-stretch" id="kt_page_stretched_card">
               <!--begin::Body-->
               <div class="card-body d-flex flex-column px-0"
                  style="text-align: center; min-height:400px">
                  <div class="row col-md-12">
                     <a href="/outputCSV" class="headBtn col-sm-2" style="border-style: solid solid solid solid; margin-left: 3%">CSV出力へ</a>
                  </div>
                  <div class="card-scroll col-md-10" id="staffinfo" style="font-size:18px; margin-left: 10%;margin-top: 50px">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-3 form-group"> 	<!--		Show Numbers Of Rows 		-->
                              <select class  ="form-control" name="state" id="maxRows">
                                 <option value="5000">Show ALL Rows</option>
                                 <option value="5">5</option>
                                 <option value="10">10</option>
                                 <option value="15">15</option>
                                 <option value="20">20</option>
                                 <option value="50">50</option>
                                 <option value="70">70</option>
                                 <option value="100">100</option>
                              </select>
                           </div>
                           <div style="padding-top:10px">
                              <h6 class="">:列数</h6>
                           </div>
                        </div>
                        <table id="table-id" class="table table-bordered gridview">
                           <thead>
                                 <tr>
                                    <th>ユーザー識別子</th>
                                    <th>食事チェック結果</th>
                                    <th style="padding-left:100px">からだの変化</th>
                                 </tr>
                           </thead> 
                           <tbody>
                              @isset($playerlist)
                                    @foreach($playerlist as $value)
                                       <tr>
                                          <td> {{ $value->userid }} </td>
                                          <td><a href="{{url('/finishInputing/'.$value->userid)}}">食事チェック結果</a></td>
                                          <td><a href="{{url('/viewGraph/'.$value->userid)}}">からだの変化</a></td>
                                       </tr>
                                    @endforeach
                              @endisset
                           </tbody>          
                        </table>
                        <div class='pagination-container' >
                           <nav>
                              <ul class="pagination">
                                 <li data-page="prev" >
                                    <span><span class="sr-only">(current)</span></span>
                                 </li>
                                    <!--	Here the JS Function Will Add the Rows -->
                                 <li data-page="next" id="prev">
                                    <span><span class="sr-only">(current)</span></span>
                              </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
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