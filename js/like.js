function clickLike(){
    var post_id = $_POST['post_id'];
    var post_id = $_POST['post_id'];
    $.post("../controllers/user_like.php", { post_id: post_id },
    function(data) {
	 $('#results').html(data);
	 $('#myForm')[0].reset();
    });
}