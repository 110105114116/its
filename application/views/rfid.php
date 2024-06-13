<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RFID Verify | Vehicle count system</title>
	<link rel="icon" href="img/logo-mini.png">
	<script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />
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
    <body>
		<?php $this->load->view('header.php'); ?>

        <div class="flex w-full shadow bg-white">
            <div class="flex-none w-1/6 h-max"><?php $this->load->view('menu.php'); ?></div>

            <div class="flex-1 w-5/6 h-max p-4">
                <nav class="" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                        <li class="inline-flex items-center">
                            <a href="dashboard" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
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
								<span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">RFID Verify</span>
							</div>
                        </li>
                    </ol>
                </nav>

                <div class="relative overflow-x-auto sm:rounded-lg">
                    <form class="w-3/5 mx-auto mt-3 p-8" action="<?php echo BASE_URL(); ?>rfid/getEmp" method="get">
                        <div class="text-center text-2xl mb-8">RFID Verify</div>
                        
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

                        <button 
                            type="submit" 
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 
                                    focus:outline-none focus:ring-blue-300 font-medium rounded-lg 
                                    text-sm w-full sm:w-auto px-5 py-2.5 text-center 
                                    dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        >Search</button>
                    </form>
                </div>

                <center>
                <div class="grid grid-cols-1 shadow w-1/2 rounded p-3 text-start">
                    <?php
                        if(isset($data[0])) {
                    ?>
                    <div>
                        <div">
                            <dl class="divide-y divide-gray-100">
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Employee No.</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <?php
                                        echo $data[0]->emp_id;
                                    ?>
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Full name</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                <?php
                                    echo $data[0]->f_name_th.' '.$data[0]->l_name_th;
                                ?>
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Department</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <?php
                                        echo $data[0]->name;
                                    ?>
                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">RFID verify</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <?php
                                        if($data[0]->rfid != NULL || $data[0]->rfid != ''){
                                            echo "<span class=\"inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20\">Verified.</span>";
                                        } else {
                                    ?>
                                        <form action="<?php echo BASE_URL(); ?>rfid/verify" method="get">
                                            <div class="relative">
                                                <input 
                                                    type="text" 
                                                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 
                                                            rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 
                                                            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                                                            dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                                    placeholder="Key no."
                                                    name="rfid_no" 
                                                    required 
                                                    autofocus/>
                                                <input type="text" name="emp_id" value="<?php echo $data[0]->emp_id; ?>" hidden>
                                                <button 
                                                    type="submit" 
                                                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 
                                                            focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg 
                                                            text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                                >
                                                    Verify
                                                </button>
                                            </div>
                                        </form>
                                    <?php
                                        }
                                    ?>

                                </dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Status</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    <?php
                                        echo ($data[0]->s_id)
                                            ? "<span class=\"inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20\">Active</span>"
                                            : "<span class=\"inline-flex items-center rounded-md bg-pink-50 px-2 py-1 text-xs font-medium text-pink-700 ring-1 ring-inset ring-pink-700/10\">In-active</span>"
                                    ?>
                                </dd>
                            </div>
                            </dl>
                        </div>
                    </div>

                    <?php
                        } else echo "<i>กรุณากรอกรหัสพนักงานแล้วกด Search</i>";
                    ?>
                </div></center>
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