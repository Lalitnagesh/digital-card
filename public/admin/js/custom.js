$(document).ready(function(){
    // Check Admin password correct or not
    $('#current_password').keyup(function(){
        var curretnt_password  = $('#current_password').val();

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/check-current-pasword',
            data: { curretnt_password:curretnt_password },
            success:function(response){
                if(response == "false"){
                    $('#verifiedPassword').html('Corrent Password is Incorrect')
                }else if(response == "true"){
                    $('#verifiedPassword').val('Corrent Password is Correct')
                }
            },error:function () {
                alert('Error');
            }
        });
    });
});
