var buttonSpinner = document.getElementById("buttonSpinner")
var buttonText = document.getElementById("buttonText")
var submitButton = document.getElementById("submit-form")
var inputNumber = document.getElementById("inputNumber")
var inputName = document.getElementById("inputName")
var inputPhone = document.getElementById("inputPhone");
var qrCode = document.getElementById("qrCode")
var $modal = $('#myModal')
var $form = $('form#rsvp-form'),
url = 'https://script.google.com/macros/s/AKfycbxvGNwm3kNjVQj5lKyCA_kDi4sFbrgfHPzd8txp1X3IghModE1RhbSuSQ/exec'

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
    buttonText.textContent = "Saving..";
    buttonSpinner.classList.remove("d-none");
    submitButton.disabled = true;
    
    $.ajax({
        url: url,
        method: "GET",
        cache: "no-cache",
        dataType: 'json',
        data: $form.serializeArray(),
        success: function(response) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                url:('/rsvp-pengajian'),
                type: 'POST',
                data: {phone : phne, name : nme, qr_code: urlqr, confirmation: cnfrm},
                success: function () {
                    document.getElementById("rsvp-form").reset();
                    buttonText.textContent = "Send";
                    buttonSpinner.classList.add("d-none");
                    submitButton.disabled = false;
                    $modal.modal('show');
                   }
                 });
            console.log(response);
            
        },
        
    })
})

$("#no").on("click", function(event) {
    document.getElementById("guests").style.display ="none";
    document.getElementById("guests-choose").value = "0";
    document.getElementById("guests-select").value = "0";
})

$("#yes").on("click", function(event) {
    document.getElementById("guests").style.display ="block";
    document.getElementById("guests-choose").value = "";
})