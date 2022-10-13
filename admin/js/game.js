c=0;
b=0;
var bool=0
var randomdice1=0;
var randomdice2=0;
myVar1=0;
myVar2=0;
var timer;
var d=1;
var r=1;
var timeout=0;
function abc()
{

	var a=document.getElementById("div1");
		a.style.fontSize=48;
	if (c==0)
	{
b=b+1;
		a.innerHTML=b;	
	}
	if (b==10)
	{
timeout=1;
var e=document.getElementById("lose");
	if(e.style.display == 'block'){
          e.style.display = 'none';
      }
       else{
          e.style.display = 'block';
       }
 	stopTimer();
 	stopDice();
  	document.getElementById("btn1").disabled=true;
 	document.getElementById("btn2").disabled=true;
	b=0;
	}

}
function stopTimer() {
    clearInterval(timer);
}



function rolldice1()
{
randomdice1=Math.floor(Math.random()*5);
var dice1 = document.getElementById("die1");
dice1.src="images/"+randomdice1+".jpg";

}

function rolldice2()
{
randomdice2=Math.floor(Math.random()*5);
var dice2 = document.getElementById("die2");
dice2.src="images/"+randomdice2+".jpg";
}

function diceInterval()
{
	timer = setInterval(abc, 1000);

document.getElementById("btn1").disabled=true;
	document.getElementById("btn2").disabled=false;


myVar1=setInterval(rolldice1,100);
myVar2=setInterval(rolldice2,200);
}

function stopDice()
{
	document.getElementById("btn1").disabled=false;
	document.getElementById("btn2").disabled=true;
	stopTimer();
	clearInterval(myVar1);
	clearInterval(myVar2);
	
	if (timeout==0)
	{
		
	if(randomdice1 == randomdice2)
{

	var e=document.getElementById("win");
	if(e.style.display == 'block'){
          e.style.display = 'none';
      }
       else{
          e.style.display = 'block';
       }
	stopTimer();
	document.getElementById("btn1").disabled=true;
 	document.getElementById("btn2").disabled=true;
}
else if(randomdice1 != randomdice2)
{
	
alert("Try Again!");
bool=1;

}


	}

}

function reset(){
window.location.reload(true);
}
	

function timerBlink()
{
	if (d==1)
	{
		document.getElementById("div1").style.color="red";
		d=2;
	}
	else
	{
		document.getElementById("div1").style.color="green";
		d=1;
	}
	setTimeout("timerBlink()",100);
}

