<!DOCTYPE html>
<html lang="en">
    <head>
        <title>EQUIPMENT's | INFORMATION TECHNOLOGY SYSTEM</title>

        <?php $this->load->view('header.php'); ?>

        <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    "iDisplayLength": 10,
                    "columnDefs": [{
                        "className": "dt-center",
                        "targets": "_all"
                    }],
                    "bLengthChange": true,
                    "lengthMenu": [10, 20, 50, 100, 200, 500],
                });
            });

            function delEquipment(id) {
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "<?php echo base_url('equipment/delEquipment') ?>",
                            type: "POST",
                            data: {
                                equip_id: id
                            },
                            success: function(data) {
                                location.href = "<?php echo base_url() . "equipment"; ?>"
                            }
                        });
                    }
                });
            }
        </script>
    </head>

    <body class="bg-surface">
        <main>
            <div id="main-wrapper" class="flex p-5 xl:pr-0 min-h-screen">
                <!-- Side bar -->
                <?php $this->load->view('sidebar.php'); ?>

                <!-- Main -->
                <div class=" w-full page-wrapper xl:px-6 px-0">
                    <main class="h-full  max-w-full">
                        <div class="container full-container p-0 flex flex-col gap-6">
                            <!-- Header -->
                            <header class=" bg-white shadow-md rounded-md w-full text-sm py-4 px-6">
                                <nav class=" w-ful flex items-center justify-between" aria-label="Global">
                                    <ul class="icon-nav flex items-center gap-4">
                                        <li class="relative xl:hidden">
                                            <a class="text-xl  icon-hover cursor-pointer text-heading" id="headerCollapse" data-hs-overlay="#application-sidebar-brand" aria-controls="application-sidebar-brand" aria-label="Toggle navigation" href="javascript:void(0)">
                                                <i class="ti ti-menu-2 relative z-1"></i>
                                            </a>
                                        </li>
                                        <h3 class="text-lg font-semibold">All equipment's</h3>
                                        <p class="text-xs text-gray-400 font-semibold">อุปกรณ์ทั้งหมด</p>
                                    </ul>
                                    <?php $this->load->view('popup-profile.php'); ?>
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
                                            <?php foreach ($data as $eq) { ?>
                                                <tr>
                                                    <td>
                                                        <span class="text-sm font-semibold"><?php echo $eq->equip_name; ?></span>
                                                        <p class="text-xs font-semibold text-gray-500"><?php echo $eq->ip_address; ?></p>
                                                    </td>
                                                    <td>
                                                        <span class="text-sm font-semibold text-sky-800"><?php echo $eq->model; ?></span>
                                                    </td>
                                                    <td>
                                                        <span class="text-sm font-semibold text-sky-800"><?php echo $eq->type; ?></span>
                                                        <p class="text-xs font-semibold text-gray-500">
                                                            <?php 
                                                                if($eq->ram == "-" && ($eq->mem_t != 1 || $eq->mem_t != 2)){
                                                                    echo "Unknow spec.";
                                                                } else {
                                                                    if ($eq->ram != "-") {
                                                                        echo "RAM : ".$eq->ram; 
                                                                    } else echo "";
                                                                    
                                                                    if($eq->mem_t == 2) {
                                                                        echo " | SSD : ".$eq->mem;
                                                                    } else if ($eq->mem_t == 1) {
                                                                        echo " | HDD : ".$eq->mem;
                                                                    } else {
                                                                        echo "";
                                                                    }
                                                                }
                                                            ?>
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <span class="text-sm font-semibold text-sky-800"><?php echo $eq->emp_id; ?></span>
                                                        <p class="text-xs font-semibold text-gray-500"><?php echo $eq->fullname; ?></p>
                                                    </td>
                                                    <td>
                                                        <span class="text-sm font-semibold text-sky-800"><?php echo $eq->location; ?></span>
                                                        <p class="text-xs font-semibold text-gray-500">Factory: <?php echo $eq->fac; ?></p>
                                                    </td>
                                                    <td class="text-green-700 font-semibold">
                                                        <?php
                                                        if ($eq->status == 1) {
                                                            echo "Active";
                                                        } else echo "Inactive";
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <button
                                                            class="border border-sky-800 px-3 rounded py-2 text-sky-800 
                                                                    font-semibold hover:bg-sky-800 hover:text-white">
                                                            <i class="ti ti-search relative z-1"></i>
                                                        </button>
                                                        
                                                        <button 
                                                            data-toggle="modal" 
                                                            data-target="#equipInfo" 
                                                            class="border border-yellow-600 px-3 rounded py-2 text-yellow-600 
                                                                    font-semibold hover:bg-yellow-600 hover:text-white" 
                                                            title="Equipment info"
                                                            onclick="equipmentInfo(<?php echo $eq->id; ?>)"
                                                        >
                                                            <i class="ti ti-edit relative z-1"></i>
                                                        </button>

                                                        <button class="border border-red-800 px-3 rounded py-2 text-red-800 
                                                                    font-semibold hover:bg-red-800 hover:text-white" title="Delete equipment" onclick="delEquipment(<?php echo $eq->id; ?>)">
                                                            <i class="ti ti-trash relative z-1"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <?php $this->load->view('footer.php'); ?>
                        </div>
                    </main>
                </div>
            </div>
        </main>

        <?php echo $this->session->flashdata('msgerr'); ?>

        <div id="equipInfo" class="modal fade" tabindex="-1" role="dialog" 
            aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body p-5">
                        <div id="equipment_info"></div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function equipmentInfo(id) {
                $.ajax({
                    url: "<?php echo base_url('equipment/getInfo') ?>",
                    type: "POST",
                    data: { id: id },
                    success: function(data) {
                        $('#equipment_info').html(data);
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
            }, 5000);

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

        <?php $this->load->view('script-all.php'); ?>

    </body>
</html>