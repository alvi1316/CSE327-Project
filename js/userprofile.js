$(document).ready(function () {
    // when the user clicks on Send Request
    $(document).on('click','.send-request',function(){
        $(this).html('Friend Request Sent');
        $(this).removeClass('send-request');

        /*$.ajax({
            url: 'profile.php',
            type: 'post',
            data: {
                'liked':true,
                'postid': id
            }
        });*/
    });
});