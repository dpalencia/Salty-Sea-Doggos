var scrollPosition = window.scrollY;
var ultros = document.getElementsByClassName('ultros')[0];
var ultrosPos = -567;
var ultrosOffset = window.scrollY/1.5;
ultros.style.bottom = ultrosPos + ultrosOffset + 'px';

window.addEventListener('scroll', function() {
  if(ultrosPos + ultrosOffset <= 0 && ultrosPos + ultrosOffset >= -567) {
        ultros.style.bottom = ultrosPos + ultrosOffset + 'px';
    }
  ultrosOffset = window.scrollY * 0.5;
  scrollPosition = window.scrollY;
});