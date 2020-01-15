function buttonFunction(){
    alert('Clicked');
}

function changeColor(){
    //updating the backgroundcolor using js vanilla
    var div1 = document.getElementById('div1');
    var strColor = document.getElementById('newColor').value;
    console.log(strColor);
    div1.style.backgroundColor = strColor;
    //Same process with text using jQuery
    var textColor = $("#textColor").val(); 
    console.log(textColor);
   $("#div1").css('color', textColor);

}
function hide(){
    var div3 = $("#div3").toggle(1000);
    $("#hideBtn").text("Show me");

    // if(div2.style.display="none"){
    //     $("#hideBtn").text("Show me");
    // } else{
    //         $("#hideBtn").text("Hide me");
    // }
    }