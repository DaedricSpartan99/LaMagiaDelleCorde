
function headerOver() {
    
    var ul = document.getElementById("menu");
    
    ul.style.top = '150px';
    ul.style.paddingLeft = '35%';
    ul.style.backgroundColor = 'rgba(220, 220, 220, 0.9)';
    
    var ups = ul.getElementsByClassName("up");
    var downs = ul.getElementsByClassName("down");
    var links = ul.getElementsByClassName("link");
    
    for (var i = 0; i < ups.length; i++) {
        
        ups[i].style.marginTop = '0';
        ups[i].style.marginBottom = '100px';
    }
    
    for (var i = 0; i < downs.length; i++) {
        
        downs[i].style.marginTop = '100px';
        downs[i].style.marginBottom = '0';
    }
    
    for (var i = 0; i < links.length; i++) {
        
        links[i].style.fontSize = '20pt';
    }
}

function headerExit() {
    
    var ul = document.getElementById("menu");
    
    ul.style.top = '20px';
    ul.style.paddingLeft = '38%';
    ul.style.backgroundColor = 'rgba(255, 255, 255, 0.5)';
    
    var lis = ul.getElementsByTagName("li");
    var links = ul.getElementsByClassName("link");
    
    for (var i = 0; i < lis.length; i++) {
        
        lis[i].style.marginTop = '0';
        lis[i].style.marginBottom = '0';
    }
    
    for (var i = 0; i < links.length; i++) {
        
        links[i].style.fontSize = '18pt';
    }
}