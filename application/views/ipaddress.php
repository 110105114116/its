<?php echo $this->session->flashdata('msgerr'); ?>
<!DOCTYPE html>
<html lang="en" >
	<head>
        <title>EQUIPMENT's | INFORMATION TECHNOLOGY SYSTEM</title>
		
        <?php $this->load->view('header.php'); ?>

		<script>
			$(document).ready( function () {
				$('#ipTable').DataTable({
					"iDisplayLength": 20,
					"columnDefs": [
						{"className": "dt-center", "targets": "_all"}
					],
					"bLengthChange": false
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
                            <!-- <div class="card overflow-x-auto">
                                <div class="card-body flex flex-col gap-6">
                                    
                                </div>
                            </div> -->

							<div class="card overflow-x-auto">
								<div class="card-body flex flex-col gap-6">
                                    <table id="ipTable" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>IP Address</th>
                                                <th>Equipment</th>
                                                <th>Responsibility</th>
                                                <th>Location</th>
                                                <th>Internet</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($data as $d) { ?>
                                            <tr>
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
                                                    <p class="text-xs font-semibold text-gray-500"><?php echo $d->fac; ?></p>
                                                </td>
                                                
                                                <td>
                                                    <span class="text-sm font-semibold text-sky-800">
                                                        <?php
                                                            if($d->internet == 1) {
                                                                echo "YES";
                                                            } else if ($d->internet == 0) {
                                                                echo "No";
                                                            } else echo "Unknow";
                                                        ?>
                                                    </span>
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