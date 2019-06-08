window.addEventListener('load', () => {
  var dropdown = document.getElementsByClassName("dropdown");
  showImg();
  automaticSlider();
  dropDownMenu(dropdown);
});
function showImg(){
  var i = 0;
  var images = ['../pebbles/5.jpg', '../pebbles/6.jpg', '../pebbles/9.jpg', '../pebbles/10.jpg']
  var  next_btn = document.querySelector('.next');
  var  prev_btn = document.querySelector('.previous');
  var  img = document.querySelector('.slider_container img');
  next_btn.addEventListener('click', () => {
    if (i < images.length -1) {
      i += 1;
      img.src = images[i];
    }
  });
  prev_btn.addEventListener('click', () => {
    if (i <= images.length && i > 0) {
      i = i - 1;
      img.src = images[i];
    }
  });
  img.src = images[i];
}
function automaticSlider(){
  var i = 0;
  var images = ['../pebbles/5.jpg', '../pebbles/6.jpg', '../pebbles/9.jpg', '../pebbles/10.jpg']
  var  img = document.querySelector('.slider_container img');
  setInterval(() => {
    if (i < images.length -1) {
      i += 1;
      img.src = images[i];
    }
  }, 5000)
}
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
// function menuImg(){
//   // var desc = document.querySelector('.card span');
//   // var img_menu = document.querySelector('.card img');
//   // img_menu.addEventListener('mouseover', (e) => {
//   //   img_menu.style.cursor = 'pointer';
//   //   img_menu.style.opacity = '0.4';
//   //   desc.style.display = 'block';
//   //   desc.style.position = 'absolute';
//   //   desc.style.top = '45%';
//   //   desc.style.left = '20%';
//   //   desc.style.cursor = 'pointer';
//   // });
//   // desc.addEventListener('mouseover', (e) => {
//   //   img_menu.style.cursor = 'pointer';
//   //   img_menu.style.opacity = '0.4';
//   //   desc.style.display = 'block';
//   //   desc.style.position = 'absolute';
//   //   desc.style.top = '45%';
//   //   desc.style.left = '20%';
//   // });
//   // img_menu.addEventListener('mouseleave', (e) => {
//   //   img_menu.style.cursor = 'pointer';
//   //   img_menu.style.opacity = '1';
//   //   desc.style.display = 'none';
//   //   // desc.style.position = 'absolute';
//   //   // desc.style.top = '45%';
//   //   // desc.style.left = '20%';
//   // });
//   // console.log(desc);
// }
