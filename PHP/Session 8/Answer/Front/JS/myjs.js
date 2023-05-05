
$(document).ready(function(){
 
    const message = $('#message-alert');
    if (message) {
        setTimeout(() => message.fadeOut(1000), 4000);
    }
    
});


const links = document.getElementsByClassName('nav-link');

for(var i = 0; i < links.length; i++){
    if (links[i].href === window.location.href) {
        links[i].classList.add("active");
        links[i].setAttribute("aria-current", "page");
    }
}



