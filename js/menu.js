if (window.matchMedia("(min-width: 721px)").matches) {
  window.addEventListener('scroll', () => {
    var strech = document.querySelector('.slider_container');
    if (window.scrollY <= 100) {
      strech.style.marginTop = '50px';
    }
    if (window.scrollY == 0) {
      strech.style.marginTop = '0px';
    }
  });
}
window.addEventListener('load', () => {
  var dropdown = document.getElementsByClassName("dropdown");
  var  img = document.querySelector('.slider_container img');
  var images = [];
  var getSrc = document.querySelectorAll('.menu_slider');
  getSrc.forEach(src => {
    images.push(src.dataset.src);
  });
  showImg(img, images);
  automaticSlider(img, images);
  dropDownMenu(dropdown);
});


function dropDownMenu(dropdown){
  var i;

  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", (e) => {
      e.target.classList.toggle("active");
      var dropdownContent = e.target.parentNode.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
      }
    });
  }
}
