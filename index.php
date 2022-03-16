<<<<<<< HEAD
<?php
require_once('templates/header.php');
// require_once('controllers/view_post.php');
require_once('models/post.php');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Get all data from database and display it -->
<?php 
$items = getItems();
foreach ($items as $item):
?>
<div class="mt-10 block max-w-xl mx-96 rounded-lg bg-white ring-1 ring-slate-900/5 shadow-lg space-y-3">
   <div class="header p-4 pb-0">
        <ul role="list" class="p-0 divide-y divide-slate-200">
            <li class="flex py-4 first:pt-0 last:pb-0">
                <img class="object-cover h-14 w-14 rounded-full" src="<?= $item['profile'] ?>" alt="" width=""/>
                <div class="ml-3 overflow-hidden w-1/2">
                    <p class="text-lg font-bold text-slate-900"><?= $item['username'] ?></p>
                    <p class="text-sm text-slate-500 truncate"><?= date("F jS, Y", strtotime($item['post_date'])) ." at ". date("g:iA", strtotime($item['post_date'])); ?></p>
                </div>
                <div class="text-right w-1/2">
                    <i class="fa fa-ellipsis-h cursor-pointer text-blue-400" style="font-size:25px"></i>
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
           <button class="w-1/2 flex items-center justify-center p-2">
                <i class="fa fa-thumbs-o-up pr-2" style="font-size:30px"></i>
                Like
           </button>
           <button class="w-1/2 flex items-center justify-center border-l p-2">
                <i class="fa fa-commenting-o pr-2" style="font-size:30px"></i>
                Comment
           </button>
       </div>
   </div>
</div>
<?php 
endforeach;
?>
=======
>>>>>>> fa09294a5f45c85ae3b82b2d09203639ac73c9a8
