<?php
require_once('templates/header.php');
require_once('models/post.php');
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<!-- Alert message  -->
<!-- <div id="alert-3" class="mt-5 max-w-xl mx-96 flex p-4 mb-4 bg-green-100 rounded-lg dark:bg-green-200" role="alert">
    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle w-5 h-5 mx-2">
        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
        <polyline points="22 4 12 14.01 9 11.01"></polyline>
    </svg>
  <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
    <strong>Success!</strong> You deleted post 
  </div>
  <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-100 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300" onclick="this.parentElement.style.display='none';">
    <span class="sr-only">Close</span>
    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
  </button>
</div> -->
<!-- Get all data from database and display it -->
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
                        <a href="controllers/view_post.php?id=<?= $item['post_id']?>" class="hover:text-blue-400 text-center block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">
                        <a href="/views/edit_view.php?id=<?php echo $item['post_id'] ?>" class="hover:text-blue-400 text-center block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">
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
            <img src="<?= $item['image'] ?>" alt="" class="w-full h-full object-center object-cover">
        </div>
        <?php 
            }
        ?>
   </div>
   <div class="footer text-gray-600">
       <div class="amout-of-like flex w-full justify-between p-2">
           <div class="like-number">1.5K</div>
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
