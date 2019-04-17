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

    // when the user clicks on like
    $(document).on('click','.like',function(){
        $(this).html('Unlike');
        $(this).removeClass('like');
        $(this).addClass('unlike');
        var id = parseInt($(this).attr('class').replace(/\D/g,''),10); //Gets the id of the post

        $.ajax({
            url: 'profile.php',
            type: 'post',
            data: {
                'liked':true,
                'postid': id
            }
        });
    });


    //when the user clicks on unlike
    $(document).on('click','.unlike',function(){
        $(this).html('Like');
        $(this).removeClass('unlike');
        $(this).addClass('like');
        var id = parseInt($(this).attr('class').replace(/\D/g,''),10); //Gets the id of the post

        $.ajax({
            url: 'profile.php',
            type: 'post',
            data: {
                'unliked' : true,
                'postid' : id
            }
        });
    });
    //when the user clicks on comment
    $(document).on('click','.comment',function(){
        var id = parseInt($(this).attr('class').replace(/\D/g,''),10); //Gets the id of the post
        window.location.href = "comment.php?postid="+id;

    });


});