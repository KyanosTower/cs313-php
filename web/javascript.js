function clickMe(){
    alert("Clicked!");
}

function changeColor(){
    var div = document.getElementById('div1');
    var color = document.getElementById('textColor').value;
    div.style.backgroundColor = color;
}