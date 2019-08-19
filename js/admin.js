function checkInputBtn(form, inputs, submit){
  var err = [];
  inputs.forEach(input => {
    input.addEventListener('focus', (e) => {
      e.target.style.border = '1px solid blue';
    });
    input.addEventListener('blur', (e) => {
      if (e.target.value.trim() == '') {
        err.push('Fields can\'t be empty');
        input.placeholder = 'Required';
        input.style.border = '2px solid red';
      }
    });
  });
  if(submit){
    submit.addEventListener('click', () => {
      if (err.length > 0) {
        err.length = 1;
        alert(err);
      }else{
        form.submit();
      }
    });
  }
}
