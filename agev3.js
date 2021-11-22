function Agecalc(){

var yy = document.getElementById('yy').value;

var today = new Date();
var curYear = today.getFullYear();

var ageCur = curYear - yy

document.getElementById('rev').innerHTML =  ageCur + "" + "Year(s)"


}
function Ageto(){
  var dyear = document.getElementById('yy2').value;
  var tyear = document.getElementById('yy3').value

  var ageto = tyear - dyear

  document.getElementById('rev2').innerHTML =  ageto + "Years(s)"
}