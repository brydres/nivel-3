<?php
session_start();
require("connection.php");
if (!isset($_SESSION["datos"])) {
    header("Location: login.php");
    die();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="./main.js" defer></script>
    <link href="/dist/output.css" rel="stylesheet" />
</head>
<body>
    <main class="flex flex-col items-center justify-center">
        <nav class="flex items-center justify-center">
            <div class="flex flex-row justify-between items-center w-screen h-16 px-7">
               <img src="./icons/devchallenges-light.svg" alt="devchallenges" />
               <div class=" flex items-center gap-3 ">
                <div id="button" class=" flex gap-3 items-center  cursor-pointer hover:cursor-pointer">
                    <div>
                    <?php
                        echo "<img alt='foto' class='w-[32px] rounded-md'  src='data:image/jpg; base64," . base64_encode($_SESSION["show_img"]) . "'>";
                    ?>
                    </div>
                    <div>
                        <?php echo $_SESSION["show_nombre"] ?>
                    </div>
                    <img src="./icons/triangle.svg" alt="" class=" w-[15px]">
                </div>
               </div>
            </div>
            <ul id="menu" class="hidden flex-col justify-center items-center  h-44 w-48 border rounded-2xl bg-white absolute right-10 top-16 ">
                <a href="personal.php" class="hover:bg-gray-200 flex justify-start items-center w-4/5 h-1/4 rounded-2xl gap-2">
                    <img src="./icons/perfil.svg" alt="">
                    <li>My Profile</li>
                </a>
                <a href="personal.php" class="hover:bg-gray-200 flex justify-start items-center w-4/5 h-1/4 rounded-2xl gap-2">
                    <img src="./icons/group.svg" alt="">
                    <li>
                        Group Chat
                    </li>
                </a>
                <a href="logout.php" class="hover:bg-gray-200 flex justify-start items-center w-4/5 h-1/4 rounded-2xl gap-2">
                    <img src="./icons/logout.svg" alt="">
                    <li class=" text-[#EB5757]">Log out
                    </li>
                </a>
            </ul>
        </nav>
        <div>
            <div class="flex flex-col justify-center items-start my-4 ">
                <a href="personal.php" class=" text-[#2D9CDB] ml-2">&#60 Back</a>
            </div>
            <div class="w-screen md:w-[845px] md:border md:border-[#D3D3D3] rounded-xl pr-10">
                <div class="flex flex-row justify-between items-center mt-6 px-5">
                    <div class="w-full">
                        <h2 class="text-2xl font-normal">Change Info</h2>
                        <p class="text-[13px] text-[#828282]">
                            Changes will be reflected to every services
                        </p>
                    </div>
                </div>
                <form class="py-6 pl-12" method="post" action="edit.php" enctype="multipart/form-data">
                    <div class="  flex flex-row items-center gap-7">
                        <label for="img_change" class=" flex gap-3 justify-center items-center">
                            <div class=" relative w-10 h-10 bg-[#e9e7e7] flex justify-center items-center rounded-lg">
                                <div>
                                    <?php
                                    echo "<img alt='foto' class=' w-[40px] rounded-md '  src='data:image/jpg; base64," . base64_encode($_SESSION["show_img"]) . "'>";
                                    ?>
                                </div>
                                <img src="./icons/camera.svg" alt="camera_icon" class=" absolute">
                            </div>
                            CHANGE PHOTO

                            <input type="file" name="img_ch" id="img_change" class=" opacity-0" required>
                        </label>
                    </div>
                    <div class=" flex flex-col my-3">
                        <label for="">Name</label>
                        <input name="nombre_ch" type="text" placeholder="Enter your name..." class="  border border-[#BDBDBD] w-full md:w-[416px] h-[52px] pl-4 rounded-xl" value='<?php echo $_SESSION["show_nombre"] ?>'>
                    </div>
                    <div class=" flex flex-col my-3 ">
                        <label for="">Bio</label>
                        <input name="bio_ch" tipe="text" placeholder="Enter your bio..." class="  border border-[#BDBDBD] max-w-[80vw] md:max-w-[416px] h-[91px] pl-4 pr-4 pb-8 rounded-xl" value='<?php echo $_SESSION["show_bio"] ?>'>
                    </div>

                    <div class=" flex flex-col my-3">
                        <label for="">Phone</label>
                        <input name="phone_ch" type="text" placeholder="Enter your phone..." class=" border border-[#BDBDBD] w-full md:w-[416px] h-[52px] pl-4 rounded-xl" value='<?php echo $_SESSION["show_phone"] ?>'>
                    </div>
                    <div class=" flex flex-col my-3">
                        <label for="">Email</label>
                        <input name="email_ch" type="text" placeholder="Enter your email..." class=" border border-[#BDBDBD] w-full md:w-[416px] h-[52px] pl-4 rounded-xl" value='<?php echo $_SESSION["show_email"] ?>' required>
                    </div>
                    <div class=" flex flex-col my-3">
                        <label for="">Password</label>
                        <input name="password_ch" type="password" placeholder="Enter your new password..." class=" border border-[#BDBDBD] w-full md:w-[416px] h-[52px] pl-4 rounded-xl" required>
                    </div>
                    <button class=" bg-[#2F80ED] text-white w-[82px] h-[38px] rounded-lg">Save</button>
                </form>
            </div>
        </div>

    </main>
    
</body>
</html>