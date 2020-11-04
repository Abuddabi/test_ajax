$(document).ready(function(){
  $('body').on("click",'#test_id', function(e){
    e.preventDefault();
    var name = $("#name").val().trim();
    var email = $("#email").val().trim();
    var phone = $("#phone").val().trim();
    var msg = $("#msg").val().trim();
   
    // $("$validation").text("");
   
    $.ajax({
      type: 'POST',
      //url: '/en/sendmail',
      url: 'SubscribeController.php',
      headers: {
          // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      data: { 'name': name, 'email': email, 'phone': phone, 'msg': msg },
      beforeSend: function() {
        // $("#sendMail").prop("disabled", true);
      },
      success: function (data) {
        data = JSON.parse(data);

        if (data.status == "error") {
          let alertEl = $('.alert-danger');
          let alertContent = '';

          alertContent += '<p>Ошибка</p>';
          alertContent += '<ul>';
          for ( let i in data) {
            if (i == 'status') continue;
            alertContent += '<li>' + data[i] + '</li>';
          }
          alertContent += '</ul>';

          alertEl.html(alertContent);
        }
      }
      
    });
  });  
})