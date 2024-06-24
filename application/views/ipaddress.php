<?php echo $this->session->flashdata('msgerr'); ?>
<!DOCTYPE html>
<html lang="en" >
	<head>
        <title>EQUIPMENT's | INFORMATION TECHNOLOGY SYSTEM</title>
		
        <?php $this->load->view('header.php'); ?>

		<script>
			$(document).ready( function () {
				$('#ipTable').DataTable({
					"iDisplayLength": 10,
					"columnDefs": [
						{"className": "dt-center", "targets": "_all"}
					],
					"bLengthChange": true,
                    "lengthMenu": [10, 20, 50, 100, 200, 500]
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
                            <div class="card">
                                <div class="card-body flex flex-wrap gap-3">
                                    <?php
                                        if($lan == 32) {
                                    ?>
                                        <a href="#">
                                            <button 
                                                type="button" 
                                                class=" py-2 px-6 btn rounded-2xl text-base font-medium 
                                                        border border-transparent bg-blue-600 text-white 
                                                        hover:bg-blue-700">
                                                LAN 32 (10.112.32...)
                                            </button>
                                        </a>
                                        <a href="<?php echo base_url()?>ipaddress?lan=33">
                                            <button 
                                                type="button" 
                                                class=" py-2 px-7 inline-flex items-center gap-x-2 text-base 
                                                        font-medium rounded-2xl border border-blue-600 text-blue-600 
                                                        hover:border-blue-600 hover:text-white hover:bg-blue-600">
                                                LAN 33 (10.112.33...)
                                            </button>
                                        </a>
                                    <?php } else { ?>
                                        
                                        <a href="<?php echo base_url()?>ipaddress?lan=32">
                                            <button 
                                                type="button" 
                                                class=" py-2 px-7 inline-flex items-center gap-x-2 text-base 
                                                        font-medium rounded-2xl border border-blue-600 text-blue-600 
                                                        hover:border-blue-600 hover:text-white hover:bg-blue-600">
                                                LAN 32 (10.112.32...)
                                            </button>
                                        </a>
                                        <a href="#">
                                            <button 
                                                type="button" 
                                                class=" py-2 px-6 btn rounded-2xl text-base font-medium 
                                                        border border-transparent bg-blue-600 text-white 
                                                        hover:bg-blue-700 ">
                                                LAN 33 (10.112.33...)
                                            </button>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>

							<div class="card overflow-x-auto">
								<div class="card-body flex flex-col gap-6">
                                    <table id="ipTable" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>IP Address</th>
                                                <th>Equipment</th>
                                                <th>Responsibility</th>
                                                <th>Location</th>
                                                <th>Internet</th>
                                                <th>Status</th>
                                                <th>Management</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($data as $d) { ?>
                                            <tr>
                                                <td>
                                                    <span class="text-sm font-semibold"><?php echo $d->no; ?></span>
                                                </td>
                                                <td>
                                                    <span class="text-sm font-semibold"><?php echo $d->ip; ?></span>
                                                </td>
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800"><?php echo $d->name; ?></span>
                                                    <p class="text-xs font-semibold text-gray-500"><?php echo $d->type; ?></p>
                                                </td>
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800"><?php echo $d->emp_id; ?></span>
                                                    <p class="text-xs font-semibold text-gray-500"><?php echo $d->fullname; ?></p>
                                                </td>
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800"><?php echo $d->location; ?></span>
                                                    <p class="text-xs font-semibold text-gray-500">
                                                        <?php 
                                                            if(isset($d->fac)) {
                                                                echo "Factory: ".$d->fac; 
                                                            } else echo "";
                                                        ?>
                                                    </p>
                                                </td>
                                                
                                                <td>
                                                    <?php
                                                        if($d->internet == 1) {
                                                            echo "<span class=\"text-sm font-semibold text-sky-800\">";
                                                            echo "Yes";
                                                            echo "</span>";
                                                        } else if ($d->internet == "0") {
                                                            echo "<span class=\"text-sm font-semibold text-gray-800\">-</span>";
                                                        } else echo "-";
                                                    ?>
                                                </td>

                                                <td>
                                                    <?php
                                                        if($d->status == 1) {
                                                            echo "<span class=\"text-sm font-semibold text-green-500\">";
                                                            echo "Ready to use";
                                                            echo "</span>";
                                                        } else if ($d->status == 2) {
                                                            echo "<span class=\"text-sm font-semibold text-red-500\">";
                                                            echo "Active";
                                                            echo "</span>";
                                                        } else {
                                                            echo "<span class=\"text-sm font-semibold text-sky-800\">";
                                                            echo "Unknow";
                                                            echo "</span>";
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <button class="border border-sky-800 px-3 rounded py-2 text-sky-800 
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

        <?php $this->load->view('script-all.php'); ?>

	</body>
</html>