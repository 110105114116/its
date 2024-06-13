<aside class="top-0 left-0 z-40 w-full h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <ul class="space-y-2">
            <li>
                <a href="<?php echo BASE_URL(); ?>dashboard" class="flex items-center p-2 text-base font-normal text-gray-900 
                    rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor"
                        viewBox="0 0 20 20" 
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>

            <li>
                <button type="button" class="flex items-center w-full p-2 text-base font-normal text-gray-900 
                    transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" 
                    aria-controls="dropdown-record" 
                    data-collapse-toggle="dropdown-record">
                    <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 
                            9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span 
                        class="flex-1 ml-3 text-left whitespace-nowrap" 
                        sidebar-toggle-item>
                        Record time
                    </span>
                    <svg 
                        sidebar-toggle-item class="w-6 h-6" 
                        fill="currentColor" 
                        viewBox="0 0 20 20" 
                        xmlns="http://www.w3.org/2000/svg">
                        <path 
                            fill-rule="evenodd" 
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" 
                            clip-rule="evenodd">
                        </path>
                    </svg>
                </button>
                <ul id="dropdown-record" class="py-2 space-y-2">
                    <li>
                        <a href="<?php echo BASE_URL(); ?>record"
                            class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700 pl-11">Transaction</a>
                    </li>
                </ul>
            </li>

            <li>
                <button type="button" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-employee" data-collapse-toggle="dropdown-employee">
                    <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Employee</span>
                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <ul id="dropdown-employee" class="py-2 space-y-2">
                    <li>
                        <a href="<?php echo BASE_URL(); ?>employee" class="flex items-center w-full p-2 text-base font-normal text-gray-900 
                        transition duration-75 rounded-lg group hover:bg-gray-100 
                        dark:text-white dark:hover:bg-gray-700 pl-11">
                            View all
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL(); ?>rfid" class="flex items-center w-full p-2 text-base font-normal text-gray-900 
                        transition duration-75 rounded-lg group hover:bg-gray-100 
                        dark:text-white dark:hover:bg-gray-700 pl-11">
                            RFID verify
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL(); ?>employee/add" class="flex items-center w-full p-2 text-base font-normal text-gray-900 
                        transition duration-75 rounded-lg group hover:bg-gray-100 
                        dark:text-white dark:hover:bg-gray-700 pl-11">
                            Add employee
                        </a>
                    </li>
                </ul>
            </li>
            
            <li>
                <button type="button" class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-vehicle" data-collapse-toggle="dropdown-vehicle">
                    <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                        </path>
                    </svg>
                    <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Vehicles</span>
                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <ul id="dropdown-vehicle" class="py-2 space-y-2">
                    <li>
                        <a href="<?php echo BASE_URL(); ?>vehicle" class="flex items-center w-full p-2 text-base font-normal text-gray-900 
                        transition duration-75 rounded-lg group hover:bg-gray-100 
                        dark:text-white dark:hover:bg-gray-700 pl-11">
                            View all
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL(); ?>vehicle/add" class="flex items-center w-full p-2 text-base font-normal text-gray-900 
                        transition duration-75 rounded-lg group hover:bg-gray-100 
                        dark:text-white dark:hover:bg-gray-700 pl-11">
                            Add vehicle
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>


<script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>