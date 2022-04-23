document.getElementById("btn1").addEventListener("click", function(){show('liantipasto', 'btn1');});
document.getElementById("btn2").addEventListener("click", function(){show('liprimo', 'btn2');});
document.getElementById("btn3").addEventListener("click", function(){show('lisecondo', 'btn3');});
document.getElementById("btn4").addEventListener("click", function(){show('licontorno', 'btn4');});
document.getElementById("btn5").addEventListener("click", function(){show('lipfreddo', 'btn5');});
document.getElementById("btn6").addEventListener("click", function(){show('lidolce', 'btn6');});

function hideall()
{
	var armenu = document.getElementsByClassName("allmenu");
	
	for(var i = 0; i < armenu.length; i++)
	{
		armenu[i].style.display="none";
	}
}

function show(x, b)
{
	hideall();
	
	var s = document.getElementsByClassName(x);
	
	for(var j = 0; j < s.length; j++)
	{
		s[j].style.display="block";
	}
	
	var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
	
	document.getElementById(b).className += " active";
}
