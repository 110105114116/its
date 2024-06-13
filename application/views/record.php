<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record time | Vehicle count system</title>
	<link rel="icon" href="img/logo-mini.png">
	<script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css" />

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable({
                "iDisplayLength": 5,
                "columnDefs": [
                    {"className": "dt-center", "targets": "_all"}
                ],
                "bLengthChange": false
            });
        });
    </script>
</head>
    <body style="background-color: #F1F1F3;">
        <header>
            <div class="grid grid-cols-3 bg-gray-50 w-full p-5 shadow drop-shadow-md text-center">
                <div class="text-start">
                    <a href="<?php echo BASE_URL(); ?>">
                        <img src="img/logo-full.png" alt="logo Funai" width="20%">
                    </a>
                </div>
                <div class="text-3xl">
                    VEHICLE COUNT SYSTEM
                </div>
                <div class="text-end">
                    <p><?php echo $this->session->userdata['display_name']; ?></p>
                    <p>
                        <a href="login/logout" class="text-red-500/75 font-bold hover:text-red-500">
                            Logout
                        </a>
                    </p>
                </div>
            </div>
        </header>

        <div class="flex w-full shadow bg-white overflow-x">
            <div class="flex-none w-1/6 h-max"><?php $this->load->view('menu.php'); ?></div>

            <div 
                style="height: 750px;"
                class="flex-1 w-5/6 h-max p-4 overflow-auto"
            >
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
                                Record time
                            </a>
                        </li>
                        <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Transaction</span>
                        </div>
                        </li>
                    </ol>
                </nav>

                <?php
                    if(isset($sDate)) {
                        $startDate = explode(" ", $sDate); 
                        $endDate = explode(" ", $eDate); 
                    } 
                ?>

                <form action="<?php echo BASE_URL(); ?>record" method="GET" class="mt-3 mx-32">
                    <div class="grid grid-cols-1 text-center">
                        <div class="mb-4">
                            <input 
                                class="border text-center shadow appearance-none rounded px-5 py-2.5 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                name="start_date" 
                                type="date"
                                value="<?php echo isset($startDate[0]) ? $startDate[0] : ""; ?>"
                                pattern="\d{4}-\d{2}-\d{2}"
                            >
                            ถึง 
                            <input 
                                class="border text-center shadow appearance-none rounded px-5 py-2.5 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                                name="end_date" 
                                type="date"
                                value="<?php echo isset($endDate[0]) ? $endDate[0] : ""; ?>"
                            > 
                        </div>
                        <div class="w-full text-center">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search ></button>
                        </div>
                    </div>
                </form>
                <hr class="mb-2 mt-2">

                <div class="relative sm:rounded-lg">
                    <table id="myTable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>รหัสพนักงาน</th>
                                <th>ชื่อ-นามสกุล</th>
                                <th>แผนก</th>
                                <th>จำนวนวัน</th>
                                <th>ยอดเงิน (บาท)</th>
                                <th></th>
                            </tr>
                        </thead>
                    
                        <tbody>
                            <?php
                                if(isset($cal)) {
                                    foreach($cal as $value) {
                                        $price = intval($value->day)*25;
                                        echo "<tr>";
                                        echo "<td class=\"text-sm font-semibold text-sky-800\">FTH-";
                                        echo $value->emp_id;
                                        echo "</td>";

                                        echo "<td class=\"text-sm font-semibold text-sky-800\">";
                                        echo $value->fullname;
                                        echo "<p class=\"text-xs font-semibold text-gray-500\">".$value->position."</p>";
                                        echo "</td>";

                                        echo "<td class=\"text-sm font-semibold text-sky-800\">";
                                        echo $value->department;
                                        echo "<p class=\"text-xs font-semibold text-gray-500\">".$value->location."</p>";
                                        echo "</td>";

                                        echo "<td class=\"text-sm font-semibold text-sky-800\">";
                                        echo $value->day;
                                        echo "<p class=\"text-xs font-semibold text-gray-500\">รถยนต์ : ".$value->car;
                                        echo " | มอเตอร์ไซต์ : ".$value->motocycle."</p>";
                                        echo "</td>";

                                        echo "<td class=\"text-sm font-semibold text-sky-800\">THB ";
                                        echo $price;
                                        echo "</td>";


                                        // echo "<th scope=\"row\" class=\"px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white\">".$value->emp_id."</th>";
                                        // echo "<td class=\"px-6 py-4\">";
                                        // echo "<p><b>".$value->fullname."</b></p>";
                                        // echo "<p>".$value->position."</p>";
                                        // echo "</td>";

                                        // echo "<td class=\"px-6 py-4\">".$value->department."</td>";
                                        // echo "<td class=\"px-6 py-4\">";

                                        // echo "<p class=\"text-lg text-red-500\"><b>".$value->day."</b></p>";
                                        // echo "<p><i>รถยนต์ : ".$value->car." | มอเตอร์ไซต์ : ".$value->motocycle."</i></p>";

                                        // echo "</td>";
                                        // echo "<td class=\"px-6 py-4 text-lg\"><b>".$price."</b></td>";
                                        echo "<td class=\"px-6 py-4\">";
                            ?>
                                        <button 
                                            data-modal-target="timeline-modal" 
                                            data-modal-toggle="timeline-modal"
                                            onclick="detail(<?php echo $value->emp_id; ?>)"
                                            class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                            <span class="relative px-3 py-1 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
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

        <script>
            function detail(id) {
                 $.ajax({  
                    url : "<?php echo base_url('record/get_Full_data') ?>", 
                    type:"POST",  
                    data:{
                        id: id,
                        sDate: "<?php echo (isset($sDate)) ? $sDate : ''; ?>",
                        eDate: "<?php echo (isset($eDate)) ? $eDate : ''; ?>"
                    },  
                    success:function(data){
                        $('#your_modal_detail').html(data);  
                    }  
                });  
            }
        </script>

        <div id="timeline-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                Detail timeline
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="timeline-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <div class="p-4 md:p-5">
                            <div class="modal-body" id="your_modal_detail">
                        </div>
                    </div>
            </div>
        </div> 
            
        <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.tailwindcss.js"></script>
    </body>
</html>