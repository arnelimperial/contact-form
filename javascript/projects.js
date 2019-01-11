function display(){
	
	document.querySelector('#main').style.opacity = "1";
	document.querySelector('#main').style.visibility= "visible";
	document.querySelector('#main').style.color= "#222";
	document.querySelector('#main').style.transition= "5s";
	document.querySelector('#main').style.webkitTransition= "5s";
	document.querySelector('.footer1').style.transitionDelay= "5s";
	document.querySelector('.footer1').style.webkitTransitionDelay= "5s";
	document.querySelector('#main').style.fontFamily= "Oswald, Play, sans-serif";
	//document.querySelector('.footer').style.position= "fixed";
	/*document.querySelector('.contact').style.padding= "10px";
	document.querySelector('.contact').style.outline= "0";
	document.querySelector('.contact').style.backgroundColor= "#19071a";
	document.querySelector('.contact').style.borderRadius= "4px";*/
	document.querySelector('.footer1').style.visibility= "visible";
	document.querySelector('.footer1').style.opacity= "1";
	document.querySelector('.footer1').style.transition= "7s";
	document.querySelector('.footer1').style.webkitTransition= "7s";
	
	
	
	/*
	if (window.matchMedia("(min-width: 360px)").matches) {
		document.querySelector('.aside').style.marginLeft= "0px";
	}*/
	
	
	//Media query for tablets
	
	/*if (window.matchMedia("(min-width: 600px)").matches) {
		document.querySelector('.about').style.marginLeft= "70px";
		document.querySelector('.about').style.marginRight= "90px";
		document.querySelector('.aside').style.marginTop= "15px";
		document.querySelector('.aside').style.paddingRight= "0px";
		document.querySelector('.aside').style.paddingTop= "0px";
		
	}
	
	if (window.matchMedia("(min-width: 800px)").matches) {
		document.querySelector('.about').style.marginLeft= "100px";
		document.querySelector('.about').style.marginRight= "110px";
	}
	
	if (window.matchMedia("(min-width: 640px)").matches) {
		document.querySelector('.about').style.marginLeft= "70px";
	}
	
	if (window.matchMedia("(min-width: 1024px)").matches) {
		document.querySelector('.about').style.marginLeft= "130px";
		document.querySelector('.about').style.marginRight= "240px";
	    document.querySelector('.about').style.textAlign= "justify";

		
	
		
	}
	
	//Laptop
	if (window.matchMedia("(min-width: 1280px)").matches) {
		document.querySelector('.about').style.marginLeft= "210px";
		document.querySelector('.about').style.marginRight= "350px";
		

		
		}
	
	if (window.matchMedia("(min-width: 1440px)").matches) {
		document.querySelector('.about').style.marginLeft= "230px";
		document.querySelector('.about').style.marginRight= "440px";
	}*/
	
}
setTimeout("display()", 2000);




