let player = 1;
var choice = "X";
var num = 0;
let run = 1;
var the = 1;
const place = ["1", "2", "3", "4", "5", "6", "7", "8", "9"];


function clicked(i) {
    if (run == 1) {
        play();
        
        let x = document.getElementsByClassName("place-holder");
        x[i].innerHTML = "<b>" + choice + "</b>";
        player++;

        update(i, choice);
        check();
        num++;
        testz();
    }
}

function play() {
    if (player % 2 == 0) {
        choice = "O";
    }
    else {
        choice = "X";
    }
}

function update(i, choice) {
    place[i] = choice;
    console.log(place);
}

function check() {
    // 0 1 2
    if (place[0] == place[1] && place[0] == place[2] ) {
        document.getElementById("win").innerHTML = "<b>Player " + choice + " won";
        run = -1;
    }
    // 3 4 5
    else if (place[3] == place[4] && place[3] == place[5]) {
        document.getElementById("win").innerHTML = "<b>Player " + choice + " won";
        run = -1;
    }
    // 6 7 8
    else if (place[6] == place[7] && place[6] == place[8]) {
        document.getElementById("win").innerHTML = "<b>Player " + choice + " won";
        run = -1;
    }
    // 0 4 8
    else if (place[0] == place[4] && place[0] == place[8]) {
        document.getElementById("win").innerHTML = "<b>Player " + choice + " won";
        run = -1;
    }
    // 2 4 6
    else if (place[2] == place[4] && place[2] == place[6]) {
        document.getElementById("win").innerHTML = "<b>Player " + choice + " won";
        run = -1;
    }
    // 0 3 6
    else if (place[0] == place[3] && place[3] == place[6]) {
        document.getElementById("win").innerHTML = "<b>Player " + choice + " won";
        run = -1;
    }
    // 1 4 7
    else if (place[1] == place[4] && place[1] == place[7]) {
        document.getElementById("win").innerHTML = "<b>Player " + choice + " won";
        run = -1;
    }
    // 2 5 8
    else if (place[2] == place[5] && place[2] == place[8]) {
        document.getElementById("win").innerHTML = "<b>Player " + choice + " won";
        run = -1;
    }
}

function reset(){
    location.reload();
}
function testz(){
    if(num>=9){
        document.getElementById("win").innerHTML = "<b>Draw";

    }
}

function theme(){
    the++;
    if(the%2==0){
    document.querySelector("*").style.backgroundColor = "black";
    document.querySelector("*").style.color = "white";
    }
    else{
        document.querySelector("*").style.backgroundColor = "white";
        document.querySelector("*").style.color = "black";
    }
}

function score(){
    if(round==1 && run == -1){
        document.getElementsById(".result").innerHTML="Win";
        document.getElementsById(".winner").innerHTML=choice;
        round++;
    }
}
