var plus = document.getElementById("plus");
var minus = document.getElementById("minus");
var data =0;
var product_price = 150;
plus.addEventListener("click",function(){
    
    var pulsIconData = document.getElementById("number").value;
    var num = parseFloat(pulsIconData);
    data = num +1;
    var price = data * product_price;
    console.log(price);
    document.getElementById("total").innerText = data;
    document.getElementById("number").value = data;
    document.getElementById("price").innerText = price;


});


minus.addEventListener("click",function(){
    
    var pulsIconData = document.getElementById("number").value;
    var num = parseFloat(pulsIconData);
    if(data>1){
        data = num -1;
        var price = data * product_price;
        document.getElementById("total").innerText = data;
        document.getElementById("number").value = data;
        document.getElementById("price").innerText = price;
        

    }
    


});