<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/dist/output.css" rel="stylesheet" />
</head>
<body class="flex h-screen justify-center lg:items-center w-screen">
    <main class="w-[375px] lg:w-[1200px] flex flex-col items-center md:justify-center p-[17px]">
        <div class="lg:w-[474px] lg:border lg:border-[#BDBDBD] lg:rounded-3xl flex flex-col lg:px-[58px] lg:py-[45px]">
            <div>
                <img src="./icons//devchallenges-light.svg" alt="devchallenges" class="lg:w-[130px] mb-[27px]" />
            </div>
            <div>
                <p class="font-semibold text-lg mb-4">
                    Join thousands of learners from around the world
                </p>
                <p class="font-normal text-base">
                    Master web development by making real-life projects. There are
                    multiple paths for you to choose
                </p>
            </div>
            <div>
                <form action="infoDataBase.php" class="flex flex-col gap-3" name="form" method="post">
                    <div class="flex border border-[#BDBDBD] h-[48px] pl-3 gap-3 rounded-xl mt-7">
                        <img src="./icons/mail.svg" alt="icono mail" class="w-6" />
                        <input type="text" class="outline-none w-full h-full rounded-xl" placeholder="Email"
                            name="email" />
                    </div>
                    <div class="flex border border-[#BDBDBD] h-[48px] pl-3 gap-3 rounded-xl">
                        <img src="./icons/lock.svg" alt="icono candado" class="w-6" />
                        <input type="password" class="outline-none w-full rounded-xl" placeholder="Password"
                            name="pass" />
                    </div>
                    <div class=" text-red-600">
                        <?php
                        session_start();
                        if (isset($_SESSION["error_register"])) {
                            echo $_SESSION["error_register"];
                        };
                        unset($_SESSION["error_register"]);
                        ?>
                    </div>
                    <button class="text-white w-full bg-[#2F80ED] h-[38px] rounded-lg mt-3">
                        Start coding now
                    </button>
                </form>
            </div>
            <div class="flex flex-col justify-center items-center">
                <p class="p-7 text-[#828282]">
                    or continue with these social profile
                </p>
                <div class="flex flex-row gap-5">
                    <img src="./icons/Google.svg" alt="" />
                    <img src="./icons/Facebook.svg" alt="" />
                    <img src="./icons/Twitter.svg" alt="" />
                    <img src="./icons/Gihub.svg" alt="" />
                </div>
                <div class="mt-[27px] flex flex-row mb-16 gap-1">
                    <p class="text-[#828282]">Adready a member?</p>
                    <a href="login.php" class="text-[#2D9CDB]"> Login</a>
                </div>
            </div>
        </div>
        <div class="flex flex-row justify-between text-[#BDBDBD] w-[375px]">
            <p class="text-sm">created by BryanB</p>
            <p class="text-sm">devChallenges.io</p>

        </div>

    </main>
    
</body>
</html>