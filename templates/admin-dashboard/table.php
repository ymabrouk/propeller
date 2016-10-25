<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Propeller is a front-end responsive framework based on Material design & Bootstrap.">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
<title>Propeller Admin - Develop more, Code less.</title>
<link rel="shortcut icon" type="image/x-icon" href="themes/images/favicon.ico">

<!-- Styles Starts -->
<?php include('include/styles.php'); ?>
<!-- Styles Ends -->
</head>

<body>
<!-- Header Starts -->
<?php include('include/header.php'); ?>
<!-- Header Ends -->

<!-- Sidebar Starts -->
<?php include('include/sidebar.php'); ?>
<!-- Sidebar Ends -->

<!--Table constructor start -->
<div class="pmd-content pmd-content-custom" id="content"> 	 
	<div class="custom-table">
		<div class="container-fluid">
		
			<!-- Title -->
			<h1 class="section-title" id="services">
				<span>Table</span>
			</h1><!-- End Title -->
				
			<!--breadcrum start-->
			<ol class="breadcrumb text-left">
			  <li><a href="index.php">Dashboard</a></li>
			  <li class="active">Table</li>
			</ol><!--breadcrum end-->
		
			<!--component header -->
			<div class="componant-title-bg"> 
				<p class="lead">The HTML table model allows authors to arrange data - text, preformatted text, images, links, forms, form fields, other tables, etc. into rows and columns of cells. Table is an ubiquitous feature of most user interfaces, regardless of a site's content or function. It's design and use is therefore an important factor in the overall user experience.</p>
			</div><!--component header end-->			
			
			<!-- Basic Bootstrap Table -->
			<section class="row component-section">
			
				<!-- Basic Bootstrap Table title and description -->
				<div class="col-md-3">
					<div id="bootstrap-basic-table">
						<h2>Bootstrap Table</h2>
					</div>
					<p>Bootstrap provides table with its own custom table styles. This simple table can be also converted to table with striped rows, bordered table, table with hover rows, condensed table, table with 
                    contextual classes and responsive table.</p>
				</div><!-- Basic Bootstrap Table title and description -->
				
				<!-- Basic Bootstrap Table code and example -->
				<div class="col-md-9">
					<div class="component-box">
						
						<!-- Basic Bootstrap Table example -->
						<div class="pmd-card pmd-z-depth pmd-card-custom-view">
                        	<div class="table-responsive">
                                <table cellspacing="0" cellpadding="0" class="table" id="table-bootstrap">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>State/City <span class="caret shoarting"></span> </th>
                                            <th>End Date of Work</th>
                                            <th>Status</th>
                                            <th>Timesheet</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Giacomo Guilizzoni</td>
                                            <td>JONEA140</td>
                                            <td>Melbourne</td>
                                            <td>1 June 2014</td>
                                            <td>Active</td>
                                            <td>Timesheet</td>
                                            <td><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Giacomo Guilizzoni</td>
                                            <td>JONEA140</td>
                                            <td>Melbourne</td>
                                            <td>1 June 2014</td>
                                            <td>Active</td>
                                            <td>Timesheet</td>
                                            <td><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Giacomo Guilizzoni</td>
                                            <td>JONEA140</td>
                                            <td>Melbourne</td>
                                            <td>1 June 2014</td>
                                            <td>Active</td>
                                            <td>Timesheet</td>
                                            <td><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Giacomo Guilizzoni</td>
                                            <td>JONEA140</td>
                                            <td>Melbourne</td>
                                            <td>1 June 2014</td>
                                            <td>Active</td>
                                            <td>Timesheet</td>
                                            <td><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Giacomo Guilizzoni</td>
                                            <td>JONEA140</td>
                                            <td>Melbourne</td>
                                            <td>1 June 2014</td>
                                            <td>Active</td>
                                            <td>Timesheet</td>
                                            <td><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Giacomo Guilizzoni</td>
                                            <td>JONEA140</td>
                                            <td>Melbourne</td>
                                            <td>1 June 2014</td>
                                            <td>Active</td>
                                            <td>Timesheet</td>
                                            <td><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
						</div>
					</div> <!-- Basic Bootstrap Table example end-->
				</div>
			</section> <!-- Basic Bootstrap Table end-->
			
			<!-- Propeller table -->
			<section class="row component-section">
			
				<!-- Propeller table title and description -->
				<div class="col-md-3">
					<div id="propeller-table">
						<h2>Propeller Table</h2>
					</div>
					<p>The Propeller Table is an enhanced version of the Bootstrap standard HTML <code><</code><code>table</code><code>></code>. Include <code>.pmd-table</code> followed by <code>.table</code> to use Propeller 
                    table.</p>
				</div><!-- Propeller table title and description -->

				<!-- Propeller table code and example -->
				<div class="col-md-9">
					<div class="component-box">
						
						<!-- Propeller table example -->
						<div class="pmd-card pmd-z-depth pmd-card-custom-view">
							<div class="table-responsive"> 
								<table cellspacing="0" cellpadding="0" class="table pmd-table" id="table-propeller">
									<thead>
										<tr>
											<th>Name</th>
											<th>Code</th>
											<th>State/City <span class="caret shoarting"></span> </th>
											<th>End Date of Work</th>
											<th>Status</th>
											<th>Timesheet</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Firm Name">Giacomo Guilizzoni</td>
											<td data-title="Firm Code">JONEA140</td>
											<td data-title="Firm State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Firm Name">Giacomo Guilizzoni</td>
											<td data-title="Firm Code">JONEA140</td>
											<td data-title="Firm State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Firm Name">Giacomo Guilizzoni</td>
											<td data-title="Firm Code"></td>
											<td data-title="Firm State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Firm Name">Giacomo Guilizzoni</td>
											<td data-title="Firm Code">JONEA140</td>
											<td data-title="Firm State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Firm Name">Giacomo Guilizzoni</td>
											<td data-title="Firm Code">JONEA140</td>
											<td data-title="Firm State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div> <!-- Propeller table example end-->
						
				</div>
			</section> <!-- Propeller table end-->
            
			<!-- Card table -->
			<section class="row component-section">
			
				<!-- Card table title and description -->
				<div class="col-md-3">
					<div id="card-table">
						<h2>Card Table</h2>
					</div>
                    <p>Card Table reformats each row into a card for narrow screens. This way user can view complete information without horizontal scroll. Add <code>.pmd-table-card</code> to convert simple table into Card Table.
                    </p>  
				</div><!-- Card table title and description end-->
				
				<!-- Card table code and example -->
				<div class="col-md-9">
					<div class="component-box">
					
						<!-- Card table example -->
						<div class="pmd-card pmd-z-depth pmd-card-custom-view">
							<div class="pmd-table-card">
								<table class="table pmd-table">
								<thead>
									<tr>
										<th>Name</th>
										<th>Code</th>
										<th>State/City</th>
										<th>End Date of Work</th>
										<th>Status</th>
										<th>Timesheet</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-title="Name">Giacomo Guilizzoni</td>
										<td data-title="Code">JONEA140</td>
										<td data-title="State/City">Melbourne</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
								</tbody>
							</table>
							</div>
						</div> <!-- Card table example end -->
					
					</div>
				</div> <!-- Card table code and example end -->
				
			</section><!-- Card table end -->			 
			
            <!-- Nested Table -->
			<section class="row component-section">
			
				<!-- table card title and description -->
				<div class="col-md-3">
					<div id="nested-table">
						<h2>Nested Table</h2>
					</div>
					<p>Nested Table is a table inside a table. It can have several rows for each row of its parent table. Add <code>.child-table</code> to the <code>tr</code> where you want to nest your table. Then 
                    add colspan to the <code>td</code> followed by above <code>tr</code> with the value equal to the number of columns in sub-table. Add <code>.table-sm</code> followed by <code>.table</code> in nested table tag
                    to make it look like sub-table.</p>
				</div><!-- table card title and description -->
				
				<!-- table card code and example -->
				<div class="col-md-9">
					<div class="component-box">
						
						<!-- table card example -->
						<div class="pmd-card pmd-z-depth pmd-card-custom-view">
							<div class="pmd-table-card">
								<table cellspacing="0" cellpadding="0" class="table pmd-table" id="table">
									<thead>
										<tr>
											<th>Name</th>
											<th>Code</th>
											<th>State/City <span class="caret shoarting"></span> </th>
											<th>End Date of Work</th>
											<th>Status</th>
											<th>Timesheet</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Firm Name">Giacomo Guilizzoni</td>
											<td data-title="Firm Code">JONEA140</td>
											<td data-title="Firm State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Firm Name">Giacomo Guilizzoni</td>
											<td data-title="Firm Code">JONEA140</td>
											<td data-title="Firm State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr class="child-table">
											<td colspan="10"><table class="table pmd-table table-sm">
													<thead>
														<tr>
															<th>#</th>
															<th>First Name</th>
															<th>Last Name</th>
															<th>Username</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<th scope="row">1</th>
															<td data-title="Firm Name">Mark</td>
															<td data-title="Last Name">Otto</td>
															<td data-title="Username">@mdo</td>
														</tr>
														<tr>
															<th scope="row">2</th>
															<td data-title="Firm Name">Jacob</td>
															<td data-title="Last Name">Thornton</td>
															<td data-title="Username">@fat</td>
														</tr>
														<tr>
															<th scope="row">3</th>
															<td data-title="Firm Name">Larry</td>
															<td data-title="Last Name">the Bird</td>
															<td data-title="Username">@twitter</td>
														</tr>
													</tbody>
												</table></td>
										</tr>
										<tr>
											<td data-title="Firm Name">Giacomo Guilizzoni</td>
											<td data-title="Firm Code"></td>
											<td data-title="Firm State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Firm Name">Giacomo Guilizzoni</td>
											<td data-title="Firm Code">JONEA140</td>
											<td data-title="Firm State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Firm Name">Giacomo Guilizzoni</td>
											<td data-title="Firm Code">JONEA140</td>
											<td data-title="Firm State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div> <!-- table card example end-->
						
				</div>
			</section> <!-- Nested Table end-->
			
			<!-- Striped table -->
			<section class="row component-section">
			
				<!-- striped table title and description -->
				<div class="col-md-3">
					<div id="striped-row-table">
						<h2>Striped Rows Table</h2>
					</div>
					<p>Create Striped Rows Table by adding <code>.table-striped</code> in your code.</p>
				</div> <!-- striped table title and description end -->
				
				<!-- striped table code and example -->
				<div class="col-md-9">
					<div class="component-box">
					
						<!-- striped table example -->
						<div class="pmd-card pmd-z-depth pmd-card-custom-view">
							<div class="table-responsive">
								<table class="table pmd-table table-striped table-mc-red">
									<thead>
										<tr>
											<th>Name</th>
											<th>Code</th>
											<th>State/City</th>
											<th>End Date of Work</th>
											<th>Status</th>
											<th>Timesheet</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div> <!-- striped table example end -->
					
					</div>
				</div> <!-- striped table code and example end-->
				
			</section> <!-- Striped table end --> 			
			
			<!-- Bordered table -->
			<section class="row component-section">
			
				<!-- bordered table title and description -->
				<div class="col-md-3">
					<div id="bordered-table">
						<h2>Bordered Table</h2>
					</div>
					<p>Create Bordered Table by adding <code>.table-bordered</code> in your code.</p>
				</div><!-- bordered table title and description end-->
				
				<!-- bordered table code and example -->
				<div class="col-md-9">
					<div class="component-box">
					
						<!-- bordered table example -->
						<div class="pmd-card pmd-z-depth pmd-card-custom-view">
							<div class="table-responsive">
								<table class="table pmd-table table-bordered">
									<thead>
										<tr>
											<th>Name</th>
											<th>Code</th>
											<th>State/City</th>
											<th>End Date of Work</th>
											<th>Status</th>
											<th>Timesheet</th>
											<th></th>
										</tr>
									</thead>
									
									<tbody>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div> <!-- bordered table example end -->
					
					</div>
				</div> <!-- bordered table code and example end -->
				
			</section> <!-- Bordered table end -->			 
			
			<!-- Hoverable Rows Table -->
			<section class="row component-section">
			
				<!-- hoverable rows table title and description  -->
				<div class="col-md-3">
					<div id="hoverable-row-table">
						<h2>Hoverable Rows Table</h2>
					</div>
					<p>Create Hoverable Rows Table by adding <code>.table-hover</code> in your code.</p>
				</div> <!-- hoverable rows table title and description end -->
				
				<div class="col-md-9">
					<div class="component-box">
					
						<!-- hoverable rows table example -->
						<div class="pmd-card pmd-z-depth pmd-card-custom-view">
							<div class="table-responsive">
								<table class="table pmd-table table-hover">
									<thead>
										<tr>
											<th>Name</th>
											<th>Code</th>
											<th>State/City</th>
											<th>End Date of Work</th>
											<th>Status</th>
											<th>Timesheet</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div> <!-- hoverable rows table example end -->
					
					</div>
				</div>
			</section> <!-- Hoverable Rows Table end -->			 
			
			<!-- Small Table -->
			<section class="row component-section">
			
				<!-- small table title and description -->
				<div class="col-md-3">
					<div id="small-table">
						<h2>Small Table</h2>
					</div>
					<p>Create Small Table by adding <code>.table-sm</code> in your code.</p>
				</div> <!-- small table title and description end-->
				
				<!-- small table code and example -->
				<div class="col-md-9">
					
					<!-- small table example -->
					<div class="pmd-card pmd-z-depth pmd-card-custom-view">
						<div class="table-responsive">
							<table class="table pmd-table table-sm">
								<thead>
									<tr>
										<th>Name</th>
										<th>Code</th>
										<th>State/City</th>
										<th>End Date of Work</th>
										<th>Status</th>
										<th>Timesheet</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-title="Name">Giacomo Guilizzoni</td>
										<td data-title="Code">JONEA140</td>
										<td data-title="State/City">Melbourne</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Name">Giacomo Guilizzoni</td>
										<td data-title="Code">JONEA140</td>
										<td data-title="State/City">Melbourne</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Name">Giacomo Guilizzoni</td>
										<td data-title="Code">JONEA140</td>
										<td data-title="State/City">Melbourne</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Name">Giacomo Guilizzoni</td>
										<td data-title="Code">JONEA140</td>
										<td data-title="State/City">Melbourne</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Name">Giacomo Guilizzoni</td>
										<td data-title="Code">JONEA140</td>
										<td data-title="State/City">Melbourne</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Name">Giacomo Guilizzoni</td>
										<td data-title="Code">JONEA140</td>
										<td data-title="State/City">Melbourne</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div> <!-- small table example end -->
					
				</div> <!-- small table code and example end-->
				
			</section> <!-- Small Table end --> 			
			
			<!-- Contextual Table -->
			<section class="row component-section">
			
				<!-- Contextual table title and description -->
				<div class="col-md-3">
					<div id="contextual-table">
						<h2>Contextual Table</h2>
					</div>
					<p>To create Contextual Table add the class on row namely <code>.table-active</code> for active, <code>.table-success</code> for success, <code>.table-info</code> for info, <code>.table-warning</code> for warning, and <code>.table-danger</code> for danger.</p>
				</div> <!-- Contextual table title and description end-->
				
				<!-- Contextual table code and example -->
				<div class="col-md-9">
					<div class="component-box">				
						
						<!-- Contextual table example -->
						<div class="pmd-card pmd-z-depth pmd-card-custom-view">
							<div class="table-responsive">
								<table class="table pmd-table">
									<thead>
										<tr>
											<th>#</th>
											<th>Column heading</th>
											<th>Column heading</th>
											<th>Column heading</th>
										</tr>
									</thead>
									<tbody>
										<tr class="table-active">
											<th scope="row">1</th>
											<td>Column content</td>
											<td>Column content</td>
											<td>Column content</td>
										</tr>
										<tr>
											<th scope="row">2</th>
											<td>Column content</td>
											<td>Column content</td>
											<td>Column content</td>
										</tr>
										<tr class="table-success">
											<th scope="row">3</th>
											<td>Column content</td>
											<td>Column content</td>
											<td>Column content</td>
										</tr>
										<tr>
											<th scope="row">4</th>
											<td>Column content</td>
											<td>Column content</td>
											<td>Column content</td>
										</tr>
										<tr class="table-info">
											<th scope="row">5</th>
											<td>Column content</td>
											<td>Column content</td>
											<td>Column content</td>
										</tr>
										<tr>
											<th scope="row">6</th>
											<td>Column content</td>
											<td>Column content</td>
											<td>Column content</td>
										</tr>
										<tr class="table-warning">
											<th scope="row">7</th>
											<td>Column content</td>
											<td>Column content</td>
											<td>Column content</td>
										</tr>
										<tr>
											<th scope="row">8</th>
											<td>Column content</td>
											<td>Column content</td>
											<td>Column content</td>
										</tr>
										<tr class="table-danger">
											<th scope="row">9</th>
											<td>Column content</td>
											<td>Column content</td>
											<td>Column content</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div> <!-- Contextual table example end-->
					</div>		
				</div> <!-- Contextual table code and example end-->
				
 			</section> <!-- Contextual Table end --> 			
			
			<!-- Inverse Table -->
			<section class="row component-section">
				
				<!-- inverse table title and description -->
				<div class="col-md-3">
					<div id="inverse-table">
						<h2>Inverse Table</h2>
					</div>
					<p>Create Inverse Table by adding <code>.table-inverse</code> in your code.</p>
				</div> <!-- inverse table title and description end -->
				
				<!-- inverse table code and example -->
				<div class="col-md-9">
					<div class="component-box">
					
						<!-- inverse table example --> 
						<div class="pmd-card pmd-z-depth pmd-card-custom-view">
							<div class="table-responsive">
								<table class="table pmd-table table-inverse">
									<thead>
										<tr>
											<th>Name</th>
											<th>Code</th>
											<th>State/City</th>
											<th>End Date of Work</th>
											<th>Status</th>
											<th>Timesheet</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
										<tr>
											<td data-title="Name">Giacomo Guilizzoni</td>
											<td data-title="Code">JONEA140</td>
											<td data-title="State/City">Melbourne</td>
											<td data-title="End Date of Work">1 June 2014</td>
											<td data-title="Active">Active</td>
											<td data-title="Timesheet">Timesheet</td>
											<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div> <!-- inverse table example end -->
					
					</div>
				</div> <!-- inverse table code and example end -->
				
			</section> <!-- Inverse Table end -->
			 
			<!-- Reflow Table  -->
			<section class="row component-section">
			
				<!-- contextual table title and description -->
				<div class="col-md-3">
					<div id="reflow-table">
						<h2>Reflow Table</h2>
					</div>
					<p>Create Reflow Table by adding <code>.table-reflow</code> in your code.</p>
				</div> <!-- Reflow table title and description -->
				
				<!-- Reflow table code and example -->
				<div class="col-md-9">
					<div class="component-box">
					
						<!-- Reflow table example -->
						<div class="pmd-card pmd-z-depth pmd-card-custom-view">
							<table class="table pmd-table table-reflow">
								<thead>
									<tr>
										<th>Name</th>
										<th>Code</th>
										<th>State/City</th>
										<th>Incharge Name</th>
										<th>Mobile</th>
										<th>Type of Work</th>
										<th>End Date of Work</th>
										<th>Status</th>
										<th>Timesheet</th>
										<th>&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td data-title="Name">Giacomo Guilizzoni</td>
										<td data-title="Code">JONEA140</td>
										<td data-title="State/City">Melbourne</td>
										<td data-title="Incharge Name">Giacomo Guilizzoni</td>
										<td data-title="Mobile">9625145236</td>
										<td data-title="Type of Work">9625145236</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="Firm Incharge Name">Giacomo Guilizzoni</td>
										<td data-title="Mobile">9625145236</td>
										<td data-title="Type of Work">9625145236</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="Firm Incharge Name">Giacomo Guilizzoni</td>
										<td data-title="Mobile">9625145236</td>
										<td data-title="Type of Work">9625145236</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="Firm Incharge Name">Giacomo Guilizzoni</td>
										<td data-title="Mobile">9625145236</td>
										<td data-title="Type of Work">9625145236</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="Firm Incharge Name">Giacomo Guilizzoni</td>
										<td data-title="Mobile">9625145236</td>
										<td data-title="Type of Work">9625145236</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="Firm Incharge Name">Giacomo Guilizzoni</td>
										<td data-title="Mobile">9625145236</td>
										<td data-title="Type of Work">9625145236</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="Firm Incharge Name">Giacomo Guilizzoni</td>
										<td data-title="Mobile">9625145236</td>
										<td data-title="Type of Work">9625145236</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="Firm Incharge Name">Giacomo Guilizzoni</td>
										<td data-title="Mobile">9625145236</td>
										<td data-title="Type of Work">9625145236</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
									<tr>
										<td data-title="Firm Name">Giacomo Guilizzoni</td>
										<td data-title="Firm Code">JONEA140</td>
										<td data-title="Firm State/City">Melbourne</td>
										<td data-title="Firm Incharge Name">Giacomo Guilizzoni</td>
										<td data-title="Mobile">9625145236</td>
										<td data-title="Type of Work">9625145236</td>
										<td data-title="End Date of Work">1 June 2014</td>
										<td data-title="Active">Active</td>
										<td data-title="Timesheet">Timesheet</td>
										<td data-title=""><a href="javascript:void(0);"><i class="material-icons md-dark pmd-sm">more_vert</i></a></td>
									</tr>
								</tbody>
							</table>
						</div> <!-- Reflow table example -->
					
					</div>
				</div> <!-- Reflow table code and example end-->				
			</section> <!-- Reflow Table end --> 
			
		</div>
	</div>
	
</div><!--Table constructor end --> 

<!-- Footer Starts -->
<?php include('include/footer.php'); ?>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<?php include('include/scripts.php'); ?>
<!-- Scripts Ends -->

</body>
</html>