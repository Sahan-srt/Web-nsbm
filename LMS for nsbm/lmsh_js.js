var loop;
var degree;
function rotation(el,speed){

var elem = document.getElementById(el);
if (navigator.userAgent.match("chrom")) {
   elem.style.webkitTransform ="rotate("+degree+"deg)";

}else{

	elem.style.transform ="rotate("+degree+"deg)";

}

loop = setTimeout('rotateAnimation(\''+el+'\','+speed+')',speed);
degree++;
if(degree>359){

	degree=1;
}
//document.getElementById("status").innerHTML = "rotate("+degree+"deg)";
}