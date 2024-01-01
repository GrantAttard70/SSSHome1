window.addEventListener("DOMContentLoaded", (event) => {
    document.getElementById('filter_manufacturer_id').addEventListener('change', function (){

      let manufacturerid = this.value || this.options[this.selectedIndex].value;

      window.location.href = window.location.href.split("?")[0] + '?manufacturer_id=' + manufacturerid
  })
});

document.querySelectorAll('.btn-delete').forEach(button => {
  button.addEventListener('click', event => {
      event.preventDefault();
      if (confirm("Delete car?")) {
          document.getElementById('form-delete').action = button.getAttribute('href');
          document.getElementById('form-delete').submit();
      }
  });
});
