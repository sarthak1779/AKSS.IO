function Agecalc(){

var yy = document.getElementById('yy').value;

var today = new Date();
var curYear = today.getFullYear();

var ageCur = curYear - yy

document.getElementById('rev').innerHTML =  ageCur + "years"


}