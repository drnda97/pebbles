window.addEventListener('load', (e) => {
    var addNewBtn = document.querySelector('.addNewBtn');
    var secretForm = document.querySelector('.secret');
    addNewBtn.addEventListener('click', (e) => {
      e.preventDefault();
      secretForm.classList.remove('secret');
      addNewBtn.classList.add('secret');
    });

    var form = document.forms[0];
    var inputs = [].slice.call(form.elements);
    inputs.length = 3;
    var submit = document.querySelector('[name="btn"]');
    checkInputBtn(form, inputs, submit);
});
