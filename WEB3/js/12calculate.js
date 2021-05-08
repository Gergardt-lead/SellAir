console.log("HEllo World!")
function getRandomInRange(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

var numbers = document.getElementsByClassName("number");

for(x=0; x<numbers.length; x++){
    var ranX = getRandomInRange(0, numbers.length);
    if(ranX){
        numbers[x].innerHTML = getRandomInRange(1, 9);
        numbers[ranX].innerHTML = "x";
    }
}
