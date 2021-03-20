 var everydayData;
 var weekData;
 var monthlyData;
 var yearData;
 var tabId = 1;
 $(document).ready(function(){
     $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }});
     var useridinput = document.getElementById("userid")
     var userid = useridinput.value;
     $.get('/getGraphData',{userid:userid}, function sucess(result){
         everydayData = JSON.parse(result)['everydaydata'];
         everydayhData = everydayData['hdata'];
         everydaywData = everydayData['wdata'];
         everydayfData = everydayData['fdata'];
         everydaymData = everydayData['mdata'];

         var tempdata = new Array();
         for(i = 0; i<everydayhData.length; i++)
         {
            if(!everydayhData[i]) continue;
            var parts =everydayhData[i].x.split('-');
             tempdata[i] = {x:new Date(parts[0], parts[1] - 1, parts[2]),y:everydayhData[i].y};
         }
         everydayData['hdata'] = tempdata;
         var tempdata = new Array();
         for(i = 0; i<everydaywData.length; i++)
         {
            if(!everydaywData[i]) continue;
            var parts =everydaywData[i].x.split('-');
             tempdata[i] = {x:new Date(parts[0], parts[1] - 1, parts[2]),y:everydaywData[i].y};
         }
         everydayData['wdata'] = tempdata;
         var tempdata = new Array();
         for(i = 0; i<everydayfData.length; i++)
         {
            if(!everydayfData[i]) continue;
            var parts =everydayfData[i].x.split('-');
             tempdata[i] = {x:new Date(parts[0], parts[1] - 1, parts[2]),y:everydayfData[i].y};
         }
         everydayData['fdata'] = tempdata;
         var tempdata = new Array();
         for(i = 0; i<everydaymData.length; i++)
         {
            if(!everydaymData[i]) continue;
            var parts =everydaymData[i].x.split('-');
             tempdata[i] = {x:new Date(parts[0], parts[1] - 1, parts[2]),y:everydaymData[i].y};
         }
         everydayData['mdata'] = tempdata;

         weekData = JSON.parse(result)['week'];
         weekhData = weekData['hdata'];
         weekwData = weekData['wdata'];
         weekfData = weekData['fdata'];
         weekmData = weekData['mdata'];
         var tempdata = new Array();
         for(i = 0; i<weekhData.length; i++)
         {
            if(!weekhData[i]) continue;
            var parts =weekhData[i].x.split('-');
             tempdata[i] = {x:new Date(parts[0], parts[1] - 1, parts[2]),y:weekhData[i].y};
         }
        
         weekData['hdata'] = tempdata;

         var tempdata = new Array();
         for(i = 0; i<weekwData.length; i++)
         {
            if(!weekwData[i]) continue;
            var parts =weekwData[i].x.split('-');
             tempdata[i] = {x:new Date(parts[0], parts[1] - 1, parts[2]),y:weekwData[i].y};
         }
         weekData['wdata'] = tempdata;

         var tempdata = new Array();
         for(i = 0; i<weekfData.length; i++)
         {
            if(!weekfData[i]) continue;
            var parts =weekfData[i].x.split('-');
             tempdata[i] = {x:new Date(parts[0], parts[1] - 1, parts[2]),y:weekfData[i].y};
         }
         weekData['fdata'] = tempdata;
         var tempdata = new Array();
         for(i = 0; i<weekmData.length; i++)
         {
            if(!weekmData[i]) continue;
            var parts =weekmData[i].x.split('-');
             tempdata[i] = {x:new Date(parts[0], parts[1] - 1, parts[2]),y:weekmData[i].y};
         }
         weekData['mdata'] = tempdata;

         monthlyData = JSON.parse(result)['month'];
         monthlyhData = monthlyData['hdata'];
         monthlywData = monthlyData['wdata'];
         monthlyfData = monthlyData['fdata'];
         monthlymData = monthlyData['mdata'];
         var tempdata = new Array();
         for(i = 0; i<monthlyhData.length; i++)
         {
            if(!monthlyhData[i]) continue;
            var parts =monthlyhData[i].x.split('-');
             tempdata[i] = {x:new Date(parts[0], parts[1] - 1, parts[2]),y:monthlyhData[i].y};
         }
        
         monthlyData['hdata'] = tempdata;

         var tempdata = new Array();
         for(i = 0; i<monthlywData.length; i++)
         {
            if(!monthlywData[i]) continue;
            var parts =monthlywData[i].x.split('-');
             tempdata[i] = {x:new Date(parts[0], parts[1] - 1, parts[2]),y:monthlywData[i].y};
         }
         monthlyData['wdata'] = tempdata;

         var tempdata = new Array();
         for(i = 0; i<monthlyfData.length; i++)
         {
            if(!monthlyfData[i]) continue;
            var parts =monthlyfData[i].x.split('-');
             tempdata[i] = {x:new Date(parts[0], parts[1] - 1, parts[2]),y:monthlyfData[i].y};
         }
         monthlyData['fdata'] = tempdata;
         var tempdata = new Array();
         for(i = 0; i<monthlymData.length; i++)
         {
            if(!monthlymData[i]) continue;
            var parts =monthlymData[i].x.split('-');
             tempdata[i] = {x:new Date(parts[0], parts[1] - 1, parts[2]),y:monthlymData[i].y};
         }
         monthlyData['mdata'] = tempdata;

         yearData = JSON.parse(result)['year'];

         yearhData = yearData['hdata'];
         yearwData = yearData['wdata'];
         yearfData = yearData['fdata'];
         yearmData = yearData['mdata'];
         var tempdata = new Array();
         for(i = 0; i<yearhData.length; i++)
         {
            if(!yearhData[i]) continue;
            var parts = yearhData[i].x.split('-');
             tempdata[i] = {x:new Date(parts[0], parts[1] - 1, parts[2]),y:yearhData[i].y};
         }
        
         yearData['hdata'] = tempdata;

         var tempdata = new Array();
         for(i = 0; i<yearwData.length; i++)
         {
            if(!yearwData[i]) continue;
            var parts =yearwData[i].x.split('-');
             tempdata[i] = {x:new Date(parts[0], parts[1] - 1, parts[2]),y:yearwData[i].y};
         }
         yearData['wdata'] = tempdata;

         var tempdata = new Array();
         for(i = 0; i<yearfData.length; i++)
         {
            if(!yearfData[i]) continue;
            var parts =yearfData[i].x.split('-');
             tempdata[i] = {x:new Date(parts[0], parts[1] - 1, parts[2]),y:yearfData[i].y};
         }
         yearData['fdata'] = tempdata;
         var tempdata = new Array();
         for(i = 0; i<yearmData.length; i++)
         {
            if(!yearmData[i]) continue;
            var parts =yearmData[i].x.split('-');
             tempdata[i] = {x:new Date(parts[0], parts[1] - 1, parts[2]),y:yearmData[i].y};
         }
         yearData['mdata'] = tempdata;
        drawGraph();

     });
     
 });



