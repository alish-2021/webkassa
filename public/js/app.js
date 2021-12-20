function headerFix(){
  window.onscroll = function() {
     let scrollBody = document.querySelector('header');
     if (window.pageYOffset > 0) {
        scrollBody.classList.add('fix');
     } else {
        scrollBody.classList.remove('fix');
     }
  };   
};
headerFix();


document.addEventListener("DOMContentLoaded", function(){
  console.log("hello")
});