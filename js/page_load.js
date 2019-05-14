
var Load;

function load_function(){
	Load = setTimeout (showPage, 3000);
}

function showPage(){
	document.getElementById("load_bar").style.display = "none";
	document.getElementById("main").style.display = "block";
}