function drawGraph() {

    var hdata;
    var wdata;
    var mdata;
    var fdata;
    var valueFormatString;
    switch(tabId)
    {
        case 1:
        {
            hdata = everydayData['hdata'];
            wdata = everydayData['wdata'];
            fdata = everydayData['fdata'];
            mdata = everydayData['mdata'];
            valueFormatString = "DD MMM";
            break;
        }
        case 2:
        {
            hdata = weekData['hdata'];
            wdata = weekData['wdata'];
            fdata = weekData['fdata'];
            mdata = weekData['mdata'];
            valueFormatString = "";
            break;
        }
        case 3:
        {
            hdata = monthlyData['hdata'];
            wdata = monthlyData['wdata'];
            fdata = monthlyData['fdata'];
            mdata = monthlyData['mdata'];
            valueFormatString = "MMM";
            break;  
        }
        case 4:
        {
            hdata = yearData['hdata'];
            wdata = yearData['wdata'];
            fdata = yearData['fdata'];
            mdata = yearData['mdata'];
            valueFormatString = "YYY";
           break; 
        }

    }
    var charth = new CanvasJS.Chart("height", {
        theme: "light2",
        title:{
            text: "身長"
        },
        axisX:{
            valueFormatString: "DD MMM",
            crosshair: {
                enabled: true,
                snapToDataPoint: true
            }
        },
        axisY: {
            title: "",
            includeZero: true,
            crosshair: {
                enabled: true
            }
        },
        toolTip:{
            shared:true
        },
        data: [{
            type: "line",
            markerType: "square",
            color: "#F08080",
            dataPoints: hdata
        }]
    });
    charth.render();

    var chartw = new CanvasJS.Chart("weight", {
        theme: "light2",
        title:{
            text: "体重"
        },
        axisX:{
            valueFormatString: "DD MMM",
            crosshair: {
                enabled: true,
                snapToDataPoint: true
            }
        },
        axisY: {
            title: "",
            includeZero: true,
            crosshair: {
                enabled: true
            }
        },
        toolTip:{
            shared:true
        },
        data: [{
            type: "line",
            markerType: "square",
            color: "#F08080",
            dataPoints: wdata
        }]
    });
    chartw.render();

    var chartf = new CanvasJS.Chart("fat", {
        theme: "light2",
        title:{
            text: "除脂肪量"
        },
        axisX:{
            valueFormatString: "DD MMM",
            crosshair: {
                enabled: true,
                snapToDataPoint: true
            }
        },
        axisY: {
            title: "",
            includeZero: true,
            crosshair: {
                enabled: true
            }
        },
        toolTip:{
            shared:true
        },
        data: [{
            type: "line",
            markerType: "square",
            color: "#F08080",
            dataPoints: fdata
        }]
    });
    chartf.render();


    var chartm = new CanvasJS.Chart("muscle", {
        theme: "light2",
        title:{
            text: "筋肉量"
        },
        axisX:{
            valueFormatString: "DD MMM",
            crosshair: {
                enabled: true,
                snapToDataPoint: true
            }
        },
        axisY: {
            title: "",
            includeZero: true,
            crosshair: {
                enabled: true
            }
        },
        toolTip:{
            shared:true
        },
        data: [{
            type: "line",
            markerType: "square",
            color: "#F08080",
            dataPoints: mdata
        }]
    });
    chartm.render();
    
}

function toogleDataSeries(e){
    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	} else{
		e.dataSeries.visible = true;
	}
    chart.render();
}

function everyday()
{
    tabId = 1;
    drawGraph();
}

function week()
{
    tabId = 2;
    drawGraph();
}

function month()
{
    tabId = 3;
    drawGraph();
}

function year()
{
    tabId = 4;
    drawGraph();
}