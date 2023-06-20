console.log('Hello world');


//game constant & variable
let scored = document.getElementById('score');
let inputDir = {x:0,y:0};
const foodSound = new Audio("food.mp3");
const gameOverSound = new Audio("gameover.mp3");
const moveSound = new Audio("move.mp3");
const sound = new Audio("music.mp3");

let speed =7;
let lastPaintTime = 0;
let snakeArr = [
    {x:13,y:15}
]
let food = {x:6,y:7};
let score =0;


 



//game function
function main(cTime){
    window.requestAnimationFrame(main);
    // console.log(cTime)
    if((cTime - lastPaintTime)/1000 < 1/speed){
        return;
    }
    lastPaintTime = cTime;
    gameEngine()
};

function isCollide(sarr){
    // if you bump your felf

    for(let i = 1; i<snakeArr.length;i++){
        if(snakeArr[i].x === snakeArr[0].x && snakeArr[i].y === snakeArr[0].y){
            return true;
        }
    }

    if(snakeArr[0].x >=18 || snakeArr[0].x <= 0 || snakeArr[0].y >=18 || snakeArr[0].y <= 0){
        return true;
    }
}

function gameEngine(){
    //part 1: upadating the sanke array and food
    if(isCollide(snakeArr)){
        gameOverSound.play();
        // sound.pause();
        inputDir = {x:0,y:0};
        alert("Game Over , prees any key to play agin");
        snakeArr = [{x:13,y:15}];
        // sound.play();
        score = 0;
        scored.innerHTML = 'score :'+ score;
    }

    // if you have eaten the food , increment the score and regnrate the food

    if(snakeArr[0].y === food.y && snakeArr[0].x === food.x ){
        snakeArr.unshift({x:snakeArr[0].x + inputDir.x,y:snakeArr[0].y + inputDir.y})
        score = score+1;
        scored.innerHTML= "score "+ score
        let a=2;
        let b=16;
        food = {x:Math.round(a+(b-a)*Math.random()),y:Math.round(a+(b-a)*Math.random())}
        foodSound.play();

    }

    //moving the sanke

    for (let i =snakeArr.length-2; i>=0; i--){
        snakeArr[i+1] = {...snakeArr[i]};
    }

    snakeArr[0].x +=inputDir.x;
    snakeArr[0].y +=inputDir.y;


    //part 2: display the sanake and food

    //display the snake
    let board = document.getElementById("board");
    board.innerHTML="";
    snakeArr.forEach((e,index)=>{
      let  snakeElemnet = document.createElement('div');
        snakeElemnet.style.gridRowStart = e.y;
        snakeElemnet.style.gridColumnStart =e.x; 
        
        if(index === 0){
            snakeElemnet.classList.add("head")
        }
        else{
            snakeElemnet.classList.add("snake")
        }
        board.appendChild(snakeElemnet);
    }) 

    //display the food

      let  foodElemnet = document.createElement('div');
        foodElemnet.style.gridRowStart = food.y;
        foodElemnet.style.gridColumnStart =food.x; 
        foodElemnet.classList.add("food")
        board.appendChild(foodElemnet);
}




//main logic start here
window.requestAnimationFrame(main);
window.addEventListener('keyup',e=>{
    inputDir = {x:0,y:1}  //strat the game
    moveSound.play();
    switch(e.key) {
        case "ArrowUp":
            // console.log("arrowUp");
            inputDir.x =0;
            inputDir.y =-1;
            break;

        case "ArrpwDown":
            // console.log("arrowDown");
            inputDir.x = 0;
            inputDir.y = 1;
            break;

        case "ArrowRight":
            // console.log("arrowRight");
            inputDir.x = 1;
            inputDir.y = 0;
            break;

        case "ArrowLeft":
            // console.log("arrowLeft");
            inputDir.x = -1;
            inputDir.y = 0;
            break;
        default:
            break;
    }
})

