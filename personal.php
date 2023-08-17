<?php
session_start();
require("connection.php");

if (!isset($_SESSION["datos"])) {
  header("Location: login.php");
  die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="./main.js" defer></script>
    <link href="/dist/output.css" rel="stylesheet" />
</head>

<body>
    <main class="flex flex-col items-center justify-center">
        <nav class="flex items-center justify-center">
            <div class="flex flex-row justify-between items-center w-screen h-16 px-7">
                <img src="./icons/devchallenges-light.svg" alt="devchallenges" />
                <div id="button" class=" flex gap-3 cursor-pointer hover:cursor-pointer">
                    <div>
                        <?php
            require("connection.php");
            echo "<img class='w-[32px] rounded-md' src='data:image/jpg; base64," . base64_encode($_SESSION["show_img"]) . "'>";
            ?>
                    </div>
                    <div>
                        <?php
            echo $_SESSION["show_nombre"] ?>
                    </div>

                    <img src="./icons/triangle.svg" alt="" class=" w-[15px]">
                </div>
            </div>
            <ul id="menu"
                class="hidden flex-col justify-center items-center  h-44 w-48 border rounded-2xl bg-white absolute right-10 top-16 ">
                <a href="personal.php"
                    class="hover:bg-gray-200 flex justify-start items-center w-4/5 h-1/4 rounded-2xl gap-2">
                    <img src="./icons/perfil.svg" alt="">
                    <li>My Profile</li>
                </a>
                <a href="personal.php"
                    class="hover:bg-gray-200 flex justify-center items-center w-4/5 h-1/4 rounded-2xl gap-2">
                    <img src="./icons/group.svg" alt="">
                    <li class="flex justify-start items-center w-full border-b border-gray">
                        Group Chat
                    </li>
                </a>
                <a href="logout.php"
                    class="hover:bg-gray-200 flex justify-start items-center w-4/5 h-1/4 rounded-2xl gap-2">
                    <img src="./icons/logout.svg" alt="">
                    <li class=" text-[#EB5757]">Log out
                    </li>
                </a>
            </ul>

        </nav>
        <div>
            <div class="flex flex-col justify-center items-center mt-4">
                <h1 class="font-normal text-2xl">Personal info</h1>
                <p class="text-sm font-light">Basic info, like your name and photo</p>
            </div>
            <div class="w-screen md:w-[845px] md:border md:border-[#D3D3D3] rounded-xl">
                <div class="flex flex-row justify-between items-center mt-6 px-5">
                    <div class="w-[180px]">
                        <h2 class="text-2xl font-normal">Profile</h2>
                        <p class="text-[13px] text-[#828282]">
                            Some info may be visible to other people
                        </p>
                    </div>
                    <div>
                        <a href="change.php">
                            <button class="border border-[#828282] w-[95px] h-[35px] rounded-xl">
                                Edit
                            </button>
                        </a>
                    </div>
                </div>
                <div
                    class="flex flex-row items-center justify-between md:justify-start px-7 py-4 border-b border-[#E0E0E0]">
                    <p class="text-[#BDBDBD] md:w-[240px]">PHOTO</p>
                    <div>
                        <?php
            echo "<img alt='foto' class='w-[72px] rounded-md'  src='data:image/jpg; base64," . base64_encode($_SESSION["show_img"]) . "'>";
            ?>
                    </div>
                </div>
                <div
                    class="flex flex-row items-center justify-between px-7 py-7 border-b border-[#E0E0E0] md:justify-start">
                    <p class="text-[#BDBDBD] md:w-[240px]">NAME</p>
                    <p><?php echo $_SESSION["show_nombre"] ?></p>
                </div>
                <div
                    class="flex flex-row items-center justify-between px-7 py-7 border-b border-[#E0E0E0] md:justify-start">
                    <p class="text-[#BDBDBD] md:w-[240px]">BIO</p>
                    <p><?php echo $_SESSION["show_bio"] ?></p>
                </div>
                <div
                    class="flex flex-row items-center justify-between px-7 py-7 border-b border-[#E0E0E0] md:justify-start">
                    <p class="text-[#BDBDBD] md:w-[240px]">EMAIL</p>
                    <p><?php echo $_SESSION["show_email"] ?></p>
                </div>
                <div
                    class="flex flex-row items-center justify-between px-7 py-7 border-b border-[#E0E0E0] md:justify-start">
                    <p class="text-[#BDBDBD] md:w-[240px]">PASSWORD</p>
                    <p><?php /* echo $_SESSION["show_pass"]  */ ?>*********</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>