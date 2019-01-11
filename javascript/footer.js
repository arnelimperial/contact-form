function display(){
	
	document.querySelector('.footer').style.visibility= "visible";
	document.querySelector('.footer').style.opacity= "1";
	document.querySelector('.footer').style.transition= "10s";

}

setTimeout("display()", 2000);
