var buttonSpinner = document.getElementById("buttonSpinner")
var buttonText = document.getElementById("buttonText")
var submitButton = document.getElementById("submit-form")
var inputNumber = document.getElementById("inputNumber")
var inputName = document.getElementById("inputName")
var inputPhone = document.getElementById("inputPhone");
var qrCode = document.getElementById("qrCode")
var $modal = $('#myModal')
var $errormodal = $('#errorModal')
var $form = $('form#rsvp-form'),
url = 'https://script.google.com/macros/s/AKfycbxrj7OdIes6aW4fWfm0FWA3heyHkv0OY-MaltU_JtFGTheulRetI8PfDg/exec'

$("#rsvp-form").on("submit", function(e) {
    e.preventDefault();
    var rnd = Math.floor(Math.random() * 1000000000);
    inputNumber.value = rnd;
    var nme = inputName.value;
    var phne = inputPhone.value;
    var confirmCome = $("input[name=confirmation]:checked").val();
    var cnfrm = confirmCome;
    urlqr = 'https://api.qrserver.com/v1/create-qr-code/?data=' + inputNumber.value;
    qrCode.value = urlqr;
    buttonText.textContent = "Please wait..";
    buttonSpinner.classList.remove("d-none");
    submitButton.disabled = true;
    document.getElementById("inputName").setAttribute("readonly", true);
    document.getElementById("inputPhone").setAttribute("readonly", true);
    $(':radio:not(:checked)').attr('disabled', true);
    $.ajax({  
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
        url:('/rsvp-rose'),
        type: 'POST',
        data: {phone : phne, name : nme, qr_code: urlqr, confirmation: cnfrm},
        success: function(response) {
            $.ajax({
                url: url,
                method: "GET",
                cache: "no-cache",
                dataType: 'json',
                data: $form.serializeArray(),
                success: function () {
                    document.getElementById("rsvp-form").reset();
                    buttonText.textContent = "Send";
                    buttonSpinner.classList.add("d-none");
                    submitButton.disabled = false;
                    document.getElementById("inputName").removeAttribute("readonly");
                    document.getElementById("inputPhone").removeAttribute("readonly");
                    $(':radio:not(:checked)').removeAttr('disabled');
                    $modal.modal('show');
                   },
                 });     
        },
        error: function(xhr, status, error) {
            $errormodal.modal('show');
            $errormodal.on('hidden.bs.modal', function () {
                location.reload();
               })
          }
    })
    
})

$("#no").on("click", function(event) {
    document.getElementById("guests").style.display ="none";
    document.getElementById("guests-choose").value = "0";
    document.getElementById("guests-select").value = "0";
    document.getElementById("guests-select").removeAttribute("required");
})

$("#yes").on("click", function(event) {
    document.getElementById("guests").style.display ="block";
    document.getElementById("guests-choose").value = "";
    document.getElementById("guests-select").setAttribute("required", "");
})