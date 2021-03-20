$(document).ready(function() {
    $("#second").hide();
 });

 function nextPage() {
    $("#first").hide();
    $("#second").show();
 }

 function previousPage() {
    $("#second").hide();
    $("#first").show();
 }

 function end(){
    calculate();
 }

 function calculate(){
    $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
    let stapleFood = (parseInt(getradioval("foo1")) + parseInt(getradioval("foo2")) + parseInt(getradioval("foo3"))) / 2;
    let mainDish = (parseInt(getradioval("foo4")) + parseInt(getradioval("foo5")) + parseInt(getradioval("foo6")))/2;
    let sideDish = (parseInt(getradioval("foo11")) + parseInt(getradioval("foo12")) + parseInt(getradioval("foo13"))) / 2;
    let meat = getradioval("foo7") / 2;
    let seafood = getradioval("foo8") /2;
    let eggs = getradioval("foo9") / 2;
    let beans = getradioval("foo10") / 2;
    let LCvegetables = getradioval("foo14") / 2;
    let GYvegetables = getradioval("foo15") / 2;
    let mushrooms = getradioval("foo16") / 2;
    let seaweeds = getradioval("foo17") / 2;
    let potatoes = getradioval("foo18") / 2;
    let milk = getradioval("foo19") * getradioval("foo20") / 2;
    let fruit = getradioval("foo21") * getradioval("foo22") / 2;
    let sweets = getradioval("foo23") * getradioval("foo24") / 2;
    let saltSweets = getradioval("foo25") * getradioval("foo26") / 2;
    let juice = getradioval("foo27") * getradioval("foo28") / 2;
    let friedFood = getradioval("foo29") / 2;
    let fastFood = getradioval("foo30") / 2;
    let misoSoup = getradioval("foo31") / 2;
    let MenSoup = getradioval("foo32") / 2;
    let supply = getradioval("foo33") / 2;
     let _token   = $('meta[name="csrf-token"]').attr('content');

    $.post("/dietData", {
           stapleFood:stapleFood,
           mainDish:mainDish,
           sideDish:sideDish,
           meat:meat,
           seafood:seafood,
           eggs:eggs,
           beans:beans,
           LCvegetables:LCvegetables,
           GYvegetables:GYvegetables,
           mushrooms:mushrooms,
           seaweeds:seaweeds,
           potatoes:potatoes,
           milk:milk,
           fruit:fruit,
           sweets:sweets,
           saltSweets:saltSweets, 
           juice:juice,
           friedFood:friedFood, 
           fastFood:fastFood,
           misoSoup:misoSoup,
           MenSoup:MenSoup,
           supply:supply,
          _token:_token
       },
       function(res){
          if(res)
          location.href = "/finishInputing";
          else
          return;
       }
    );
 }

 function getradioval(name)
 {
    var radios = document.getElementsByName(name);
    for (var i = 0, length = radios.length; i < length; i++) {
       if (radios[i].checked)  return radios[i].value;
    }
    return 0;
 }
