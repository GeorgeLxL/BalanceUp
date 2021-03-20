@extends('app')
@section('title', '先頭ページ')
@section('content')
<script src="{{asset('js/jquery.min.js')}}"></script>
<script>
        
    function senddata(){
        var checkbox = document.getElementsByName("users");
        var diet = document.getElementById("saveDiet");
        var change = document.getElementById("saveChange");
        var startyear = document.getElementById("startyear").value;
        var endyear = document.getElementById("endyear").value;
        var userlist = new Array();
        var dietData = diet.checked ? 1 : 0;
        var changeData= change.checked ? 1 : 0;

        for(var i=0; i<checkbox.length;i++)
        {
            if(checkbox[i].checked)
            {
            
                userlist.push(checkbox[i].id);
            }
        }
        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
        $.post("/saveCSV",{
            startyear:startyear,
            endyear:endyear,
            userlist:userlist,
            dietData:dietData,
            changeData:changeData
        },function sucess(response){
            const data = JSON.parse(response);
            for(i=0;i<data.length; i++)
            {
                url=  "{{url('/')}}/CSV/" + data[i];
                const link = document.createElement('a');
                 link.setAttribute('href', url);
                 link.setAttribute('download', data[i]);
                 link.click();    
            }
            
                       
        });

    }

    function setall()
    {
    var allcheck=document.getElementById("allcheck");
    var checkbox = document.getElementsByName("users");
        if(allcheck.checked)
        {
            for(var i=0; i<checkbox.length;i++)
            {
                checkbox[i].checked=true;                
            }
        }
        else
        {
            for(var i=0; i<checkbox.length;i++)
            {
                checkbox[i].checked=false;                
            }
        }
    }


</script>

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
                                                <h1 class="headBtn col-sm-4"
                                                    style="border-style: solid solid solid solid; margin-left: 3%">ページ12
                                                    csv出力選択画面</h1>
                                            </div>
                                            <form method="POST" class="form" action="{{ url('/userinfocheck') }}" id="kt_login_signin_form">
                                                @csrf
                                                <div class="row col-md-12" style="margin-left:10%; margin-top: 50px">
                                                    <a style="padding-top:10px">期間</a>
                                                    <div class="col-md-3">
                                                        <input id ="startyear" class="form-control" type="text" name="">
                                                    </div>
                                                    <a style="padding-top:10px">年</a>
                                                    <a style="float: right; margin-left: 50px;">
                                                    <a style="padding-top:10px"> ~ </a>
                                                    <div class="col-md-3" style="margin-left:5%">
                                                        <input id="endyear" class="form-control" type="text" name="">
                                                    </div>
                                                    <a style="padding-top:10px">年</a>
                                                </div>
                                                <div class="card-scroll col-md-12" id="staffinfo" style="font-size:18px; margin-left: 10%;margin-top: 50px">
                                                    <div class="container">
                                                    <h3 style="text-align:left">選手</h3>
                                                        <div class="row col-md-12">
                                                            @isset($stafflist)
                                                                @foreach($stafflist as $value)
                                                                <div class="row col-md-4">
                                                                    <div> <input name="users" id="{{$value->userid}}" type="checkbox"> 
                                                                    </div>
                                                                    <div style="margin-left: 10%; text-decoration:underline">
                                                                        {{ $value->name }} 
                                                                    </div>
                                                                </div>
                                                                @endforeach
                                                            @endisset
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-left: 80%">
                                                    <input id="allcheck" type="checkbox" class="" style="margin-top:3px" onclick="setall()"> 
                                                    <a style="margin-left: 5%">全て選択</a>
                                                </div>
                                                <div class="row" style="margin-left: 10%;margin-top:10px">
                                                    <h3 style="margin-left: 15%">項目</h3>
                                                    <input id="saveDiet" type="checkbox" class="" style="margin-top:5px; margin-left:5%"> 
                                                    <h3 style="margin-left: 1%; text-decoration:underline">食事チェック結果</h3>
                                                    <input id="saveChange" type="checkbox" class="" style="margin-top:5px; margin-left:10%"> 
                                                    <h3 style="margin-left: 1%; text-decoration:underline">からだの変化</h3>
                                                </div>
                                                <div style="display: block;margin-top: 10px;margin-left: 80%">
                                                    <a href="#" class="nextBtn" onclick="senddata()" style="text-decoration:underline;font-size:18px">ダウンロード</a>
                                                </div>
                                            </form>
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