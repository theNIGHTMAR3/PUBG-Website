//localStorage.setItem("dark",1);

function themeSwitch()
{

	var dark=parseInt(localStorage.getItem('dark'));
	
	
	if(dark===1){
		   
		   localStorage.setItem("dark",0);
		   document.getElementById('article').style.background="white";
		   document.getElementById('theme').innerHTML="dark theme";
		   document.getElementById('body').style.color="black";
		   document.getElementById('aside').style.background="white";
		   document.getElementById('napis').style.color="black";
		   document.getElementById('napis').style.borderColor="black";
		   document.getElementById('napis').style.background="white";
		   document.getElementById('clock').style.borderColor="black";
		   
		   for (let footer of document.getElementsByTagName("footer")) { footer.style.color = "white"; }
		   
		   for (let info of document.getElementsByClassName("info")) { info.style.borderColor = "black"; } 
	   }
	else{
		
		localStorage.setItem("dark",1);
		document.getElementById('article').style.background="#2F3336";
		document.getElementById('theme').innerHTML="light theme";
		document.getElementById('body').style.color="#efefef";
		document.getElementById('aside').style.background="#2F3336";
		document.getElementById('napis').style.color="white";
		document.getElementById('napis').style.borderColor="white";
		document.getElementById('napis').style.background="#2F3336";
		document.getElementById('clock').style.borderColor="white";
		
		for (let footer of document.getElementsByTagName("footer")) { footer.style.color = "white"; }
		
		for (let info of document.getElementsByClassName("info")) { info.style.borderColor = "white"; }
	}
};



function onSwitch()
{
	
	var dark=parseInt(localStorage.getItem('dark'));

	if(dark===1){
		   
		document.getElementById('article').style.background="#2F3336";
		document.getElementById('theme').innerHTML="light theme";
		document.getElementById('body').style.color="#efefef";
		document.getElementById('aside').style.background="#2F3336";
		document.getElementById('napis').style.color="white";
		document.getElementById('napis').style.borderColor="white";
		document.getElementById('napis').style.background="#2F3336";
		document.getElementById('clock').style.borderColor="white";
		
		for (let footer of document.getElementsByTagName("footer")) { footer.style.color = "white"; }
		
		for (let info of document.getElementsByClassName("info")) { info.style.borderColor = "white"; }
	   }
	else{
		
		   document.getElementById('article').style.background="white";
		   document.getElementById('theme').innerHTML="dark theme";
		   document.getElementById('body').style.color="black";
		   document.getElementById('aside').style.background="white";
		   document.getElementById('napis').style.color="black";
		   document.getElementById('napis').style.borderColor="black";
		   document.getElementById('napis').style.background="white";
		   document.getElementById('clock').style.borderColor="black";
		   
		   for (let footer of document.getElementsByTagName("footer")) { footer.style.color = "white"; }
		   
		   for (let info of document.getElementsByClassName("info")) { info.style.borderColor = "black"; } 
	}
	
	
};


