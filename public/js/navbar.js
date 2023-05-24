window.addEventListener("scroll", function() {
    var bg_nav = document.getElementById("bg-nav");
    var scrolled = window.pageYOffset || document.documentElement.scrollTop;
  
    if (scrolled > 0) {
      bg_nav.classList.add("scrolled");
    } else {
      bg_nav.classList.remove("scrolled");
    }
  });

window.addEventListener("scroll", function() {
    var texto = document.getElementById("texto");
    var scrolled = window.pageYOffset || document.documentElement.scrollTop;
  
    if (scrolled > 0) {
      texto.classList.add("scrolled");
    } else {
      texto.classList.remove("scrolled");
    }
  });
  window.addEventListener("scroll", function() {
    var texto = document.getElementById("texto2");
    var scrolled = window.pageYOffset || document.documentElement.scrollTop;
  
    if (scrolled > 0) {
      texto.classList.add("scrolled");
    } else {
      texto.classList.remove("scrolled");
    }
  });
  window.addEventListener("scroll", function() {
    var texto = document.getElementById("texto3");
    var scrolled = window.pageYOffset || document.documentElement.scrollTop;
  
    if (scrolled > 0) {
      texto.classList.add("scrolled");
    } else {
      texto.classList.remove("scrolled");
    }
  });