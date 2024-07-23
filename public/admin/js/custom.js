// Check Admin password correct or not
$(document).ready(function () {
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

    $(document).on('click', '.cmsPageStatus', function () {
        var status = $(this).children('i').attr('status');
        var page_id = $(this).attr('page_id');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/update-cms-pages-status',
            data: { status: status, page_id: page_id },
            success: function (response) {
                if (response['status'] == 0) {
                    $('#page-' + page_id).html('<i class="fas fa-toggle-off" style="color:grey;" status="Inactive"></i>');
                } else if (response['status'] == 1) {
                    $('#page-' + page_id).html('<i class="fas fa-toggle-on" status="Active"></i>');
                }
            },
            error: function () {
                alert('Error');
            }
        });
    });
});


