$(document).ready(function () {
    // Check Admin password correct or not
    $('#current_password').keyup(function () {
        var current_password = $('#current_password').val();

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '{{ route("admin.checkCurrentPassword") }}',
            data: { current_password: current_password },
            success: function (response) {
                if (response == "false") {
                    $('#verifiedPassword').html('Current Password is Incorrect');
                } else if (response == "true") {
                    $('#verifiedPassword').html('Current Password is Correct');
                }
            },
            error: function () {
                $('#verifiedPassword').html('Current Password is Incorrect');
            }
        });
    });
});
