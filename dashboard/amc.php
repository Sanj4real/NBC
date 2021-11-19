<?php include('partial/header.php')  ?>
<!-- search-box -->
<?php include('partial/custom.php')  ?>
<?php include('partial/sidebar.php')  ?>
<main class="l-main">
	<div class="dashboard-overview" >
		<div class="join-section order-sheet">
			<div class="col-lg-12">
				<div class="fade-wrap">
					<div class="fade-text">
						<h2>9: AMC-details</h2>
					</div>
				</div>
				<div class="loader-">
					<span class="loader-bar"></span>
				</div>
			</div>
			<?php include('partial/modal.php')  ?>
			<!-- Button trigger modal -->
			<div class="tmh-wrap">
				<ul>
					<li>
						<button type="button" class="site-button" data-toggle="modal" data-target="#amc-1">AMC_2101</button>
					</li>
					<li>
						<!-- Button trigger modal -->
						<button type="button" class="site-button" data-toggle="modal" data-target="#amc-2">AMC_2102</button>
					</li>
					<li>
						<!-- Button trigger modal -->
						<button type="button" class="site-button" data-toggle="modal" data-target="#amc-3">AMC_2103</button>
					</li>
				</ul>
			</div>
			
			

			
		</div>
	</div>
</main>
<?php include('partial/footer.php')  ?>