(function () {

  const selectors = {
    form: 'form',
  };

  const init = () => {
    // get all forms
    const forms = document.querySelectorAll(selectors.form);
    // loop through each form, find all inputs and remove the default browser validation
    forms.forEach((form) => {
      form.querySelectorAll('input').forEach((input) => {
        // remove attribute 'required' from all inputs
        input.removeAttribute('required');
      });
      form.querySelectorAll('select').forEach((select) => {
        // remove attribute 'required' from all inputs
        select.removeAttribute('required');
      });
      form.querySelectorAll('textarea').forEach((textarea) => {
        // remove attribute 'required' from all inputs
        textarea.removeAttribute('required');
      });
    });

    // add event listener to form fields on focus
    forms.forEach((form) => {
      form.querySelectorAll('input').forEach((input) => {
        input.addEventListener('focus', (event) => {
          event.target.parentElement.classList.remove('has-error');
        });
      });

      form.querySelectorAll('select').forEach((select) => {
        select.addEventListener('focus', (event) => {
          event.target.parentElement.classList.remove('has-error');
        });
      });

      form.querySelectorAll('textarea').forEach((textarea) => {
        textarea.addEventListener('focus', (event) => {
          event.target.parentElement.classList.remove('has-error');
        });
      });
    });
  };

  init();
  
})();