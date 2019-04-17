//Function to get GET method value from URL
$.urlParam = function(name){
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    if (results==null){
        return null;
    }
    else{
        return decodeURI(results[1]) || 0;
    }
}

$(document).ready(function () {

    // when the user clicks on Send Request
    $(document).on('click','.send-request',function(){
        $(this).html('Cancel Friend Request');
        $(this).removeClass('send-request');
        $(this).addClass('cancel-request');

        $.ajax({
            url: 'usersprofile.php'+'?searchkey='+$.urlParam('searchkey'),
            type: 'post',
            data: {
                'request': 0
            }
        });
    });
    //when the user clicks on Cancel Friend Request
    $(document).on('click','.cancel-request',function(){
        $(this).html('Send Request');
        $(this).removeClass('cancel-request');
        $(this).addClass('send-request');

        $.ajax({
            url: 'usersprofile.php'+'?searchkey='+$.urlParam('searchkey'),
            type: 'post',
            data: {
                'request': -1
            }
        });

    });
    //when the user clicks on Confirm Friend Request
    $(document).on('click','.confirm-request',function(){
        $.ajax({
            url: 'usersprofile.php'+'?searchkey='+$.urlParam('searchkey'),
            type: 'post',
            data: {
                'request': 1
            }
        });
        location.reload();
    });


    // when the user clicks on like
    $(document).on('click','.like',function(){
        $(this).html('Unlike');
        $(this).removeClass('like');
        $(this).addClass('unlike');
        var id = parseInt($(this).attr('class').replace(/\D/g,''),10); //Gets the id of the post

        $.ajax({
            url: 'usersprofile.php'+'?searchkey='+$.urlParam('searchkey'),
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
            url: 'usersprofile.php'+'?searchkey='+$.urlParam('searchkey'),
            type: 'post',
            data: {
                'unliked' : true,
                'postid' : id
            }
        });
    });

    //when the user clicks on Unfriend
    $(document).on('click','.unfriend',function(){
        $.ajax({
            url: 'usersprofile.php'+'?searchkey='+$.urlParam('searchkey'),
            type: 'post',
            data: {
                'unfriend': 1
            }
        });
        location.reload();
    });
});