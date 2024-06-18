<aside id="application-sidebar-brand"
    class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full  
    transform hidden xl:block xl:translate-x-0 xl:end-auto xl:bottom-0 
    fixed xl:top-5 xl:left-auto top-0 left-0 with-vertical h-screen z-[100]
    shrink-0 w-[270px] shadow-md xl:rounded-md rounded-none bg-white left-sidebar 
    transition-all duration-300"
>
    <div class="p-4">
        <a href="<?php echo base_url(); ?>" class="flex justify-center">
            <img
                src="<?php echo base_url(); ?>assets/images/logos/logo-full.png"
                alt="Logo-full"
                width="40%"
            />
        </a>
    </div>

    <div class="scroll-sidebar" data-simplebar="">
        <nav class="w-full flex flex-col sidebar-nav px-4 mt-5">
            <ul  id="sidebarnav" class="text-gray-600 text-sm">
                <li class="text-xs font-bold pb-[5px]">
                    <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
                    <span class="text-xs text-gray-400 font-semibold">HOME</span>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link gap-3 py-2.5 my-1 text-base  
                        flex items-center relative  rounded-md text-gray-500  w-full" 
                        href="<?php echo base_url(); ?>dashboard#"
                    >
                        <i class="ti ti-layout-dashboard ps-2  text-2xl"></i> <span>Dashboard</span>
                    </a>
                </li>

                <li class="text-xs font-bold mb-4 mt-6">
                    <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
                    <span class="text-xs text-gray-400 font-semibold">EQUIPMENT'S</span>
                </li>

                <li class="sidebar-item">
                    <a 
                        class="sidebar-link gap-3 py-2.5 my-1 text-base 
                            flex items-center relative  rounded-md text-gray-500  w-full" 
                        href="<?php echo base_url(); ?>equipment/add#"
                    >
                        <i class="ti ti-clipboard-plus ps-2 text-2xl"></i> <span>New</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a 
                        class="sidebar-link gap-3 py-2.5 my-1 text-base 
                            flex items-center relative  rounded-md text-gray-500  w-full" 
                        href="<?php echo base_url(); ?>equipment#"
                    >
                        <i class="ti ti-columns ps-2 text-2xl"></i> <span>View Equipment</span>
                    </a>
                </li>
                
                <li class="sidebar-item">
                    <a 
                        class="sidebar-link gap-3 py-2.5 my-1 text-base 
                            flex items-center relative  rounded-md text-gray-500  w-full" 
                        href="<?php echo base_url(); ?>ipaddress#?lan=32"
                    >
                        <i class="ti ti-columns ps-2 text-2xl"></i> <span>IP Address</span>
                    </a>
                </li>
                <!-- <li class="sidebar-item">
                    <a 
                        class="sidebar-link gap-3 py-2.5 my-1 text-base 
                            flex items-center relative  rounded-md text-gray-500  w-full" 
                        href="#"
                    >
                        <i class="ti ti-columns ps-2 text-2xl"></i> <span>IP Address</span>
                    </a>
                </li>

                <li class="text-xs font-bold mb-4 mt-6">
                    <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
                    <span class="text-xs text-gray-400 font-semibold">JOB</span>
                </li>

                <li class="sidebar-item">
                    <a 
                        class="sidebar-link gap-3 py-2.5 my-1 text-base 
                            flex items-center relative  rounded-md text-gray-500  w-full" 
                        href="#"
                    >
                        <i class="ti ti-columns ps-2 text-2xl"></i> <span>Request list</span>
                    </a>
                </li>

                <li class="text-xs font-bold mb-4 mt-6">
                    <i class="ti ti-dots nav-small-cap-icon text-lg hidden text-center"></i>
                    <span class="text-xs text-gray-400 font-semibold">SETTING</span>
                </li>
                <li class="sidebar-item">
                    <a 
                        class="sidebar-link gap-3 py-2.5 my-1 text-base 
                            flex items-center relative  rounded-md text-gray-500  w-full" 
                        href="#"
                    >
                        <i class="ti ti-columns ps-2 text-2xl"></i> <span>Program list</span>
                    </a>
                </li> -->
            </ul>
        </nav>
    </div>
</aside>