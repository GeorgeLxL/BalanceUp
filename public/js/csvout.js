
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
    },function sucess(data){
        alert("CSV out sucess!!")
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

