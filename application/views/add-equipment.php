<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>ADD NEW EQUIPMENT's | INFORMATION TECHNOLOGY SYSTEM</title>

		<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/images/logos/logo-mini.png" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme.css" />
		
		<script src="https://cdn.tailwindcss.com"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <style>
            body { 
                overflow-x: hidden;
            }
            
            .toast {
                position: absolute;
                top: 25px;
                right: 30px;
                border-radius: 12px;
                background: #fff;
                padding: 20px 35px 20px 25px;
                box-shadow: 0 6px 20px -5px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                transform: translateX(calc(100% + 30px));
                transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.35);
            }

            .toast.active {
            transform: translateX(0%);
            }

            .toast .toast-content {
            display: flex;
            align-items: center;
            }

            .toast-content .check {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 35px;
            min-width: 35px;
            background-color: red;
            color: #fff;
            font-size: 20px;
            border-radius: 50%;
            }

            .toast-content .message {
            display: flex;
            flex-direction: column;
            margin: 0 20px;
            }

            .message .text {
            font-size: 16px;
            font-weight: 400;
            color: #666666;
            }

            .message .text.text-1 {
            font-weight: 600;
            color: #333;
            }

            .toast .close {
            position: absolute;
            top: 10px;
            right: 15px;
            padding: 5px;
            cursor: pointer;
            opacity: 0.7;
            }

            .toast .close:hover {
            opacity: 1;
            }

            .toast .progress {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 3px;
            width: 100%;

            }

            .toast .progress:before {
            content: "";
            position: absolute;
            bottom: 0;
            right: 0;
            height: 100%;
            width: 100%;
            background-color: red;
            }

            .progress.active:before {
            animation: progress 5s linear forwards;
            }

            @keyframes progress {
            100% {
                right: 100%;
            }
            }

            .toast.active ~ button {
            pointer-events: none;
            }
        </style>
	</head>

	<body class=" bg-surface">
		<main>
			<div id="main-wrapper" class=" flex p-5 xl:pr-0 min-h-screen">
				<!-- Side bar -->
		        <?php $this->load->view('sidebar-dashboard.php'); ?>
				
				<!-- Main -->
				<div class=" w-full page-wrapper xl:px-6 px-0">
					<main class="h-full  max-w-full">
						<div class="container full-container p-0 flex flex-col gap-5">
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
									<div class="flex items-center gap-4">
										<div class="hs-dropdown relative inline-flex [--placement:bottom-right] sm:[--trigger:hover]">
											<a class="relative hs-dropdown-toggle cursor-pointer align-middle rounded-full">
												<img class="object-cover w-9 h-9 rounded-full" src="<?php echo base_url(); ?>assets/images/profile/user-1.jpg" alt=""
													aria-hidden="true">
											</a>
											<div class="card hs-dropdown-menu transition-[opacity,margin] rounded-md duration hs-dropdown-open:opacity-100 opacity-0 mt-2 min-w-max  w-[200px] hidden z-[12]"
												aria-labelledby="hs-dropdown-custom-icon-trigger">
												<div class="card-body p-0 py-2">
													<a href="javscript:void(0)" class="flex gap-2 items-center font-medium px-4 py-1.5 hover:bg-gray-200 text-gray-400">
														<i class="ti ti-mail  text-xl"></i>
														<p class="text-sm ">My Account</p>
													</a>
													<div class="px-4 mt-[7px] grid">
														<a href="<?php echo base_url(); ?>login/logout" class="btn-outline-primary font-medium text-[15px] w-full hover:bg-blue-600 hover:text-white">Logout</a>
													</div>

												</div>
											</div>
										</div>
									</div>
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
                                                        <div class="pr-3">
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
                                                        </div>
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
                                                            <input 
                                                                type="radio" 
                                                                class="shrink-0 mt-0.5 rounded-[4px] border-gray-400 rounded 
                                                                        text-blue-600 focus:ring-blue-500 disabled:opacity-50 
                                                                        disabled:pointer-events-none" 
                                                                id="hs-disabled-checkbox"
                                                                name="factory"
                                                                value="1"
                                                                required>
                                                            <label class="text-sm ms-3 ">Factory 1</label>
                                                            <input 
                                                                type="radio" 
                                                                class="shrink-0 mt-0.5 rounded-[4px] border-gray-400 rounded 
                                                                        text-blue-600 focus:ring-blue-500 disabled:opacity-50 
                                                                        disabled:pointer-events-none" 
                                                                id="hs-disabled-checkbox"
                                                                value="2"
                                                                name="factory">
                                                            <label class="text-sm ms-3 ">Factory 2</label>
                                                            <input 
                                                                type="radio" 
                                                                class="shrink-0 mt-0.5 rounded-[4px] border-gray-400 rounded 
                                                                        text-blue-600 focus:ring-blue-500 disabled:opacity-50 
                                                                        disabled:pointer-events-none" 
                                                                id="hs-disabled-checkbox"
                                                                value="3"
                                                                name="factory">
                                                            <label class="text-sm ms-3 ">Factory 3</label>
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
                                                                required
                                                                autocomplete="off"
                                                            >
                                                        </div>
                                                        <div class="pr-3">
                                                            <label for="input-label-with-helper-text"
                                                                class="block text-sm mb-2 text-gray-400">MODEL :</label>
                                                            <input 
                                                                type="text" 
                                                                id="input-label-with-helper-text"
                                                                name="model"
                                                                class="py-3 px-4 text-gray-500 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                                                                aria-describedby="hs-input-helper-text"
                                                                required
                                                                autocomplete="off"
                                                            >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-6">
                                                    <div class="grid grid-cols-1 md:grid-cols-2">
                                                        <div class="pr-3">
                                                            <label for="input-label-with-helper-text"
                                                                class="block text-sm mb-2 text-gray-400">MEMORY TYPE :</label>
                                                            <input 
                                                                type="radio" 
                                                                class="shrink-0 mt-0.5 rounded-[4px] border-gray-400 rounded 
                                                                        text-blue-600 focus:ring-blue-500 disabled:opacity-50 
                                                                        disabled:pointer-events-none" 
                                                                id="hs-disabled-checkbox"
                                                                name="mem_type"
                                                                value="1"
                                                                required>
                                                            <label class="text-sm ms-3 ">HDD</label>
                                                            <input 
                                                                type="radio" 
                                                                class="shrink-0 mt-0.5 rounded-[4px] border-gray-400 rounded 
                                                                        text-blue-600 focus:ring-blue-500 disabled:opacity-50 
                                                                        disabled:pointer-events-none" 
                                                                id="hs-disabled-checkbox"
                                                                value="2"
                                                                name="mem_type">
                                                            <label class="text-sm ms-3 ">SSD</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mb-6">
                                                    <div class="grid grid-cols-1 md:grid-cols-2">
                                                        <div class="pr-3">
                                                            <label for="input-label-with-helper-text"
                                                                class="block text-sm mb-2 text-gray-400">MEMORY :</label>
                                                            <input 
                                                                type="text" 
                                                                id="input-label-with-helper-text"
                                                                name="mem"
                                                                class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                                                                aria-describedby="hs-input-helper-text"
                                                                required>
                                                        </div>
                                                        <div class="md:pl-3">
                                                            <label for="input-label-with-helper-text"
                                                                class="block text-sm mb-2 text-gray-400">RAM :</label>
                                                            <input 
                                                                type="text" 
                                                                id="input-label-with-helper-text"
                                                                name="ram"
                                                                class="py-3 px-4 block w-full border-gray-200 rounded-sm text-sm focus:border-blue-600 focus:ring-0 "
                                                                aria-describedby="hs-input-helper-text"
                                                                required>
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
                                                                required>
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

							<!-- Footer -->
							<footer>
								<p class="text-base text-gray-400 font-normal p-3 text-center">
									Development by Funai(Thailand) Co.,Ltd.
								</p>
							</footer>
						</div>
					</main>
				</div>
			</div>
		</main>

		<?php echo $this->session->flashdata('msgerr'); ?>

		<script src="<?php echo base_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/libs/simplebar/dist/simplebar.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/libs/iconify-icon/dist/iconify-icon.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/libs/@preline/dropdown/index.js"></script>
		<script src="<?php echo base_url(); ?>assets/libs/@preline/overlay/index.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/sidebarmenu.js"></script>
	</body>
</html>