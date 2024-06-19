<!DOCTYPE html>
<html lang="en" >
	<head>
        <title>ADD NEW EQUIPMENT's | INFORMATION TECHNOLOGY SYSTEM</title>
        
        <?php $this->load->view('header.php'); ?>
	</head>

	<body class=" bg-surface">
		<main>
			<div id="main-wrapper" class="flex p-5 xl:pr-0">
				<!-- Side bar -->
		        <?php $this->load->view('sidebar.php'); ?>
				
				<!-- Main -->
				<div class=" w-full page-wrapper xl:px-6 px-0">
					<main class="h-full max-w-full">
						<div class="container full-container p-0 flex flex-col gap-6">
							<!-- Header -->
							<header class=" bg-white shadow-md rounded-md w-full text-sm py-4 px-6">
								<nav class=" w-ful flex items-center justify-between" aria-label="Global">
									<ul class="icon-nav flex items-center gap-4">
										<li class="relative xl:hidden">
											<a class="text-xl  icon-hover cursor-pointer text-heading"
												id="headerCollapse" data-hs-overlay="#application-sidebar-brand"
												aria-controls="application-sidebar-brand" aria-label="Toggle navigation" href="javascript:void(0)">
												<i class="ti ti-menu-2 relative z-1"></i>
											</a>
										</li>
										<h3 class="text-lg font-semibold">New equipment</h3>
										<p class="text-xs text-gray-400 font-semibold">เพิ่มอุปกรณ์ใหม่</p>
									</ul>
									<?php $this->load->view('popup-profile.php'); ?>
								</nav>
							</header>

							<!-- Content -->
							<div class="card p-3">
                                <form method="post" action="<?php echo base_url(); ?>equipment/new">
                                    <div class="card-body flex flex-col gap-1">
                                        
                                        <h6 class="text-lg text-gray-500 font-semibold">Equipment Info</h6>
                                        <div class="card">
                                            <div class="card-body">

                                                <div class="mb-6">
                                                    <div class="grid grid-cols-1 md:grid-cols-2">
                                                        <!-- <div class="pr-3">
                                                            <label for="input-label-with-helper-text"
                                                                class="block text-sm mb-2 text-gray-400">EQUIPMENT CODE :</label>
                                                                <input 
                                                                    type="text" 
                                                                    id="input-label-with-helper-text"
                                                                    name="code"
                                                                    class="py-3 px-4 text-gray-500 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                                                                    aria-describedby="hs-input-helper-text"
                                                                    required
                                                                    autocomplete="off">
                                                            <i class="text-sm  text-gray-400 opacity-75 mt-2" id="hs-input-helper-text">
                                                                *Fill in after "FUNAI" ex. "FUNAI-NB-35" please write "NB-35".
                                                            </i>
                                                        </div> -->
                                                        <div class="pr-3">
                                                            <label for="input-label-with-helper-text"
                                                                class="block text-sm mb-2 text-gray-400">EQUIPMENT NAME :</label>
                                                                <input 
                                                                    type="text" 
                                                                    id="input-label-with-helper-text"
                                                                    name="equip_name"
                                                                    class="py-3 px-4 text-gray-500 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                                                                    aria-describedby="hs-input-helper-text"
                                                                    required
                                                                    autocomplete="off">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-6">
                                                    <div class="grid grid-cols-1 md:grid-cols-2">
                                                        
                                                        <div>
                                                            <label for="input-label-with-helper-text"
                                                                class="block text-sm mb-2 text-gray-400">TYPE :</label>
                                                            <select 
                                                                name="equip_type"
                                                                class="py-3 px-4 block w-full border-gray-200 rounded-sm 
                                                                    text-sm focus:border-blue-600 focus:ring-0"
                                                                    required
                                                            >
                                                                <option value="" selected disabled>----- Please select -----</option>
                                                                <?php
                                                                    foreach($type as $t){
                                                                ?>
                                                                    <option value="<?php echo $t->id; ?>">
                                                                        <?php echo $t->id; ?> - <?php echo $t->name; ?>
                                                                    </option>
                                                                <?php 
                                                                    }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="md:pl-3">
                                                            <label for="input-label-with-helper-text"
                                                                class="block text-sm mb-2 text-gray-400">MANUFACTURER :</label>

                                                            <select 
                                                                name="manufac"
                                                                class="py-3 px-4 block w-full border-gray-200 rounded-sm 
                                                                    text-sm focus:border-blue-600 focus:ring-0"
                                                                    required
                                                            >
                                                                <option value="" selected disabled>----- Please select -----</option>
                                                                <?php
                                                                    foreach($manuf as $manu){
                                                                ?>
                                                                    <option value="<?php echo $manu->id; ?>">
                                                                        <?php echo $manu->name; ?>
                                                                    </option>
                                                                <?php 
                                                                    }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-6">
                                                    <div class="grid grid-cols-1 md:grid-cols-2">
                                                        <div class="pr-3">
                                                            <label for="input-label-with-helper-text"
                                                                class="block text-sm mb-2 text-gray-400">LOCATION :</label>
                                                            <input 
                                                                type="text" 
                                                                id="input-label-with-helper-text"
                                                                name="location"
                                                                class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                                                                aria-describedby="hs-input-helper-text"
                                                                required>
                                                        </div>

                                                        <div class="pr-3">
                                                            <label for="input-label-with-helper-text"
                                                                class="block text-sm mb-2 text-gray-400">FACTORY :</label>

                                                                <ul class="grid w-full gap-6 md:grid-cols-3">
                                                                    <li>
                                                                        <input type="radio" id="factory1" name="factory" value="1" class="hidden peer" required />
                                                                        <label 
                                                                            for="factory1" 
                                                                            class="inline-flex items-center justify-between w-full p-2
                                                                                    text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer 
                                                                                    dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 
                                                                                    peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 
                                                                                    hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700"
                                                                        >                           
                                                                            <div class="block">
                                                                                <div class="w-full text-lg font-semibold">Factory 1</div>
                                                                            </div>
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <input type="radio" id="factory2" name="factory" value="2" class="hidden peer" />
                                                                        <label 
                                                                            for="factory2" 
                                                                            class="inline-flex items-center justify-between w-full p-2
                                                                                    text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer 
                                                                                    dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 
                                                                                    peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 
                                                                                    hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700"
                                                                        >                           
                                                                            <div class="block">
                                                                                <div class="w-full text-lg font-semibold">Factory 2</div>
                                                                            </div>
                                                                        </label>
                                                                    </li>

                                                                    <li>
                                                                        <input type="radio" id="factory3" name="factory" value="3" class="hidden peer" />
                                                                        <label 
                                                                            for="factory3" 
                                                                            class="inline-flex items-center justify-between w-full p-2
                                                                                    text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer 
                                                                                    dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 
                                                                                    peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 
                                                                                    hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700"
                                                                        >                           
                                                                            <div class="block">
                                                                                <div class="w-full text-lg font-semibold">Factory 3</div>
                                                                            </div>
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-6">
                                                    <div class="grid grid-cols-1 md:grid-cols-2">
                                                        <div class="pr-3">
                                                            <label for="input-label-with-helper-text"
                                                                class="block text-sm mb-2 text-gray-400">RESPONSIBILITY (employee id):</label>
                                                                <input 
                                                                    list="employee" 
                                                                    name="emp_id" 
                                                                    id="emp_id"
                                                                    class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                                                                    aria-describedby="hs-input-helper-text"
                                                                    autocomplete="off"
                                                                    required
                                                                >

                                                                <datalist id="employee">
                                                                    <?php
                                                                        foreach($emp as $e) {
                                                                            echo "<option value=\"".$e->emp_id."\">".$e->name;
                                                                        }
                                                                    ?>
                                                                </datalist>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-6">
                                                    <div class="grid grid-cols-1 md:grid-cols-2">
                                                        <div class="pr-3">
                                                            <label for="input-label-with-helper-text"
                                                                class="block text-sm mb-2 text-gray-400">DATE RECEIVE :</label>
                                                            <input type="date" id="input-label-with-helper-text"
                                                                name="recive"
                                                                class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                                                                aria-describedby="hs-input-helper-text"
                                                                required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body flex flex-col gap-1">
                                        <h6 class="text-lg text-gray-500 font-semibold">Tech Specs</h6>

                                        <div class="card">
                                            <div class="card-body">

                                                <div class="mb-6">
                                                    <div class="grid grid-cols-1 md:grid-cols-2">
                                                        <div class="pr-3">
                                                            <label for="input-label-with-helper-text"
                                                                class="block text-sm mb-2 text-gray-400">IP ADDRESS :</label>
                                                            <input 
                                                                type="text" 
                                                                id="input-label-with-helper-text"
                                                                name="ip"
                                                                class="py-3 px-4 text-gray-500 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                                                                aria-describedby="hs-input-helper-text"
                                                                autocomplete="off"
                                                            >
                                                        </div>
                                                        <div class="pr-3">
                                                            <label for="input-label-with-helper-text"
                                                                class="block text-sm mb-2 text-gray-400">MODEL :</label>

                                                                <input 
                                                                    list="modelList" 
                                                                    name="model" 
                                                                    id="model"
                                                                    class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                                                                    aria-describedby="hs-input-helper-text"
                                                                    autocomplete="off"
                                                                >

                                                                <datalist id="modelList">
                                                                    <?php
                                                                        foreach($model as $m) {
                                                                            echo "<option value=\"".$m->model."\">";
                                                                        }
                                                                    ?>
                                                                </datalist>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-6">
                                                    <div class="grid grid-cols-1 md:grid-cols-2">
                                                        <div class="pr-3">
                                                            <label for="input-label-with-helper-text"
                                                                class="block text-sm mb-2 text-gray-400">MEMORY TYPE :</label>

                                                            <ul class="grid w-full gap-6 md:grid-cols-3">
                                                                <li>
                                                                    <input type="radio" id="mem_type0" name="mem_type" value="0" class="hidden peer" required />
                                                                    <label 
                                                                        for="mem_type0" 
                                                                        class="inline-flex items-center justify-between w-full p-2
                                                                                text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer 
                                                                                dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 
                                                                                peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 
                                                                                hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700"
                                                                    >                           
                                                                        <div class="block">
                                                                            <div class="w-full text-lg font-semibold">-</div>
                                                                        </div>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <input type="radio" id="mem_type1" name="mem_type" value="1" class="hidden peer" required />
                                                                    <label 
                                                                        for="mem_type1" 
                                                                        class="inline-flex items-center justify-between w-full p-2
                                                                                text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer 
                                                                                dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 
                                                                                peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 
                                                                                hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700"
                                                                    >                           
                                                                        <div class="block">
                                                                            <div class="w-full text-lg font-semibold">HDD</div>
                                                                        </div>
                                                                    </label>
                                                                </li>

                                                                <li>
                                                                    <input type="radio" id="mem_type2" name="mem_type" value="2" class="hidden peer" />
                                                                    <label 
                                                                        for="mem_type2" 
                                                                        class="inline-flex items-center justify-between w-full p-2
                                                                                text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer 
                                                                                dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 
                                                                                peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 
                                                                                hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700"
                                                                    >                           
                                                                        <div class="block">
                                                                            <div class="w-full text-lg font-semibold">SSD</div>
                                                                        </div>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-6">
                                                    <div class="grid grid-cols-1">
                                                        <div class="pr-3">
                                                            <label for="input-label-with-helper-text"
                                                                class="block text-sm mb-2 text-gray-400">MEMORY :</label>


                                                            <ul class="grid w-full gap-6 md:grid-cols-4">
                                                                <li>
                                                                    <input type="radio" id="mem0" name="mem" value="-" class="hidden peer" required />
                                                                    <label 
                                                                        for="mem0" 
                                                                        class="inline-flex items-center justify-between w-full p-2
                                                                                text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer 
                                                                                dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 
                                                                                peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 
                                                                                hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700"
                                                                    >                           
                                                                        <div class="block">
                                                                            <div class="w-full text-lg font-semibold">-</div>
                                                                        </div>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <input type="radio" id="mem1" name="mem" value="256GB" class="hidden peer" required />
                                                                    <label 
                                                                        for="mem1" 
                                                                        class="inline-flex items-center justify-between w-full p-2
                                                                                text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer 
                                                                                dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 
                                                                                peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 
                                                                                hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700"
                                                                    >                           
                                                                        <div class="block">
                                                                            <div class="w-full text-lg font-semibold">256 GB</div>
                                                                        </div>
                                                                    </label>
                                                                </li>

                                                                <li>
                                                                    <input type="radio" id="mem2" name="mem" value="512GB" class="hidden peer" />
                                                                    <label 
                                                                        for="mem2" 
                                                                        class="inline-flex items-center justify-between w-full p-2
                                                                                text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer 
                                                                                dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 
                                                                                peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 
                                                                                hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700"
                                                                    >                           
                                                                        <div class="block">
                                                                            <div class="w-full text-lg font-semibold">512 GB</div>
                                                                        </div>
                                                                    </label>
                                                                </li>

                                                                <li>
                                                                    <input type="radio" id="mem3" name="mem" value="1TB" class="hidden peer" />
                                                                    <label 
                                                                        for="mem3" 
                                                                        class="inline-flex items-center justify-between w-full p-2
                                                                                text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer 
                                                                                dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 
                                                                                peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 
                                                                                hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700"
                                                                    >                           
                                                                        <div class="block">
                                                                            <div class="w-full text-lg font-semibold">1 TB</div>
                                                                        </div>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-6">
                                                    <div class="grid grid-cols-1">
                                                        <div>
                                                            <label for="input-label-with-helper-text"
                                                                class="block text-sm mb-2 text-gray-400">RAM :</label>
                                                                <ul class="grid w-full gap-6 md:grid-cols-4">
                                                                <li>
                                                                    <input type="radio" id="ram0" name="ram" value="-" class="hidden peer" required />
                                                                    <label 
                                                                        for="ram0" 
                                                                        class="inline-flex items-center justify-between w-full p-2
                                                                                text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer 
                                                                                dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 
                                                                                peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 
                                                                                hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700"
                                                                    >                           
                                                                        <div class="block">
                                                                            <div class="w-full text-lg font-semibold">-</div>
                                                                        </div>
                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <input type="radio" id="ram1" name="ram" value="4GB" class="hidden peer" required />
                                                                    <label 
                                                                        for="ram1" 
                                                                        class="inline-flex items-center justify-between w-full p-2
                                                                                text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer 
                                                                                dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 
                                                                                peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 
                                                                                hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700"
                                                                    >                           
                                                                        <div class="block">
                                                                            <div class="w-full text-lg font-semibold">4 GB</div>
                                                                        </div>
                                                                    </label>
                                                                </li>

                                                                <li>
                                                                    <input type="radio" id="ram2" name="ram" value="8GB" class="hidden peer" />
                                                                    <label 
                                                                        for="ram2" 
                                                                        class="inline-flex items-center justify-between w-full p-2
                                                                                text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer 
                                                                                dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 
                                                                                peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 
                                                                                hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700"
                                                                    >                           
                                                                        <div class="block">
                                                                            <div class="w-full text-lg font-semibold">8 GB</div>
                                                                        </div>
                                                                    </label>
                                                                </li>

                                                                <li>
                                                                    <input type="radio" id="ram3" name="ram" value="16GB" class="hidden peer" />
                                                                    <label 
                                                                        for="ram3" 
                                                                        class="inline-flex items-center justify-between w-full p-2
                                                                                text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer 
                                                                                dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 
                                                                                peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 
                                                                                hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700"
                                                                    >                           
                                                                        <div class="block">
                                                                            <div class="w-full text-lg font-semibold">16 GB</div>
                                                                        </div>
                                                                    </label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-6">
                                                    <div class="grid grid-cols-1 md:grid-cols-2">
                                                        <div class="pr-3">
                                                            <label for="input-label-with-helper-text"
                                                                class="block text-sm mb-2 text-gray-400">PRICE (THB) :</label>
                                                            <input type="text" id="input-label-with-helper-text"
                                                                name="price"
                                                                class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                                                                aria-describedby="hs-input-helper-text"
                                                                >
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <button 
                                        type="submit" 
                                        class="btn text-base py-2.5 text-white 
                                                font-medium w-fit hover:bg-blue-700"
                                    >ADD</button>
                                </form>
							</div>

                            <?php $this->load->view('footer.php'); ?>
						</div>
					</main>
				</div>
			</div>
		</main>

		<?php echo $this->session->flashdata('msgerr'); ?>

        <?php $this->load->view('script-all.php'); ?>
	</body>
</html>