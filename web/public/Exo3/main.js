var button = document.querySelector(".updateColor");

var divColorBlue = document.querySelector(".backgroundColorBlue")

button.addEventListener("click",function(){
    divColorBlue.classList.remove("backgroundColorBlue");
    divColorBlue.classList.add("backgroundColorGreen");
})