window.addEventListener('scroll', (e) => {
  var navbar = document.querySelector('nav');
  var img_pos = document.querySelector('#img_pos');
  var logo = document.querySelector('.logo');
  var ul_nav = document.querySelector('.nav_ul');
  if(window.scrollY > 0){
    navbar.style.position = 'fixed';
    logo.style.margin = '0';
    logo.style.float = 'left';
    logo.style.marginRight = '640px';
    img_pos.style.width = '100px';
    ul_nav.style.display = 'block';
    ul_nav.style.float = 'left';
    ul_nav.style.paddingTop = '40px';
  }
  if(window.scrollY == 0){
    navbar.style.position = '';
    logo.style.margin = '0 auto';
    logo.style.float = 'none';
    logo.style.marginRight = '0';
    img_pos.style.width = '220px';
    ul_nav.style.display = '';
    ul_nav.style.float = '';
    ul_nav.style.paddingTop = '';
  }
});
window.addEventListener('load', () => {

});
