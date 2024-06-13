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

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable({
                "iDisplayLength": 8,
                "columnDefs": [
                    {"className": "dt-center", "targets": "_all"}
                ],
                "bLengthChange": false
            });
        } );
    </script>
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
                                Vehicles
                            </a>
                        </li>
                        <li aria-current="page">
							<div class="flex items-center">
								<svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
								</svg>
								<span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">View all vehicles</span>
							</div>
                        </li>
                    </ol>
                </nav>

                <div class="relative overflow-x-auto sm:rounded-lg">
                    <table id="myTable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>เลขทะเบียน</th>
                                <!-- <th>ประเภท</th> -->
                                <th>พนักงาน</th>
                                <th>แผนก</th>
                                <th></th>
                            </tr>
                        </thead>
                       
                        <tbody>
                            <?php
                                if(isset($data)) {
                                    foreach($data as $dt) {
                                        $type = $dt->type == 'moto'
                                            ? "มอเตอร์ไซต์"
                                            : "รถยนต์";
                                        echo "<tr>";
                                        // echo "<td class=\"text-sm font-semibold text-sky-800\">".$dt->license_plate."</td>";
                                        echo "<td class=\"text-sm font-semibold text-sky-800\">";
                                        echo $dt->license_plate;
                                        echo "<p class=\"text-xs font-semibold text-gray-500\">".$type."</p>";
                                        echo "</td>";

                                        // echo "<td class=\"px-6 py-4\">".$type."</td>";

                                        // echo "<td class=\"px-6 py-4\">";

                                        // echo "<p class=\"text-lg text-red-500 text-bold\"><b>".$dt->emp_id."</b></p>";
                                        // echo "<p class=\"\">".$dt->fullname."</p>";

                                        // echo "</td>";

                                        echo "<td class=\"text-sm font-semibold text-sky-800\">";
                                        echo $dt->emp_id;
                                        echo "<p class=\"text-xs font-semibold text-gray-500\">".$dt->fullname."</p>";
                                        echo "</td>";
                                        
                                        // echo "<td class=\"text-sm font-semibold text-sky-800\">".$dt->department."</td>";

                                        echo "<td class=\"text-sm font-semibold text-sky-800\">";
                                        echo $dt->department;
                                        echo "<p class=\"text-xs font-semibold text-gray-500\">".$dt->location."</p>";
                                        echo "</td>";

                                        echo "<td class=\"px-6 py-4\">";
                            ?>
                                        <button class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
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
		
        <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.tailwindcss.js"></script>
    </body>
</html>