$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(".btn-submit").click(function(event){
    event.preventDefault();
    var rnd = Math.floor(Math.random() * 1000000000);
    var urlqr = 'https://api.qrserver.com/v1/create-qr-code/?data=' + rnd;
    var confirmCome = $("input[name=confirmation]:checked").val();
    var cnfrm = confirmCome;

    $.ajax({
       type:'POST',
       url:"/ajax",
       data:{qr_code: urlqr, confirmation : cnfrm},
       success:function(data){
          console.log(data);
       },
    });

});