var messages =document.getElementById("messList");
var textInput =document.getElementById("resizable");
var messBut =document.getElementById("messBut");
var i=1;
messBut.addEventListener("click", function()
{
	
	parseInt(i);
	var newMessage=document.createElement("li");
	newMessage.innerHTML=textInput.value;
	messages.appendChild(newMessage);
	sessionStorage.setItem(i, textInput.value);
	textInput.value="";
	i++;
	
});