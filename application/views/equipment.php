<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>EQUIPMENT's | INFORMATION TECHNOLOGY SYSTEM</title>

		<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/images/logos/logo-mini.png" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme.css" />
		<link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />
		<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<script src="https://cdn.tailwindcss.com"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
		<script>
			$(document).ready( function () {
				$('#example').DataTable({
					"iDisplayLength": 8,
					"columnDefs": [
						{"className": "dt-center", "targets": "_all"}
					],
					"bLengthChange": false
				});
			});
		</script>

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

            .toast-content .checked {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 35px;
            min-width: 35px;
            background-color: green;
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

            .toast .progress .close:before {
            content: "";
            position: absolute;
            bottom: 0;
            right: 0;
            height: 100%;
            width: 100%;
            background-color: red;
            }

            .toast .progress .checked:before {
            content: "";
            position: absolute;
            bottom: 0;
            right: 0;
            height: 100%;
            width: 100%;
            background-color: green;
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

	<body class="bg-surface">
		<main>
			<div id="main-wrapper" class="flex p-5 xl:pr-0 min-h-screen">
				<!-- Side bar -->
		        <?php $this->load->view('sidebar-dashboard.php'); ?>

				<!-- Main -->
				<div class=" w-full page-wrapper xl:px-6 px-0">
					<main class="h-full  max-w-full">
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
										<h3 class="text-lg font-semibold">All equipment's</h3>
										<p class="text-xs text-gray-400 font-semibold">อุปกรณ์ทั้งหมด</p>
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
							<div class="card overflow-x-auto">
								<div class="card-body flex flex-col gap-6">
                                    <table id="example" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Model</th>
                                                <th>Type</th>
                                                <th>Employee</th>
                                                <th>Location</th>
                                                <th>Status</th>
                                                <th>Management</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($data as $ep) { ?>
                                            <tr>
                                                <td>
                                                    <span class="text-sm font-semibold"><?php echo $ep->equip_name; ?></span>
                                                    <p class="text-xs font-semibold text-gray-500"><?php echo $ep->ip_address; ?></p>
                                                </td>
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800"><?php echo $ep->model; ?></span>
                                                    <!-- <p class="text-xs font-semibold text-gray-500">model: <?php echo $ep->model; ?></p> -->
                                                </td>
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800"><?php echo $ep->type; ?></span>
                                                    <p class="text-xs font-semibold text-gray-500">
                                                        RAM: <?php echo $ep->ram; ?> | <?php echo ($ep->mem_t == 1) ? "HHD" : "SSD"; ?>: 
                                                        <?php echo $ep->mem; ?>
                                                    </p>
                                                </td>
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800"><?php echo $ep->emp_id; ?></span>
                                                    <p class="text-xs font-semibold text-gray-500"><?php echo $ep->fullname; ?></p>
                                                </td>
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800"><?php echo $ep->location; ?></span>
                                                    <p class="text-xs font-semibold text-gray-500">Factory: <?php echo $ep->fac; ?></p>
                                                </td>
                                                <td class="text-green-700 font-semibold">
                                                    <?php
                                                        if($ep->status == 1) {
                                                            echo "Active";
                                                        } else echo "Inactive";
                                                    ?>
                                                </td>
                                                <td>
                                                    <!-- <button 
														data-modal-target="default-modal" data-modal-toggle="default-modal"
														class="border border-sky-800 px-3 rounded py-2 text-sky-800 font-semibold hover:bg-sky-800 hover:text-white">
                                                        <i class="ti ti-search relative z-1"></i>
                                                    </button>
                                                    <button class="border border-yellow-600 px-3 rounded py-2 text-yellow-600 font-semibold hover:bg-yellow-600 hover:text-white">
                                                        <i class="ti ti-edit relative z-1"></i>
                                                    </button>
                                                    <button class="border border-red-800 px-3 rounded py-2 text-red-800 font-semibold hover:bg-red-800 hover:text-white">
                                                        <i class="ti ti-trash relative z-1"></i>
                                                    </button> -->
                                                </td>
                                            </tr>
                                            <?php } ?>

                                            <!-- <tr>
												<td>
                                                    <span class="text-sm font-semibold">FUNAI-NB-35</span>
                                                    <p class="text-xs font-semibold text-gray-500">10.112.32.43</p>
                                                </td>
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800">Lenovo thinkpad</span>
                                                    <p class="text-xs font-semibold text-gray-500">model: P14s GEN2</p>
                                                </td>
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800">Notebook</span>
                                                    <p class="text-xs font-semibold text-gray-500">
                                                        RAM: 16GB | SSD: 500GB
                                                    </p>
                                                </td>
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800">99536</span>
                                                    <p class="text-xs font-semibold text-gray-500">Trin Deethanarak</p>
                                                </td>
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800">Office 1</span>
                                                    <p class="text-xs font-semibold text-gray-500">Factory: 1</p>
                                                </td>
                                                <td class="text-green-700 font-semibold">Active</td>
                                                <td>
                                                    <button 
														data-modal-target="default-modal" data-modal-toggle="default-modal"
														class="border border-sky-800 px-3 rounded py-2 text-sky-800 font-semibold hover:bg-sky-800 hover:text-white">
                                                        <i class="ti ti-search relative z-1"></i>
                                                    </button>
                                                    <button class="border border-yellow-600 px-3 rounded py-2 text-yellow-600 font-semibold hover:bg-yellow-600 hover:text-white">
                                                        <i class="ti ti-edit relative z-1"></i>
                                                    </button>
                                                    <button class="border border-red-800 px-3 rounded py-2 text-red-800 font-semibold hover:bg-red-800 hover:text-white">
                                                        <i class="ti ti-trash relative z-1"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr>
												<td>
                                                    <span class="text-sm font-semibold">FUNAI-MO-11</span>
                                                    <p class="text-xs font-semibold text-gray-500">-</p>
                                                </td>
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800">DELL monitor</span>
                                                    <p class="text-xs font-semibold text-gray-500">model: -</p>
                                                </td>
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800">Monitor</span>
                                                    <p class="text-xs font-semibold text-gray-500">
                                                        PORT: VGA, HDMI | Size: 24"
                                                    </p>
                                                </td>
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800">99536</span>
                                                    <p class="text-xs font-semibold text-gray-500">Trin Deethanarak</p>
                                                </td>
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800">Office 1</span>
                                                    <p class="text-xs font-semibold text-gray-500">Factory: 1</p>
                                                </td>
                                                <td class="text-blue-900 font-semibold">Requisition</td>
                                                <td>
                                                    <button class="border border-sky-800 px-3 rounded py-2 text-sky-800 font-semibold hover:bg-sky-800 hover:text-white">
                                                        <i class="ti ti-search relative z-1"></i>
                                                    </button>
                                                    <button class="border border-yellow-600 px-3 rounded py-2 text-yellow-600 font-semibold hover:bg-yellow-600 hover:text-white">
                                                        <i class="ti ti-edit relative z-1"></i>
                                                    </button>
                                                    <button class="border border-red-800 px-3 rounded py-2 text-red-800 font-semibold hover:bg-red-800 hover:text-white">
                                                        <i class="ti ti-trash relative z-1"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr>
												<td>
													<span class="text-sm font-semibold">FUNAI-UPS-41</span>
													<p class="text-xs font-semibold text-gray-500">-</p>
												</td>
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800">CBC UPS</span>
                                                    <p class="text-xs font-semibold text-gray-500">model: Champ LCD</p>
                                                </td>
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800">UPS</span>
                                                    <p class="text-xs font-semibold text-gray-500">
                                                        VA: 1000va | WATT: 600w
                                                    </p>
                                                </td>
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800">99536</span>
                                                    <p class="text-xs font-semibold text-gray-500">Trin Deethanarak</p>
                                                </td>
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800">Office 1</span>
                                                    <p class="text-xs font-semibold text-gray-500">Factory: 1</p>
                                                </td>
                                                <td class="text-yellow-700 font-semibold">Repairing</td>
                                                <td>
                                                    <button class="border border-sky-800 px-3 rounded py-2 text-sky-800 font-semibold hover:bg-sky-800 hover:text-white">
                                                        <i class="ti ti-search relative z-1"></i>
                                                    </button>
                                                    <button class="border border-yellow-600 px-3 rounded py-2 text-yellow-600 font-semibold hover:bg-yellow-600 hover:text-white">
                                                        <i class="ti ti-edit relative z-1"></i>
                                                    </button>
                                                    <button class="border border-red-800 px-3 rounded py-2 text-red-800 font-semibold hover:bg-red-800 hover:text-white">
                                                        <i class="ti ti-trash relative z-1"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr>
												<td>
													<span class="text-sm font-semibold">FUNAI-PC-32</span>
													<p class="text-xs font-semibold text-gray-500">10.112.32.106</p>
												</td>
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800">Dell inspiron 14</span>
                                                    <p class="text-xs font-semibold text-gray-500">model: 3000 series</p>
                                                </td>
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800">Computer</span>
                                                    <p class="text-xs font-semibold text-gray-500">
                                                        RAM: 4GB | HDD: 1TB
                                                    </p>
                                                </td>
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800">96228</span>
                                                    <p class="text-xs font-semibold text-gray-500">Sompong Yoyo</p>
                                                </td>
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800">Molding</span>
                                                    <p class="text-xs font-semibold text-gray-500">Factory: 2</p>
                                                </td>
                                                <td class="text-red-700 font-semibold">Inactive</td>
                                                <td>
                                                    <button class="border border-sky-800 px-3 rounded py-2 text-sky-800 font-semibold hover:bg-sky-800 hover:text-white">
                                                        <i class="ti ti-search relative z-1"></i>
                                                    </button>
                                                    <button class="border border-yellow-600 px-3 rounded py-2 text-yellow-600 font-semibold hover:bg-yellow-600 hover:text-white">
                                                        <i class="ti ti-edit relative z-1"></i>
                                                    </button>
                                                    <button class="border border-red-800 px-3 rounded py-2 text-red-800 font-semibold hover:bg-red-800 hover:text-white">
                                                        <i class="ti ti-trash relative z-1"></i>
                                                    </button>
                                                </td>
                                            </tr> -->
                                        </tbody>
                                    </table>
								</div>
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
        
        <script>
			const button = document.querySelector("button"),
			toast = document.querySelector(".toast");
			(closeIcon = document.querySelector(".close")),
			(progress = document.querySelector(".progress"));

			let timer1, timer2;

			setTimeout(() => {
				toast.classList.remove("active");
			}, 5000); //1s = 1000 milliseconds

			setTimeout(() => {
				progress.classList.remove("active");
			}, 5300);

			closeIcon.addEventListener("click", () => {
				toast.classList.remove("active");

				setTimeout(() => {
					progress.classList.remove("active");
					toast.classList.remove("active");
				}, 300);

				clearTimeout(timer1);
				clearTimeout(timer2);
			});
		</script>

		<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
			<div class="relative p-4 w-full max-w-10xl max-h-full">
				<div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

					<div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
						<h3 class="text-xl font-semibold text-gray-900 dark:text-white">
							Check sheet PM
						</h3>
						<button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
							<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
							</svg>
							<span class="sr-only">Close modal</span>
						</button>
					</div>

					<div class="p-4 md:p-5 space-y-4">
						<div class="relative overflow-x-auto">
							<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
								<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
									<tr>
										<th scope="col" class="px-6 py-3">Topic</th>
										<th scope="col" class="px-6 py-3">January</th>
										<th scope="col" class="px-6 py-3">February</th>
										<th scope="col" class="px-6 py-3">March</th>
										<th scope="col" class="px-6 py-3">April</th>
										<th scope="col" class="px-6 py-3">May</th>
										<th scope="col" class="px-6 py-3">June</th>
										<th scope="col" class="px-6 py-3">July</th>
										<th scope="col" class="px-6 py-3">August</th>
										<th scope="col" class="px-6 py-3">September</th>
										<th scope="col" class="px-6 py-3">October</th>
										<th scope="col" class="px-6 py-3">November</th>
										<th scope="col" class="px-6 py-3">December</th>
									</tr>
								</thead>
								<tbody>
									<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
										<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
											1. Check capacity and disk
										</th>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											  </svg>
										</td>
										<td class="px-6 py-4 text-center"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
											<path d="M5 12l5 5l10 -10" />
										  </svg></td>
										<td class="px-6 py-4 text-center"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
											<path d="M5 12l5 5l10 -10" />
										  </svg></td>
										<td class="px-6 py-4 text-center"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
											<path d="M5 12l5 5l10 -10" />
										  </svg></td>
										<td class="px-6 py-4 text-center"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
											<path d="M5 12l5 5l10 -10" />
										  </svg></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
									</tr>
									<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
										<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
											2. Disk clean up
										</th>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											  </svg>
										</td>
										<td class="px-6 py-4 text-center"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
											<path d="M5 12l5 5l10 -10" />
										  </svg></td>
										<td class="px-6 py-4 text-center"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
											<path d="M5 12l5 5l10 -10" />
										  </svg></td>
										<td class="px-6 py-4 text-center"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
											<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
											<path d="M5 12l5 5l10 -10" />
										  </svg></td>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M18 6l-12 12" />
												<path d="M6 6l12 12" />
											  </svg>
										</td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
									</tr>
									<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
										<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
											3. Equipment cleaning
										</th>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											  </svg>
										</td>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											</svg>
										</td>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											</svg>
										</td>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											</svg>
										</td>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											</svg>
										</td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
									</tr>
									<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
										<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
											4. Screen server energy
										</th>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											  </svg>
										</td>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											</svg>
										</td>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											</svg>
										</td>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											</svg>
										</td>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											</svg>
										</td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
									</tr>
									<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
										<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
											5. Check email not over size
										</th>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											  </svg>
										</td>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											</svg>
										</td>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											</svg>
										</td>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											</svg>
										</td>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											</svg>
										</td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
									</tr>
									<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
										<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
											6. Standard programs
										</th>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											  </svg>
										</td>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											</svg>
										</td>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											</svg>
										</td>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											</svg>
										</td>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											</svg>
										</td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
									</tr>
									<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
										<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
											7. Scan virus test
										</th>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											  </svg>
										</td>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											</svg>
										</td>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											</svg>
										</td>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											</svg>
										</td>
										<td class="px-6 py-4 text-center">
											<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round">
												<path stroke="none" d="M0 0h24v24H0z" fill="none"/>
												<path d="M5 12l5 5l10 -10" />
											</svg>
										</td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
										<td class="px-6 py-4 text-center"></td>
									</tr>
								</tbody>
							</table>
						</div>

					</div>

					<!-- <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
						<button data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
						<button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
					</div> -->
				</div>
			</div>
		</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
        <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.tailwindcss.js"></script>
		<script src="<?php echo base_url(); ?>assets/libs/simplebar/dist/simplebar.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/libs/iconify-icon/dist/iconify-icon.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/libs/@preline/dropdown/index.js"></script>
		<script src="<?php echo base_url(); ?>assets/libs/@preline/overlay/index.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/sidebarmenu.js"></script>
	</body>
</html>