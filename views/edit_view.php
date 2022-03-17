
<?php
require_once("../templates/header.php");
require_once("../models/post.php");

?>

<div class="p-8 rounded shadow-2xl w-1/2 m-auto bg-slate-300 mt-10">
    <?php
        // Get the id of the post needed to update
        $id=$_GET['id'];
        echo $id;
        // Get data from the database of the post
        $item = getPostById($id);
    ?>
    <form action="/controllers/edit_post.php" method="post" class="space-y-3">
        <h2 class="text-3xl font-bold mb-4 text-purple-800 text-center">Edit your post here!!!!</h2>
        <input type="hidden" value="<?php echo $id ?>" name="id">
        <div>
            <label class="block mb-1 font-bold">Description</label>
            <textarea class="w-full border-2 p-3 rounded outline-none" name="post_description" rows="4"><?php echo $item['post_description'] ?></textarea>
        </div>
        <?php
        // Check for null image
        if($item['image'] != null):
        ?>
        <div> 
            <label class="block mb-1 font-bold">Image</label>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-circle m-auto mb-2 hover:text-red-700 cursor-pointer" viewBox="0 0 16 16" id="delete">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
            <img src="../<?php echo $item['image']?>" alt="" class="w-11/12 m-auto">
            <input type="hidden" name="image" value = "<?php echo $item['image']?>">
        </div>
        <?php
        endif;
        ?>
        <div >
            <button class="block w-full bg-blue-400 p-3 mt-3 rounded text-gray-700 font-bold text-lg" type="submit">Change</button>
        </div>
    </form>
</div>
<script src="../js/main.js"></script>