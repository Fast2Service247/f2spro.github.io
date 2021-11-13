<!DOCTYPE html> 
<html> 
<head> 
<meta name="viewport" content="initial-scale=1.0, user-scalable=no"/> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
<title>Reverse Geocoding</title> 


</head> 
<body> 
<h1>show</h1>
<button id="mybtn" onclick="cmb()">button</button>
<script>
function cmb(){
if (navigator.geolocation) 
{
   navigator.geolocation.getCurrentPosition(mc);
}
else
{
   alert("your browser does not support geolocation api");
}
} 

function mc(position){
var myapi="https://api.opencagedata.com/geocode/v1/json?q="+position.coords.latitude+","+position.coords.longitude+"&key=87f70e732bbd44d984f351fc57d3e4cc";


$.get(myapi,function(data){
console.log(data);
$("h1").text(data.results[0].components.county);
});
}
</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body> 
</html>