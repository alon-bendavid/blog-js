let playerName = document.getElementById("player").value;
console.log(playerName);
// let speed =  1000; 
let interval;
//set the player OBJ
let player = {
user:  playerName,   
speed:   parseInt(localStorage.getItem('speed')) || 1000, 
count:  parseInt(localStorage.getItem('count')) || 0,  
}
localStorage.setItem(playerName, JSON.stringify(player));
let storedPlayer = JSON.parse(localStorage.getItem(playerName));
console.log("storedPlayer.speed"+storedPlayer.speed);
let message = document.getElementById("message");

//Set the credit price
let price1 = 5;
let price2 = 25;
let price3 = 30;


//increasces the speed by precantge - bonus advantage
let speed1 = 0.1;
let speed2 = 0.15;
let speed3 = 0.2;

//buttons selcotrs
const delCredit =document.getElementById("delCredit");
const delSpeed =document.getElementById("delSpeed");

const laborClick = document.getElementById("laborClick");
const bonus1 = document.getElementById("bonus1");
const bonus2 = document.getElementById("bonus2");
const bonus3 = document.getElementById("bonus3");
//print price into the buttons
bonus1.innerHTML = "Price: "+ price1 + "<br>Speed increase by "+speed1*100+"%";

bonus2.innerHTML ="Price: "+ price2 + "<br>Speed increase by "+speed2*100+"%";
bonus3.innerHTML = "Price: "+ price3 + "<br>Speed increase by "+speed3*100+"%";


// increase credit by menual clicking
laborClick.addEventListener("click",()=>{
     player.count += 1;
counter.innerHTML =   "Bugette Created: "+ player.count;

})
//Delte the credit
delCredit.addEventListener("click",()=>{
    player.count = 0;
counter.innerHTML =   player.count;

})
//Delte the speed bonus
delSpeed.addEventListener("click",()=>{
    player.speed = 0;
localStorage.setItem('speed', player.speed.toString());
location.reload();

// counter.innerHTML =   player.count;

})

//when the person choose a bonus he is being charged and getting speed advantage
///////bonus 1/////////
bonus1.addEventListener("click",()=>{
    if (player.count>=price1){
        message.innerHTML = "You just got yourself- "+speed1*100+"% speed advantge "
        player.count = player.count-price1;
  
        clearInterval(interval);
        speedTime(speed1);
        interval =  setInterval(gameLoop,player.speed);

        localStorage.setItem('speed', player.speed.toString());

        console.log(player.speed);
        setTimeout(() => {
            message.innerHTML = "";
        }, 2000);
            }else{
                message.innerHTML = "Not enough credit!"
            }
})
///////bonus 2/////////
bonus2.addEventListener("click",()=>{
    if (player.count>=price2){
        message.innerHTML = "You just got yourself- "+speed2*100+"% speed advantge "

        player.count = player.count-price2;
        console.log(player.count);
        clearInterval(interval);
        speedTime(speed2);
        interval =  setInterval(gameLoop,player.speed)
        localStorage.setItem('speed', player.speed);
        setTimeout(() => {
            message.innerHTML = "";
        }, 2000);

            }else{
                message.innerHTML = "Not enough credit!"
            }
})
///////bonus 3/////////
bonus3.addEventListener("click",()=>{
    if (player.count>=price3){
        message.innerHTML = "You just got yourself- "+speed3*100+"% speed advantge "

        player.count = player.count-price3;
        console.log(player.count);
        clearInterval(interval);
        speedTime(speed3);
       interval =  setInterval(gameLoop,player.speed)
        localStorage.setItem('speed', player.speed.toString());
        setTimeout(() => {
        message.innerHTML = "";
        }, 2000);

        }else{
            message.innerHTML = "Not enough credit!"
        }  
    
    
})


//keep update the value with 1 point increacment
function gameLoop(){
player.count += 1;
counter.innerHTML = "Baguettes Created: "+ player.count;
localStorage.setItem('count', player.count.toString());

}

function speedTime(precenatge){
  return  player.speed -= precenatge*player.speed;
   
}
//Starting the game
if(!interval){
    interval = setInterval(gameLoop,player.speed);
    
}

localStorage.setItem('speed', player.speed.toString());//reset the speed

