<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee management | Vehicle count system</title>
	<link rel="icon" href="img/logo-mini.png">
	<script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable({
                "iDisplayLength": 8,
                "columnDefs": [
                    {"className": "dt-center", "targets": "_all"}
                ],
                "order": [
                    [0, 'desc']
                ],
                "bLengthChange": false
            });
        } );
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
    <body style="background-color: #F1F1F3;">
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
                            <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
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
								<span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">View all employee</span>
							</div>
                        </li>
                    </ol>
                </nav>

                <div class="relative overflow-x-auto sm:rounded-lg">
                    <table id="myTable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>รหัสพนักงาน</th>
                                <th>ชื่อ-นามสกุล</th>
                                <th>แผนก</th>
                                <th>ตำแหน่ง</th>
                                <!-- <th>ประเภท</th> -->
                                <!-- <th>เพศ</th> -->
                                <!-- <th>วันที่เริ่มทำงาน</th> -->
                                <th>สถานะ</th>
                                <th></th>
                            </tr>
                        </thead>
                       
                        <tbody>
                            <?php
                                if(isset($data)) {
                                    foreach($data as $dt) {
                                        $status = $dt->status == 1
                                            ? "ปกติ"
                                            : "พ้นสภาพ";
                                        echo "<tr>";
                                        echo "<td class=\"text-sm font-semibold text-sky-800\">FTH-".$dt->empId."</td>";
                                        echo "<td class=\"text-sm font-semibold text-sky-800\">";
                                        echo $dt->fullname;
                                        if($dt->gender == 'male') {
                                            echo " <i class=\"fa fa-user text-blue-500\"></i>";
                                        } else if ($dt->gender == 'female'){
                                            echo " <i class=\"fa fa-user text-pink-500\"></i>";
                                        } else {
                                            echo "";
                                        }
                                        echo "<p class=\"text-xs font-semibold text-gray-500\">".$dt->fullnameen."</p>";
                                        echo "</td>";

                                        echo "<td class=\"text-sm font-semibold text-sky-800\">";
                                        echo $dt->department;
                                        echo "<p class=\"text-xs font-semibold text-gray-500\">".$dt->location."</p>";
                                        echo "</td>";

                                        // echo "<td>".$dt->department."</td>";
                                        echo "<td class=\"text-sm font-semibold text-sky-800\">".$dt->position."</td>";
                                        // echo "<td>".$dt->position."</td>";
                                        // echo "<td>".$dt->type."</td>";
                                        // echo "<td>".$dt->gender."</td>";
                                        // echo "<td>".$dt->sDate."</td>";


                                        // echo "<td>";
                                        if($dt->status == 1) {
                                            echo "<td class=\"text-sky-800 font-semibold\">";
                                            echo "<span class=\"inline-flex items-center rounded-md bg-green-50 px-4 py-2 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-700/10\">".$status."</span>";
                                            echo "</td>";
                                        } else {
                                            echo "<td class=\"text-sky-800 font-semibold\">";
                                            echo "<span class=\"inline-flex items-center rounded-md bg-red-50 px-4 py-2 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10\">".$status."</span>";
                                            echo "</td>";
                                        }
                                        // echo "</td>";
                                        echo "<td>";
                            ?>
                                        <button 
                                            data-modal-target="empModal" 
                                            data-modal-toggle="empModal"
                                            onclick="detail(<?php echo $dt->empId; ?>)"
                                            class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800"
                                        >
                                            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                                ดูข้อมูล
                                            </span>
                                        </button>
                            <?php
                                        echo "</td></tr>";
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <?php echo $this->session->flashdata('msgerr'); ?>

        <script>
            function detail(id) {
                $.ajax({  
                    url : "<?php echo base_url('employee/getEmpData') ?>", 
                    type:"POST",  
                    data:{
                        id: id
                    },  
                    success:function(data){
                        $('#modal_detail').html(data);  
                    }  
                });  
            }

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


        <div 
            id="empModal" 
            tabindex="-1" 
            aria-hidden="true" 
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 
                left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"
        >
            <div class="relative p-4 w-full max-w-3xl max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-base font-semibold leading-7 text-gray-900">Information</h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="empModal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <form method="post" action="<?php echo base_url(); ?>employee/updateInfo">
                        <div class="px-5">
                            <div class="modal-body" id="modal_detail"></div>
                        </div>
                        <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <!-- data-modal-toggle="empModal" -->
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div> 

        <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.tailwindcss.js"></script>

    </body>
</html>