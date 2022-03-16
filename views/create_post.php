<?php
require_once('../templates/header.php');
?>


<div class="bg-red-100 w-6/12 m-auto p-6">
    <form action="" method="post">
        <textarea class="w-full resize-none outline-none p-2" name="" id="" rows="1" placeholder="Title..."></textarea>
        <textarea class="w-full resize-none outline-none p-2" name="" id="" rows="2" placeholder="Descrition..."></textarea>
        <div class="flex justify-center mt-4 mb-4">
            <img class="flex bg-black w-60" src="" id="output" alt="">
        </div>

        <div class="flex justify-center mb-4">

            <input class="" id="upload-image" type="file" name="filename" accept="image/gif, image/jpeg, image/png" onchange="loadFile(event)" hidden>
            <label for="upload-image" class="w-full bg-gray-300 text-white p-3 rounded-md cursor-pointer flex justify-center"><svg class=" h-0 w-0 fill-slate-300 bg-black " viewBox="0 0 20 20"><img class="w-6" src="../images/icon/photo.svg" alt=""></svg></label>

        </div>
        <hr class="border-gray-400"><br>
        <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
        </script>
        <button class="w-full bg-gray-300 p-3 text-gray-600 font-bold rounded-md" type="submit">Post</button>
    </form>
</div>




<?php
require_once('../templates/footer.php');
?>