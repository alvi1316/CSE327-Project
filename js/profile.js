function redirectMyProfile(){
    window.location.replace("editprofile.php");
}

$(document).ready(function(){

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




});
