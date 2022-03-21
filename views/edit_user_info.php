
<?php
    session_start();
    require_once('../models/login_acc.php');
    $user_info = getUserInfo($_SESSION['user_id']);
?>
<script src="https://cdn.tailwindcss.com"></script>
<body class="bg-gray-300">
<div class="max-w-lg m-auto bg-white p-6 mt-10 rounded-md pt-6 pb-10 mb-6 ">
    <h1 class="text-blue-500 text-center font-bold text-3xl">Edit Information</h1>
    <form action="../controllers/edit_user_info.php?id=<?php $user_info['user_id'] ?>" method="post" class="mt-6">
        <div class="mb-4">
            <label for="">FirstName</label><br>
            <input type="text" name="first-name" value="<?=$user_info['first_name'] ?>" onkeyup="if (/[^|a-zA-Z0-9]+/g.test(this.value)) this.value = this.value.replace(/[^|a-zA-Z0-9]+/g,'')" placeholder="First name" class="w-full p-2 outline-none border-[1px] border-gray-300" required>
            <label for="">LastName</label><br>
            <input type="text" name="last-name" value="<?=$user_info['last_name'] ?>" onkeyup="if (/[^|a-zA-Z0-9]+/g.test(this.value)) this.value = this.value.replace(/[^|a-zA-Z0-9]+/g,'')" placeholder="Last name" class="w-full p-2 outline-none border-[1px] border-gray-300" required>
        </div>
        <label for="">Email</label><br>
        <input type="email" name="email" value="<?=$user_info['email'] ?>" placeholder="Email address" onkeyup="if (/[^|a-zA-Z0-9@.]+/g.test(this.value)) this.value = this.value.replace(/[^|a-zA-Z0-9@.]+/g,'')" class="p-2 mb-4 w-full outline-none border-[1px] border-gray-300" required><br>
        <label for="">Tel</label><br>
        <input type="tel" id="phone" name="phone" value="<?=$user_info['phone'] ?>" minlength="8" maxlength="10" onkeyup="if (/[^|0-9]+/g.test(this.value)) this.value = this.value.replace(/[^|0-9]+/g,'')" placeholder="Phone" class="p-2 mb-4 w-full outline-none border-[1px] border-gray-300" required><br>
        <!-- <label for="">Password</label><br>
        <input type="password" id="password" name="password" value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" class="p-2  w-full outline-none border-[1px] border-gray-300" required> -->
        <!-- <div class="flex justify-end">
            <input type="checkbox" id="show-password" onclick="showPassword()" hidden>
            <label for="show-password" class="cursor-pointer  text-blue-700 -mt-16 p-2 mb-4"><svg class="h-5 w-5 fill-slate-300" viewBox="0 0 18 18"><img src="../images/show.svg" alt=""></svg></label>
        </div> -->
        

        <div class="">
            <label for="" class="">Birthday: </label>
            <input type="text" name="birthday" value="<?=$user_info['date_of_birth'] ?>"class="p-2 outline-none border-[1px] border-gray-300" required>
        </div>
        <?php
            if($user_info['gender'] == 'F'){
        ?>
                <div class="flex mb-4 mt-4">
                    <label for="" class="">Gender:</label>
                    <div class="ml-4">
                        <input type="radio" id="female" name="gender" value="F" required checked>
                        <label for="female" class="ml-2">Female</label>
                    </div>
                    <div class="ml-4">
                        <input type="radio" id="male" name="gender" value="M" required>
                        <label for="male" class="ml-2">Male</label><br>
                    </div>
                </div>
        <?php
            }else{
        ?>
                <div class="flex mb-4 mt-4">
                    <label for="" class="">Gender:</label>
                    <div class="ml-4 ">
                        <input type="radio" id="female" name="gender" value="F" required >
                        <label for="female" class="ml-2">Female</label>
                    </div>
                    <div class="ml-4">
                        <input type="radio" id="male" name="gender" value="M" required checked>
                        <label for="male" class="ml-2">Male</label><br>
                    </div>
                </div>
        <?php
            };
        ?>

        <div class="">
            <label for="country" class="">Country: </label>      
            <input type="text" name="country" value="<?=$user_info['country'] ?>" class="ml-2 p-2 outline-none border-[1px] border-gray-300" required>
        </div>    
        <input type="text" name="id" value="<?=$user_info['user_id'] ?>" hidden>
        <button type="submit" name="submit" id="" class="m-auto p-2 bg-blue-600 rounded-md pl-16 pr-16 font-bold mt-3 text-white">Save</button>
    </form>
</div>

<script src="../js/main.js"></script>