

(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();





    const baseUrl = "{{ url('/') }}";
    async function getSubAssets(assetId) {
        try {
            let result = await fetch(`${baseUrl}/getSubAssets/${assetId}`);
            let options = await result.text();
            document.getElementById("sub_asset_id").innerHTML = options;

        } catch (error) {
            console.log(error)
        }
    }
