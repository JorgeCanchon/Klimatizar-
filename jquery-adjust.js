window.moveTo(0,0); 
if (document.all) { 
top.window.resizeTo(screen.availWidth,... 
} 
else if (document.layers||document.getElementByI... { 
if (top.window.outerHeight<screen.availHeig... 
top.window.outerHeight = screen.availHeight; 
top.window.outerWidth = screen.availWidth; 
} 
} 