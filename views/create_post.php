<?php
// require_once('../models/create.php');
?>

<!-- Get all data from database and display it -->
<div class="mt-28 block max-w-xl mx-96 rounded-lg bg-white ring-1 ring-slate-900/5 shadow-lg space-y-3">
   <div class="header p-4 pb-0">
        <ul role="list" class="p-0 divide-y divide-slate-200">
            <li class="flex py-4 first:pt-0 last:pb-0">
                <img class="object-cover h-12 w-12 rounded-full" src="images/teacher.jpg" alt="" width=""/>
                <div class="open-create ml-6 p-3 bg-slate-100 rounded-full w-4/5 cursor-pointer">What on your mind?</div>
            </li>
            <li class="flex first:pt-0 last:pb-0 justify-around">
                <button class="open-create py-2 w-1/2 flex justify-center items-center"><svg class="w-8 h-8 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Photo
                </button>
                <button class="py-2 w-1/2 flex justify-center border-l items-center"><svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Feeling/activity
                </button>
            </li>
        </ul>
    </div>
</div>

<div id="my-modal" class="hidden fixed z-50 inset-0 mt-20 overflow-y-auto">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <div class="fixed inset-0 backdrop-blur-sm bg-gray-200 bg-opacity-50 transition-opacity" aria-hidden="true"></div>
    <div class="rounded-lg bg-white ring-1 ring-slate-900/5 shadow-lg space-y-3 w-6/12 m-auto p-6 backdrop-blur-none ">
        <div class="w-full text-right flex justify-between">
            <li class="flex first:pt-0 last:pb-0 items-center">
                 <img class="object-cover h-12 w-12 rounded-full" src="/images/teacher.jpg" alt="" width=""/>
                 <p class="ml-5 text-lg font-bold text-slate-900">Rady Y</p>
             </li>
            <svg onclick="close_create()" xmlns="http://www.w3.org/2000/svg" class="cursor-pointer h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>
        <form action="../controllers/create_post.php" method="post" enctype="multipart/form-data">
            <textarea class="w-full resize-none outline-none p-2" name="post_description" id="" rows="2" placeholder="Descrition..."></textarea>
            <div class="flex justify-center mt-4 mb-4">
                <img class="flex bg-black w-1/2" src="" id="output" alt="">
            </div>
    
            <div class="flex justify-center mb-4">
    
                <input id="upload-image" type="file" name="filename" accept="image/gif, image/jpeg, image/png" onchange="loadFile(event)" hidden>
                <label for="upload-image" class="w-full bg-gray-300 text-white p-3 rounded-md cursor-pointer flex justify-center"><svg class=" h-0 w-0 fill-slate-300 bg-black " viewBox="0 0 20 20"><img class="w-6" src="../images/icon/photo.svg" alt=""></svg></label>
    
            </div>
            <hr class="border-gray-400"><br>
            <button id="ok-btn"  class="w-full bg-gray-300 p-3 text-gray-600 font-bold rounded-md" type="submit" name="submit">Post</button>
        </form>
    </div>
    </div>
</div>
