window.addEventListener('scroll', () => {
  var strech = document.querySelector('.contact');
  if (window.scrollY <= 100) {
    strech.style.marginTop = '230px';
  }
  if (window.scrollY == 0) {
    strech.style.marginTop = '0px';
  }
});
