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
$(document).ready(function() {
    // when the user clicks on like
    $(document).on('click', '.like', function () {
        $(this).html('Unlike');
        $(this).removeClass('like');
        $(this).addClass('unlike');
        var id = parseInt($(this).attr('class').replace(/\D/g, ''), 10); //Gets the id of the post

        $.ajax({
            url: 'profile.php',
            type: 'post',
            data: {
                'liked': true,
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
            url: 'comment.php',
            type: 'post',
            data: {
                'unliked' : true,
                'postid' : id
            }
        });
    });
    //When user clickson comment
    $(document).on('click','#commentbtn',function () {
        var usercomment = $('#usercomment').text();

        if(usercomment==''){
            alert("Cannot share blank comment");
        }else{
            $.ajax({
                url: 'comment.php?postid='+$.urlParam('postid'),
                type: 'post',
                data: {
                    'commentbtn' : true,
                    'usercomment': usercomment
                },
                success : function () {
                    alert('Successfully posted comment');
                    $('#usercomment').val('');
                    location.reload();
                }

            });
        }
    });
});