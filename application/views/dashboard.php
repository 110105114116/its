<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Vehicle count system</title>
	<link rel="icon" href="img/logo-mini.png">
	<script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { background-color: #F1F1F3; }
    </style>
</head>
    <body>
        <header>
            <div class="grid grid-cols-3 bg-gray-50 w-full p-5 shadow drop-shadow-md text-center">
                <div class="text-start">
                    <a href="<?php echo BASE_URL(); ?>">
                        <img src="img/logo-full.png" alt="logo Funai" width="20%">
                    </a>
                </div>
                <div class="text-3xl">
                    VEHICLE COUNT SYSTEM
                </div>
                <div class="text-end">
                    <p><?php echo $this->session->userdata['display_name']; ?></p>
                    <p>
                        <a href="login/logout" class="text-red-500/75 font-bold hover:text-red-500">
                            Logout
                        </a>
                    </p>
                </div>
            </div>
        </header>

        <!-- MAIN -->
        <div class="flex w-full shadow bg-white">
            <div class="flex-none w-1/6 h-max"><?php $this->load->view('menu.php'); ?></div>
            <div class="flex-1 w-5/6 h-max p-4"></div>
        </div>
    </body>
</html>