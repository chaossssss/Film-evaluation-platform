function getCookie(c_name){ 
	if (document.cookie.length>0){ 
		c_start=document.cookie.indexOf(c_name + "=")
		if(c_start!=-1){ 
			c_start=c_start+c_name.length+1
			c_end=document.cookie.indexOf(";",c_start)
			if(c_end==-1) c_end=document.cookie.length
				return unscape(document.cookie.substring(c_start,c_end))
		 }
	}
	return "";
}

var arr=getCookie('id');

if(arr!=''){ 
	document.getElementById("login").style.display="none";
	function creatediv(){ 
		var Div=documet.create_rElement("div");
		Div.setAttribute("id","newd");
		Div.innerHTML=arr;
	}
}


	document.getElementById("login").style.display="none";


	function changeText(){
document.getElementById("login").innerHTML = "Fred Flinstone";
}

document.getElementById("login").innerHTML="New text!";
window.onload=changeText();