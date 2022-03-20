// send like to database
function send_like(itemid) 
{
        $(document).ready(function() {
        $.ajax({
            url: 'controllers/user_like.php',
            type: 'POST',
            data: {
                post_id: itemid,
            },
            success: function(msg) {
                show_like(itemid);
            }               
        });
    });
}
// sho like to database
function show_like(itemid) 
{
        $(document).ready(function() {
        $.ajax({
            url: 'controllers/show_like.php',
            type: 'POST',
            data: {
                post_id: itemid,
            },
            success: function(msg) {
                // let show_like = document.getElementById('l'+itemid);
                // $("body").load(location.href, 'show_like');
                // $("#create_page").load(location.href);?
                location.reload();
            },     
        });
    });
}

