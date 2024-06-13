<header>
    <div class="grid grid-cols-3 bg-gray-50 w-full p-5 shadow drop-shadow-md text-center">
        <div class="text-start">
            <a href="<?php echo BASE_URL(); ?>">
                <img src="<?php echo BASE_URL(); ?>/img/logo-full.png" alt="logo Funai" width="20%">
            </a>
        </div>
        <div class="text-3xl">
            VEHICLE COUNT SYSTEM
        </div>
        <div class="text-end">
            <p><?php echo $this->session->userdata['display_name']; ?></p>
            <p>
                <a href="<?php echo BASE_URL(); ?>login/logout" class="text-red-500/75 font-bold hover:text-red-500">
                    Logout
                </a>
            </p>
        </div>
    </div>
</header>