
<?php
require_once("templates/header.php");
require_once("models/post.php");

?>

<div class="p-8 rounded shadow-2xl w-1/2 m-auto bg-slate-300 mt-10">
    <form action="/controllers/edit_post.php" method="post" class="space-y-3">
        <h2 class="text-3xl font-bold mb-4 text-purple-800 text-center">Edit your post here!!!!</h2>
        <input type="hidden" value="<?php echo $id ?>" name="itemId">
        <div>
            <label class="block mb-1 font-bold">Title</label>
            <input type="text" class="w-full border-2 p-3 rounded outline-none" name="title" value="<?php echo $item['title'] ?>">
        </div>
        <div>
            <label class="block mb-1 font-bold">Description</label>
            <textarea class="w-full border-2 p-3 rounded outline-none" name="comment" rows="4"><?php echo $item['comment'] ?></textarea>
        </div>
        <div>
            <label class="block mb-1 font-bold">Image</label>
            <img src="images/cute-girl.jpg" alt="" class="w-11/12 m-auto">
        </div>
        <div >
            <button class="block w-full bg-blue-400 p-3 mt-3 rounded text-gray-700 font-bold text-lg" type="submit">Change</button>
        </div>
    </form>
</div>