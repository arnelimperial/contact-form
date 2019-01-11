function displayAboutMe(){
	
	document.querySelector('.projects').style.opacity = "1";
	document.querySelector('.projects').style.visibility= "visible";
	document.querySelector('.projects').style.color= "#fff";
	document.querySelector('.projects').style.transition= "3s";
	document.querySelector('.projects').style.transitionDelay= "7s";
	document.querySelector('.projects').style.fontFamily= "Play, Orbitron, sans-serif";
	document.querySelector('').style.marginLeft= "13px";
	document.querySelector('.about').style.marginRight= "20px";
	document.querySelector('.about').style.textAlign= "justify";
	
	//Media query for tablets
	
	if (window.matchMedia("(min-width: 600px)").matches) {
		document.querySelector('.about').style.marginLeft= "70px";
		document.querySelector('.about').style.marginRight= "90px";
	}
	
	if (window.matchMedia("(min-width: 800px)").matches) {
		document.querySelector('.about').style.marginLeft= "100px";
		document.querySelector('.about').style.marginRight= "110px";
	}
	
	if (window.matchMedia("(min-width: 640px)").matches) {
		document.querySelector('.about').style.marginLeft= "70px";
	}
	
	if (window.matchMedia("(min-width: 1024px)").matches) {
		document.querySelector('.about').style.marginLeft= "120px";
		document.querySelector('.about').style.marginRight= "140px";
	}
	
	//Laptop
	if (window.matchMedia("(min-width: 1280px)").matches) {
		document.querySelector('.about').style.marginLeft= "210px";
		document.querySelector('.about').style.marginRight= "150px";
	}
	
	if (window.matchMedia("(min-width: 1440px)").matches) {
		document.querySelector('.about').style.marginLeft= "230px";
		document.querySelector('.about').style.marginRight= "280px";
	}
	
}
setTimeout("displayAboutMe()", 4000);




