<?php include('partial/header.php')  ?>
<!-- search-box -->
<?php include('partial/custom.php')  ?>
<?php include('partial/sidebar.php')  ?>
<main class="l-main">
	<div class="dashboard-overview" >
		<div class="join-section">
			<form action="">
				<div class="row">
					<div class="col-lg-12">
						<div class="fade-wrap">
							<div class="fade-text">
								<h2>Step1: Join Now</h2>
							</div>
						</div>
						<div class="loader-">
							<span class="loader-bar"></span>
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="form-group">
							<label for="text">First Name</label>
							<input type="text" required="required" name="text" id="text" placeholder="Enter Your First Name"  required="required" />
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="form-group">
							<label for="text">Middle Name</label>
							<input type="text" name="text" id="text" placeholder="Enter Your Middle Name"  />
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="form-group">
							<label for="text">Last Name</label>
							<input type="text" required="required" name="text" id="text" placeholder="Enter Your Last Name"  />
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="form-group date">
							<label for="number" >Date of Birth*</label>
							<input  class="text" required="required" placeholder="DD-MM-YYYY" type="date" >
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="form-group">
							<label for="phonenumber">Phone Number</label>
							<input type="text" required="required" name="text" id="phonenumber" placeholder="Enter Your Phone Number"  />
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" required="required" name="email" id="email" placeholder="Enter Your Email"  />
						</div>
					</div>
					
					<div class="col-lg-4 col-md-4">
						<div class="form-group">
							<label for="dropdown-1" >Post</label>
							<div class="select-box__current" tabindex="2">
								<div class="select-box__value">
									<input class="select-box__input" type="radio" id="A" value="101" name="abc" checked="checked" />
									<span class="select-box__input-text">Post</span>
								</div>
								<div class="select-box__value">
									<input class="select-box__input" type="radio" id="001" value="001" name="abc" />
									<span class="select-box__input-text">Cream</span>
								</div>
								<div class="select-box__value">
									<input class="select-box__input" type="radio" id="002" value="002" name="abc" />
									<span class="select-box__input-text">Cheese</span>
								</div>
								<div class="select-box__value">
									<input class="select-box__input" type="radio" id="003" value="003" name="abc" />
									<span class="select-box__input-text">Milk</span>
								</div>
								<img class="select-box__icon" src="img/arrow-down.png" alt="Arrow Icon" aria-hidden="true" />
							</div>
							<ul class="select-box__list">
								<li>
									<label class="select-box__option" for="001" aria-hidden="aria-hidden">Cream</label>
								</li>
								<li>
									<label class="select-box__option" for="002" aria-hidden="aria-hidden">Cheese</label>
								</li>
								<li>
									<label class="select-box__option" for="003" aria-hidden="aria-hidden">Milk</label>
								</li>
							</ul>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-4">
						<div class="form-group date">
							<label for="number" >Join Date*</label>
							<input  class="text" required="required" placeholder="DD-MM-YYYY" type="date" >
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="form-group">
							<label for="phonenumber">Salary</label>
							<input type="text" required="required" name="text" placeholder="Enter Your Expectation"  />
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="form-group">
							<label >Driving License *</label>
							<input type="file" class="driving-dropify" />
						</div>
					</div>
					<div class="col-lg-4 col-md-4">
						<div class="form-group">
							<label for="">Upload Your Image *</label>
							<input type="file" class="image-dropify" />
						</div>
					</div>
					
					
					<div class="col-lg-12">
						<div>
							<button class="site-button">Upload</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</main>
<?php include('partial/footer.php')  ?>