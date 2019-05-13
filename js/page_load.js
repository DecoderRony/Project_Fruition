
var myVar;

function load_function(){
	myVar = setTimeout (showPage, 2000);
}

function showPage(){
	document.getElementById("load_tab").style.display = "none";
	document.getElementById("main").style.display = "block";
}
