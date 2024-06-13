<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>DASHBOARD | INFORMATION TECHNOLOGY SYSTEM</title>

		<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>img/logo-mini.png" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/theme.css" />
		
		<script src="https://cdn.tailwindcss.com"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	</head>

	<body class=" bg-surface">
		<main>
			<div id="main-wrapper" class="flex p-5 xl:pr-0">
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
										<h3 class="text-lg font-semibold">Equipment management</h3>
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
														<a href="<?php echo base_url(); ?>login/logout" class="btn bg-white text-red-500 border border-red-500 font-medium text-[15px] w-full hover:bg-red-600 hover:text-white">Logout</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</nav>
							</header>

							<!-- Content -->
							<div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-x-6 gap-x-0 lg:gap-y-0 gap-y-6">
								<div class="col-span-2">
									<div class="card">
										<div class="card-body">
											<div class="flex  justify-between mb-5">
												<h4 class="text-gray-500 text-lg font-semibold sm:mb-0 mb-2">Profit & Expenses</h4>
												<div class="hs-dropdown relative inline-flex [--placement:bottom-right] sm:[--trigger:hover]">
													<a class="relative hs-dropdown-toggle cursor-pointer align-middle rounded-full">
														<i class="ti ti-dots-vertical text-2xl text-gray-400"></i>
													</a>
													<div class="card hs-dropdown-menu transition-[opacity,margin] rounded-md duration hs-dropdown-open:opacity-100 opacity-0 mt-2 min-w-max  w-[150px] hidden z-[12]"
														aria-labelledby="hs-dropdown-custom-icon-trigger">
														<div class="card-body p-0 py-2">
															<a href="javscript:void(0)" class="flex gap-2 items-center font-medium px-4 py-2.5 hover:bg-gray-200 text-gray-400">
																<p class="text-sm ">Action</p>
															</a>
															<a href="javscript:void(0)" class="flex gap-2 items-center font-medium px-4 py-2.5 hover:bg-gray-200 text-gray-400">
																<p class="text-sm ">Another Action</p>
															</a>
															<a href="javscript:void(0)" class="flex gap-2 items-center font-medium px-4 py-2.5 hover:bg-gray-200 text-gray-400">
																<p class="text-sm ">Something else here</p>
															</a>
														</div>
													</div>
												</div>
											</div>
											<div id="profit"></div>
										</div>
									</div>
								</div>
								
								<div class="flex flex-col gap-6">
									<div class="card">
										<div class="card-body">
											<h4 class="text-gray-500 text-lg font-semibold mb-4">Equipment</h4>
											<div class="flex items-center justify-between gap-12">
												<div >
													<h3 class="text-[40px] font-semibold text-gray-500 mb-4">539</h3>
													<div class="flex items-center gap-1 mb-3">
														<span class="flex items-center justify-center w-5 h-5 rounded-full bg-green-400">
															<i class="ti ti-refresh text-green-500"></i>
														</span>
														<!-- <p class="text-gray-500 text-sm font-normal ">Update</p> -->
														<p class="text-gray-400 text-sm font-normal text-nowrap">2024-05-27</p>
													</div>
													<div class="flex gap-4">
														<div class="flex gap-2 items-center">
															<span class="w-2 h-2 rounded-full bg-blue-600"></span>
															<p class="text-gray-400 font-normal text-xs">USE</p>
														</div>
														<div class="flex gap-2 items-center">
															<span class="w-2 h-2 rounded-full bg-red-500"></span>
															<p class="text-gray-400 font-normal text-xs">REPORT</p>
														</div>
													</div>
												</div>
												<div class="flex items-center">
													<div id="grade"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-body">
											<div class="flex gap-6 items-center justify-between">
											<div class="flex flex-col gap-4">
												<h4 class="text-gray-500 text-lg font-semibold">Cost (Yearly)</h4>
												<div class="flex flex-col gap-4">
												<h3 class="text-[40px] font-semibold text-gray-500">2,549.55</h3>
												<div class="flex items-center gap-1">
												<span class="flex items-center justify-center w-5 h-5 rounded-full bg-green-400">
													<i class="ti ti-refresh text-green-500"></i>
												</span>
												<!-- <p class="text-gray-500 text-sm font-normal ">+9%</p> -->
												<p class="text-gray-400 text-sm font-normal text-nowrap">2024-05-28</p>
												</div>
											</div>
											</div>
											
												<div class="w-11 h-11 flex justify-center items-center rounded-full bg-red-500 text-white self-start">
													<i class="ti ti-currency-baht text-xl"></i>
												</div>
									
											</div>
										</div>
										<!-- <div id="earning"></div> -->
									</div>
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
	
		<script src="<?php echo base_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/libs/simplebar/dist/simplebar.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/libs/iconify-icon/dist/iconify-icon.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/libs/@preline/dropdown/index.js"></script>
		<script src="<?php echo base_url(); ?>assets/libs/@preline/overlay/index.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/sidebarmenu.js"></script>
		<script src="<?php echo base_url(); ?>assets/libs/apexcharts/dist/apexcharts.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/dashboard.js"></script>
	</body>

</html>