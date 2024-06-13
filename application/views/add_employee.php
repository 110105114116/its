<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee management | Vehicle count system</title>
	<link rel="icon" href="img/logo-mini.png">
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body { 
			background-color: #F1F1F3; 
			overflow: hidden;
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
    <body>
		<?php $this->load->view('header.php'); ?>

        <div class="flex w-full shadow bg-white">
            <div class="flex-none w-1/6 h-max"><?php $this->load->view('menu.php'); ?></div>

            <div class="flex-1 w-5/6 h-max p-4">
                <nav class="" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="<?php echo BASE_URL(); ?>dashboard" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                                </svg>
                                Dashboard
                            </a>
                        </li>
						<li class="inline-flex items-center">
                            <a href="<?php echo BASE_URL(); ?>employee" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
								<svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
								</svg>
                                Employee
                            </a>
                        </li>
                        <li aria-current="page">
							<div class="flex items-center">
								<svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
								</svg>
								<span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Add new employee</span>
							</div>
                        </li>
                    </ol>
                </nav>

				<form class="w-3/5 mx-auto mt-3 p-8" action="<?php echo BASE_URL(); ?>employee/addEmp" method="get">
					<div class="text-center text-2xl mb-8">
						New employee
						
					</div>
					

					<div class="relative z-0 w-full mb-5 group">
						<input 
							type="text" 
							name="emp_id" 
							id="empId" 
							class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent 
									border-0 border-b-2 border-gray-300 appearance-none dark:text-white 
									dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none 
									focus:ring-0 focus:border-blue-600 peer" 
							placeholder=" "  
							required
						/>
						<label 
							for="empId" 
							class="peer-focus:font-medium absolute text-sm text-gray-500 
									dark:text-gray-400 duration-300 transform -translate-y-6 
									scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 
									rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto 
									peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
									peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
									peer-focus:scale-75 peer-focus:-translate-y-6"
						>Employee No.</label>
					</div>

					<div class="grid md:grid-cols-2 md:gap-6">
						<div class="relative z-0 w-full mb-5 group">
							<input 
								type="text" 
								name="first_name_th" 
								id="first_name_th" 
								class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent 
										border-0 border-b-2 border-gray-300 appearance-none 
										dark:text-white dark:border-gray-600 dark:focus:border-blue-500 
										focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
								placeholder=" " 
								required
							/>
							<label 
								for="first_name_th" 
								class="peer-focus:font-medium absolute text-sm text-gray-500 
								dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 
								top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 
								peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 
								peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"
							>First name (ภาษาไทย)</label>
						</div>
						<div class="relative z-0 w-full mb-5 group">
							<input 
								type="text" 
								name="last_name_th" 
								id="last_name_th" 
								class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent 
										border-0 border-b-2 border-gray-300 appearance-none dark:text-white 
										dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none 
										focus:ring-0 focus:border-blue-600 peer" 
								placeholder=" " 
								required
							/>
							<label 
								for="last_name_th" 
								class="peer-focus:font-medium absolute text-sm text-gray-500 
								dark:text-gray-400 duration-300 transform -translate-y-6 
								scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 
								peer-focus:text-blue-600 peer-focus:dark:text-blue-500 
								peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 
								peer-focus:scale-75 peer-focus:-translate-y-6"
							>Last name (ภาษาไทย)</label>
						</div>
					</div>

					<div class="grid md:grid-cols-2 md:gap-6">
						<div class="relative z-0 w-full mb-5 group">
							<input type="text" name="first_name_en" id="first_name_en" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required/>
							<label for="first_name_en" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First Name</label>
						</div>
						<div class="relative z-0 w-full mb-5 group">
							<input type="text" name="last_name_en" id="last_name_en" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  required/>
							<label for="last_name_en" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
						</div>
					</div>

					<div class="grid md:grid-cols-2 md:gap-6">
						<div class="relative z-0 w-full mb-5 group">
							<label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
							<select 
								name="gender" 
								id="gender" 
								class="block py-2.5 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
										appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none 
										focus:ring-0 focus:border-blue-600 peer"
								required
							>
								<option selected disabled value="">-- Please select --</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
						</div>
						<div class="relative z-0 w-full mb-5 group"></div>
					</div>

					<div class="grid md:grid-cols-2 md:gap-6">
						<div class="relative z-0 w-full mb-5 group">
							<label 
								for="dept_emp" 
								class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
							>Department</label>

							<input 
								list="departmentList" 
								name="dept_emp" 
								id="dept_emp"
								class="block py-2.5 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
										appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none 
										focus:ring-0 focus:border-blue-600 peer"
								required>
							<datalist id="departmentList">
								<?php 
									foreach($department as $dept) {
										echo "<option value=\"$dept->id\">".$dept->name;
									}
								?>
							</datalist>
						</div>
						<div class="relative z-0 w-full mb-5 group">
							<label 
								for="posi_emp" 
								class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
							>Position</label>
							<input 
								list="positionList" 
								name="posi_emp" 
								id="posi_emp"
								class="block py-2.5 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
										appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none 
										focus:ring-0 focus:border-blue-600 peer"
								required>
							<datalist id="positionList">
								<?php 
									foreach($position as $posi) {
										echo "<option value=\"$posi->id\">".$posi->name;
									}
								?>
							</datalist>
						</div>
					</div>

					<div class="grid md:grid-cols-2 md:gap-6">
						<div class="relative z-0 w-full mb-5 group">
							<label 
								for="type_emp" 
								class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
							>Type of employee</label>
							<select 
								name="type_emp" 
								id="type_emp" 
								class="block py-2.5 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
										appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none 
										focus:ring-0 focus:border-blue-600 peer"
								required
							>
								<option selected disabled value="">-- Please select --</option>
								<option value="monthly">Monthly</option>
								<option value="daily">Daily</option>
							</select>
						</div>
						<div class="relative z-0 w-full mb-5 group"></div>
					</div>

					<div class="grid md:grid-cols-2 md:gap-6">
						<div class="relative z-0 w-full mb-5 group">
							<label 
								for="type_emp" 
								class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
							>Start date</label>
							<input 
								type="date" 
								name="start_date" 
								id="start_date" 
								class="block py-2.5 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 
										appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none 
										focus:ring-0 focus:border-blue-600 peer" 
								placeholder=" "
								required
							/>
						</div>
						
						<div class="relative z-0 w-full mb-5 group"></div>
					</div>

					<button 
						type="submit" 
						class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 
								focus:outline-none focus:ring-blue-300 font-medium rounded-lg 
								text-sm w-full sm:w-auto px-5 py-2.5 text-center 
								dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
					>Add</button>
				</form>
            </div>

        </div>

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
    </body>
</html>