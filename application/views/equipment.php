<?php echo $this->session->flashdata('msgerr'); ?>
<!DOCTYPE html>
<html lang="en" >
	<head>
        <title>EQUIPMENT's | INFORMATION TECHNOLOGY SYSTEM</title>
		
        <?php $this->load->view('header.php'); ?>

		<script>
			$(document).ready( function () {
				$('#example').DataTable({
					"iDisplayLength": 10,
					"columnDefs": [
						{"className": "dt-center", "targets": "_all"}
					],
					"bLengthChange": true,
                    "lengthMenu": [10, 20, 50, 100, 200, 500],
				});
			});
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
											<a class="text-xl  icon-hover cursor-pointer text-heading"
												id="headerCollapse" data-hs-overlay="#application-sidebar-brand"
												aria-controls="application-sidebar-brand" aria-label="Toggle navigation" href="javascript:void(0)">
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
                                            <?php foreach($data as $ep) { ?>
                                            <tr>
                                                <td>
                                                    <span class="text-sm font-semibold"><?php echo $ep->equip_name; ?></span>
                                                    <p class="text-xs font-semibold text-gray-500"><?php echo $ep->ip_address; ?></p>
                                                </td>
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800"><?php echo $ep->model; ?></span>
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
                                                    <button 
														data-modal-target="detailPlan" 
                                                        data-modal-toggle="detailPlan"
                                                        data-modal-show="detailPlan"
														onclick="planManage(<?php echo $ep->id; ?>)"
														class="border border-sky-800 px-3 rounded py-2 text-sky-800 
                                                                font-semibold hover:bg-sky-800 hover:text-white">
                                                        <i class="ti ti-search relative z-1"></i>
                                                    </button>
                                                    <!-- <button class="border border-yellow-600 px-3 rounded py-2 text-yellow-600 font-semibold hover:bg-yellow-600 hover:text-white">
                                                        <i class="ti ti-edit relative z-1"></i>
                                                    </button>
                                                    <button class="border border-red-800 px-3 rounded py-2 text-red-800 font-semibold hover:bg-red-800 hover:text-white">
                                                        <i class="ti ti-trash relative z-1"></i>
                                                    </button> -->
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

        <div 
            id="detailPlan" 
            tabindex="-1" 
            aria-hidden="true" 
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 
                    left-0 z-[999] justify-center items-center w-full 
                    md:inset-0 h-[calc(100%-1rem)] max-h-full"
        >
			<div class="relative p-4 w-full max-w-10xl max-h-full">
				<div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
					<div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
						<h3 class="text-xl font-semibold text-gray-900 dark:text-white">
							Check sheet PM
						</h3>
						<button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" 
                        data-modal-hide="detailPlan">
							<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
							</svg>
							<span class="sr-only">Close modal</span>
						</button>
					</div>

					<div class="p-4 md:p-5 space-y-4">
						<div class="relative overflow-x-auto">
							<div class="modal-body" id="plan_maintenance"></div>
						</div>
					</div>
				</div>
			</div>
        </div>
        
        <script>
            function planManage(id) {
                $.ajax({  
                    url : "<?php echo base_url('equipment/getPlanManage') ?>", 
                    type:"POST",  
                    data:{ id: id },  
                    success:function(data){
                        $('#plan_maintenance').html(data);
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