var Scroll = document.getElementById("Scroll");
Scroll.classList.add('Scroll_box');
Scroll.style.visibility = 'hidden';
Scroll.style.transition = '.4s';
var Scroll_visible = 100;
window.addEventListener('scroll', () => {
    if (window.scrollY > Scroll_visible) {
       
        Scroll.style.opacity = '1';
        Scroll.style.visibility = 'visible';
    }
    else {
        
        Scroll.style.opacity = '0';
        Scroll.style.visibility = 'hidden';
    
    }
})