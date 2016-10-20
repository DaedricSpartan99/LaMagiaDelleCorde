
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
        ups[i].style.marginBottom = '80px';
    }
    
    for (var i = 0; i < downs.length; i++) {
        
        downs[i].style.marginTop = '80px';
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

function hoverElement(e) {
    
    var targ;
    if (!e) var e = window.event;
    if (e.target) targ = e.target;
    else if (e.srcElement) targ = e.srcElement;
    if (targ.nodeType == 3) // defeat Safari bug
        targ = targ.parentNode;
        
    return targ;
}

/*function fakeExit(e) {
    
    var obj = e.relatedTarget;
    
    while (obj != null) {
        
        if (obj == this)
            return true;
            
        obj = obj.parentNode;
    }
    
    return false;
}*/

function linkOver(link) {
    
    link.style.color = '#FFFFFF';
    link.style.paddingLeft = '60px';
    link.style.backgroundImage = 'url(res/doppia-nota.png)';
}

function linkExit(link) {
    
    link.style.color = '#000033';
    link.style.paddingLeft = '40px';
    link.style.backgroundImage = 'url(res/nota.png)';
}

function fixMenuLi() {
    
    var lis = document.getElementById("menu").getElementsByTagName("li");
    
    for (var i = 0; i < lis.length; i++) {
        
        lis[i].onmouseover = function(e) {
            
            var link = hoverElement(e).getElementsByClassName('link')[0];
            
            if(typeof link == "undefined")
                return;
            
            linkOver(link);
        };
        
        lis[i].onmouseout = function(e) {
            
            /*if (fakeExit(e))
                return;*/
        
            var link = hoverElement(e).getElementsByClassName('link')[0];
            
            if(typeof link == "undefined")
                return;
                
            linkExit(link);
        };
        
        lis[i].onclick = function(e) {
            
            var link = hoverElement(e).getElementsByClassName('link')[0];
            
            if(typeof link == "undefined")
                return;
                
            link.click();
        };
        
        var lin = lis[i].getElementsByClassName("link")[0];
        
        lin.onmouseover = function(e) {
            
            var l = hoverElement(e);
            linkOver(l);
        };
        
        lin.onmouseout = function(e) {
        
            var l = hoverElement(e);
            linkExit(l);
        };
    }
}