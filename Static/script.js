
document.addEventListener('DOMContentLoaded', function () {
    
    var checkbox = document.querySelector('#menuToggle input[type="checkbox"]');
    var sidebarBlur = document.querySelector('.sidebar-blur');

    checkbox.addEventListener('change', function () {
      
      if (checkbox.checked) {
       
        sidebarBlur.style.visibility = 'visible';
        sidebarBlur.style.opacity = '1';
        sidebarBlur.style.zIndex = '0';
      } else {
        
        sidebarBlur.style.visibility = 'hidden';
        sidebarBlur.style.opacity = '0';
        
      }
    });
    var header = document.querySelector('header');

    window.addEventListener('scroll', function () {
      var scrollPosition = window.scrollY;

      
      var isSticky = scrollPosition > 15;

      if (isSticky) {
        header.style.backgroundColor = 'white';
      } else {
        header.style.backgroundColor = ''; 
      }
    });
  });
