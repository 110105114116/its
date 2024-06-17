<div class="flex items-center gap-4">
    <div class="hs-dropdown relative inline-flex [--placement:bottom-right] sm:[--trigger:hover]">
        <a class="relative hs-dropdown-toggle cursor-pointer align-middle rounded-full">
            <img class="object-cover w-9 h-9 rounded-full" src="<?php echo base_url(); ?>assets/images/profile/user-1.jpg" alt=""
                aria-hidden="true">
        </a>
        <div class="card hs-dropdown-menu transition-[opacity,margin] rounded-md duration hs-dropdown-open:opacity-100 opacity-0 mt-2 min-w-max  w-[200px] hidden z-[1]"
            aria-labelledby="hs-dropdown-custom-icon-trigger">
            <div class="card-body p-0 py-2">
                <a href="javscript:void(0)" class="flex gap-2 items-center font-medium px-4 py-1.5 hover:bg-gray-200 text-gray-400">
                    <i class="ti ti-mail  text-xl"></i>
                    <p class="text-sm ">My Account</p>
                </a>
                <div class="px-4 mt-[7px] grid">
                    <a href="<?php echo base_url(); ?>login/logout" class="btn bg-white text-red-500 border border-red-500 font-medium text-[15px] w-full hover:bg-red-600 hover:text-white">Logout</a>
                </div>
            </div>
        </div>
    </div>
</div>