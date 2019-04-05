$(document).ready(function () {

    $(document).on('click','#postbtn',function () {

        var userpost = $('#userpost').text();

        if(userpost==''){
            alert("Cannot post blank status");
        }else{
            $.ajax({
                url: 'newsfeed.php',
                type: 'post',
                data: {
                    'postbtn' : true,
                    'userpost': userpost
                },
                success : function () {
                    alert('Successfully posted status');
                    $('#userpost').val('');
                }

            });
        }


    });



});