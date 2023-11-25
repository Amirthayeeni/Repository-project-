const botchoiceview=document.getElementById("bot_choice");  // take the value form user (button)
const playerchoiceview=document.getElementById("player_choice");
const resultview=document.getElementById("result");

const possiblechoices=document.querySelectorAll('button'); 

possiblechoices.forEach(possiblechoices => possiblechoices.addEventListener
('click',(e)=>{
userchoice=e.target.id;
playerchoiceview.innerHTML=userchoice;
botchoicegen();        //-------> calling function
results();             //-------> calling function
}
))


function botchoicegen(){
const randomnumber=Math.floor(Math.random()*2)+1;  //-------->random number choosen 
if(randomnumber===1)
{
botchoosen="Rock";
}
if(randomnumber===2)
{
botchoosen="Paper";
}
if(randomnumber===3)
{
botchoosen="Sissor";
}
botchoiceview.innerHTML=botchoosen;
console.log(randomnumber);
}


function results(){
count=0;
if(botchoosen === userchoice)
{
  result="hey it's a draw, Please try again";
}

if(botchoosen ==="Rock" && userchoice ==="Paper")
{
  result="user win";
count++;
}
if(botchoosen === "Paper" && userchoice === "Sissor")
{
  result="user win";
count++;
}
if(botchoosen === "Sissor" && userchoice === "Rock")
{
  result="user win";
count++;
}
if(botchoosen === "Paper" && userchoice === "Rock")
{
  result="bot win";
}
if(botchoosen ==="Sissor" && userchoice=== "Paper")
{
  result="bot win";
}
if(botchoosen ==="Rock" && userchoice==="Sissor")
{
  result="bot win";
}
resultview.innerHTML=result;

}
function f1()

{
console.log("submit");

}







