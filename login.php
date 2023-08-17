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
                <img src="./icons/devchallenges-light.svg" alt="devchallenges" class="lg:w-[130px] mb-[27px]" />
            </div>
            <div>
                <p class="font-semibold text-lg">Login</p>
            </div>
            <div>
            <form action="infoDBLogin.php" class="flex flex-col gap-3" method="post">
                    <div class="flex border border-[#BDBDBD] h-[48px] pl-3 gap-3 rounded-xl mt-7">
                        <img src="./icons/mail.svg" alt="icono mail" class="w-6" />
                        <input type="text" class="outline-none w-full h-full rounded-xl" placeholder="Email"
                            name="email_lg" />
            </div>
            <div class="flex border border-[#BDBDBD] h-[48px] pl-3 gap-3 rounded-xl">
                        <img src="./icons/lock.svg" alt="icono candado" class="w-6" />
                        <input type="password" class="outline-none w-full rounded-xl" placeholder="Password"
                            name="pass_lg" />
            </div>
            <p class="text-center  text-red-700">&#160;
                        <?php
            session_start();
            if (isset($_SESSION["error_lg"])) {
              echo $_SESSION["error_lg"];
            };
            unset($_SESSION["error_lg"]);
            ?>
            </p>
            <button class="text-white w-full bg-[#2F80ED] h-[38px] rounded-lg">
                        Login
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
                <div class="mt-[27px] flex flex-row mb-20">
                    <p class="text-[#828282]">Don’t have an account yet?</p>
                    <a href="index.php" class="text-[#2D9CDB]"> Register</a>
                </div>
            </div>
        </div>
        <div class="flex flex-row justify-between w-[375px] text-[#BDBDBD]">
            <p class="text-sm">created by BryanB</p>
            <p class="text-sm">devChallenges.io</p>
        </div>

        </div>

    </main>
    
</body>
</html>