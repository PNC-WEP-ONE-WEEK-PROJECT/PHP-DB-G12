
<?php
require_once('templates/header.php');
require_once('models/post.php');
require_once('views/create_post.php');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php 
$items = getItems();
foreach ($items as $item):
?>

<div class="mt-5 block max-w-xl mx-96 rounded-lg bg-white ring-1 ring-slate-900/5 shadow-lg space-y-3">
   <div class="header p-4 pb-0">
        <ul role="list" class="p-0 divide-y divide-slate-200">
            <li class="flex py-4 first:pt-0 last:pb-0">
                <img class="object-cover h-14 w-14 rounded-full" src="<?= $item['profile'] ?>" alt="" width=""/>
                <div class="ml-3 overflow-hidden w-1/2">
                    <p class="text-lg font-bold text-slate-900"><?= $item['username'] ?></p>
                    <p class="text-sm text-slate-500 truncate"><?= date("F jS, Y", strtotime($item['post_date'])) ." at ". date("g:iA", strtotime($item['post_date'])); ?></p>
                </div>
                <div class="text-right w-1/2 relative">
                    <i onclick="" class="control-post fa fa-ellipsis-h cursor-pointer text-blue-400" style="font-size:25px"></i>
                    <div style="display: none;" class="post-control origin-top-right absolute right-0 mt-2 w-36 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <a href="views/edit_view.php?id= <?= $item['post_id']?>" class="hover:text-blue-400 text-center block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">
                            <i class="fa fa-edit" style="font-size:25px"></i>
                            Edit Post
                        </a>
                        <a href="controllers/delete_post.php?id=<?= $item['post_id']?>" onclick="return confirm('Are you sure to delete?')" class="hover:text-blue-400 text-center block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1">
                            <i class="fa fa-trash-o" style="font-size:25px"></i>
                            Delete Post
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
   <div class="body">
       <p class="p-4 pt-0 text-gray-600"><?= $item['post_description'] ?></p>
       <?php  
            if($item['image']!=null){
       ?>
        <div class="aspect-w-4 aspect-h-5 sm:overflow-hidden lg:aspect-w-3 lg:aspect-h-4">
            <img src="<?= 'images/' .$item['image'] ?>" alt="" class="w-full h-full object-center object-cover">
        </div>
        <?php 
            }
        ?>
   </div>
   <div class="footer text-gray-600">
       <div class="amout-of-like flex w-full justify-between p-2">
           <div class="like-number flex items-center">1.5K 
                <svg class="w-7 h-7 ml-2"  xmlns="http://www.w3.org/2000/svg" viewBox="-9.31019674359186 -9.31019674359186 200.60019674359185 200.59919674359185"><linearGradient id="a" x1="47.061%" x2="47.061%" y1="-3.394%" y2="96.606%"><stop offset="0" stop-color="#37aeff"/><stop offset=".05" stop-color="#37aeff"/><stop offset="1" stop-color="#1861f7"/></linearGradient><g fill="none"><path d="M0 95.645c0 52.823 42.822 95.644 95.645 95.644 52.823 0 95.644-42.821 95.644-95.644C191.29 42.822 148.468 0 95.645 0A95.617 95.617 0 0 0 0 95.645" fill="url(#a)"/><path d="M151.421 99.986a9.095 9.095 0 0 0-3.901-8.737 18.08 18.08 0 0 0 3.6-8.628c0-8.463-7.941-10.99-20.168-10.99-7.27.08-14.51.936-21.597 2.555.66-3.627 5.496-14.15 5.496-17.667 0-7.31-1.731-16.486-8.436-19.976a11.925 11.925 0 0 0-6.154-1.593c-2.68-.126-5.303.8-7.309 2.583a6.32 6.32 0 0 0-.742 3.681l1.21 13.738c0 10.99-16.899 24.729-16.899 40.528v33.136c0 5.88 7.886 10.056 19.234 10.056h31.46c8.243 0 10.084-1.428 12.2-5.275a7.583 7.583 0 0 0-.166-8.023 12.364 12.364 0 0 0 7.749-8.93c.487-2.412.118-4.92-1.044-7.089a9.48 9.48 0 0 0 5.495-9.369M48.743 80.945h9.836a8.243 8.243 0 0 1 8.243 8.243V135.1a8.243 8.243 0 0 1-8.243 8.242h-9.836a8.243 8.243 0 0 1-8.243-8.242V89.298a8.243 8.243 0 0 1 8.243-8.243" fill="#fff"/></g></svg>
           </div>
           <div class="comment-number">534 comments</div>
       </div><hr>
       <div class="flex justify-around">
           <button class="w-1/2 flex items-center justify-center p-2 focus:text-blue-400">
                <i class="fa fa-thumbs-o-up pr-2" style="font-size:30px"></i>
                Like 
           </button>
           <button class="w-1/2 flex items-center justify-center border-l p-2 focus:text-blue-400">
                <i class="fa fa-commenting-o pr-2" style="font-size:30px"></i>
                Comment
           </button>
       </div>
   </div>
</div>
<?php 
endforeach;


?>






<script src="js/main.js"></script>
