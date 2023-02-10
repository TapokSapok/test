const checkbox = document.querySelector('.form-item-checkbox')
const btn = document.querySelector('.form-item-button-submit')

function check() {
   if (checkbox.checked) {
      btn.removeAttribute('disabled')
   } else {
      btn.toggleAttribute('disabled')
   }
}

