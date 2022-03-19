<?php 
// session_start();
$pathUrl = parse_url($_SERVER['REQUEST_URI']);
$pathUrl['path'] === "/views/login.php" ? session_start() : null;
isset($_SESSION['user_id']) ? header('Location: ../index.php') : null ;
?>
<script src="https://cdn.tailwindcss.com"></script>
<div class="flex p-20">
    <div class=" w-full ">
        <h1>facebook</h1>
        <p>Fackbook helps you connect and share with the people in your life.</p>
    </div>
    <div class=" w-full">
        <form action="../controllers/login_page.php" method="post" class="bg-gray-300 p-10 max-w-md text-center m-auto rounded-md">
            <input type="email" name="email" placeholder="Email address" class="w-full p-2 mb-4 outline-none border-0 "><br>
            <input type="password" name="password" placeholder="Password" class="w-full p-2 mb-4 outline-none border-0"><br>
            <button type="submit" name="submit" class="bg-blue-600 text-white p-2 rounded-md w-full">Login</button>
            <br>
            <br>
            <hr>
            <br>
            <a href="views/register.php" class="bg-green-600 text-white p-2 rounded-md w-full">Create New Account</a>
        </form>
    </div>
</div>


