function buttonFunction(){
    alert('Clicked');
}

function changeColor(){
    var div1 = document.getElementById('div1');
    var strColor = document.getElementById('newColor').value;
    console.log(strColor);
    div1.style.backgroundColor = strColor;
   
}