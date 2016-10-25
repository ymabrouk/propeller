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
	
<!--Lists -->
<div id="content" class="pmd-content">

    <!-- Buttons -->
	<div class="container-fluid">

		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>List</span>
		</h1><!-- End Title -->
		
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.php">Dashboard</a></li>
		  <li class="active">List</li>
		</ol><!--breadcrum end-->
	
		<!-- component header -->
		<div class="componant-title-bg"> 
			<p class="lead">List is a flexible and powerful component for displaying not only simple lists of elements, but complex ones with custom content.</p>
		</div> <!-- component header end -->
		
		<div class="list-custom"> 
			<!-- simple list -->
			<section class="row component-section">
				
				<!-- single line list title and description -->
				<div class="col-md-3">
					<div id="simple">
						<h2>Bootstrap list</h2>
					</div>
					<p>Three different types of lists are defined in Bootstrap: <strong>Unordered List</strong>, <strong>Ordered List</strong>, and <strong>Unstyled List</strong>.</p> 
				</div> <!-- single line list title and description end -->
				
				<!-- Bootstrap list code and example -->
				<div class="col-md-9"> 
					<!-- Bootstrap basic list-->
					<div class="component-box">

						<!-- simple list example -->
						<div class="row">
							<div class="col-md-4"> 
								<div class="pmd-card pmd-z-depth pmd-card-custom-view">
									<div class="pmd-card-body">
										<ul>
										  <li>First item</li>
										  <li>Second item</li>
										  <li>Third item
											<ul>
												<li>Nested First item</li>
												<li>Nested Second item</li>
											</ul>
										  </li>
										  <li>Forth item</li>
										  <li>Fifth item</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-4"> 
								<div class="pmd-card pmd-z-depth pmd-card-custom-view">
									<div class="pmd-card-body">
										<ol>
											<li>First item</li>
											<li>Second item</li>
											<li>Third item
												<ol>
													<li>Nested First item</li>
													<li>Nested Second item</li>
												</ol>
											</li>
											<li>Forth item</li>
											<li>Fifth item</li>
										</ol>
									</div>
								</div>
							</div>
							<div class="col-md-4"> 
								<div class="pmd-card pmd-z-depth pmd-card-custom-view">
									<div class="pmd-card-body">
										<ul class="list-unstyled">
											<li>First item</li>
											<li>Second item
												<ul>
													<li>Nested First item</li>
													<li>Neted Second iteom</li>
												</ul>
											</li>
											<li>Third item</li>
											<li>forth item</li>
											<li>Fifth item</li>
										</ul>
									</div>
								</div>
							</div>
						</div> <!-- simple list example end -->
						<p class="component-desc">Three different types of lists are defined in Bootstrap: <strong>Unordered List</strong>, <strong>Ordered List</strong>, and <strong>Unstyled List</strong>.</p>

					</div><!-- Bootstrap basic list ends--> 
					<!-- Description list-->
					<div class="component-box">
						<!-- Description list example -->
						<div class="row">
							<div class="col-md-12">
								<div class="pmd-card pmd-z-depth">
									<div class="pmd-card-body">
										<dl class="dl-horizontal"> 
											<dt>Description lists</dt> 
											<dd>A description list is perfect for defining terms.</dd> 
											<dt>Unordered</dt> 
											<dd>A list of items in which the order does not explicitly matter.</dd> 
											<dt>Ordered</dt> 
											<dd>A list of items in which the order does explicitly matter.</dd> 
											<dt>Unstyled</dt> 
											<dd>Remove the default <code>list-style</code> and left margin on list items (immediate children only). This only applies to immediate children list items, meaning you will need to add                                            the class for any nested lists as well.</dd> 
											<dt>Horizontal description</dt>
											<dd>Make terms and descriptions in <code><</code><code>dl</code><code>></code> line up side-by-side. Starts off stacked like default <code><</code><code>dl</code><code>></code>, but when the navbar expands, so do these.
										</dl>
									</div>
								</div>
								<p class="component-desc">Bootstrap provides <strong>Description List</strong> which consists of a list of terms with their associated description. </p>
							</div>
							
						</div> <!-- Description list example end -->
						
					</div><!-- Description list end -->
				</div> <!-- Bootstrap code and example end -->
			</section> <!-- Bootstrap list end -->
			
			<!-- single line list -->
			<section class="row component-section">
				
				<!-- single line list title and description -->
				<div class="col-md-3">
					<div id="single">
						<h2>Single line list</h2>
					</div>
					<p>In a <strong>single-line list</strong>, each tile contains a single line of text. The amount of text can vary between tiles within the same list.</p>
					Add <code>.pmd-card-list</code> followed by <code>.list-group</code> for the basic formatting of your list. 
				</div> <!-- single line list title and description end -->
				
				<!-- single line list code and example -->
				<div class="col-md-9"> 
					<div class="component-box">
						<!-- single line list example -->
						<div class="row">
							<div class="col-md-6"> 
								<ul class="list-group pmd-z-depth pmd-list pmd-card-list">
								  <li class="list-group-item">Single-line item</li>
								  <li class="list-group-item">Single-line item</li>
								  <li class="list-group-item">Single-line item</li>
								  <li class="list-group-item">Single-line item</li>
								  <li class="list-group-item">Single-line item</li>
								</ul>
							</div>
							<div class="col-md-6"> 	
								<ul class="list-group pmd-z-depth pmd-card-list pmd-list-icon">
									<li class="list-group-item"> 
										<i class="material-icons media-left pmd-sm">mood</i> 
										<span class="media-body">Single-line item with icon</span>
									</li>
									<li class="list-group-item">
										<i class="material-icons media-left media-middle">notifications</i>
										<div class="media-body">Single-line item with icon</div>
									</li>
									<li class="list-group-item"> <i class="material-icons media-left">person_add</i>
										<div class="media-body">Single-line item with icon</div>
									</li>
									<li class="list-group-item"> <i class="material-icons media-left">share</i>
										<div class="media-body">Single-line item with icon</div>
									</li>
									<li class="list-group-item"> <i class="material-icons media-left">drive_eta</i>
										<div class="media-body">Single-line item with icon</div>
									</li>
								</ul>
								<p class="component-desc"><strong>Icon list</strong> displays icon before the text lines. Add <code>.pmd-list-icon</code> for list with icons.</p>
							</div>
						</div> <!-- single line list example end -->
						
					</div>
				</div> <!-- single line list code and example end -->
				
				<!-- avatar list title and description-->
				<div class="col-md-3">
					<h2>&nbsp;</h2>
					<p>Distinguishing elements of list tiles need to be on the left for Left-to-Right interfaces, and vice versa. States and primary actions are placed on the left side of a list tile. Text within a list item should be considered part of the primary action target.</p>
				</div> <!-- avatar list title and description end -->
				
				<!-- avatar list code and example -->
				<div class="col-md-9"> 
					<div class="component-box">
						<!-- avatar list example -->
						<div class="row">
							<div class="col-md-6">
								<ul class="list-group pmd-z-depth pmd-card-list pmd-list-avatar">
									<li class="list-group-item">
										<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../../components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
										<div class="media-body media-middle"> Single-line item with avatar </div>
									</li>
									<li class="list-group-item">
										<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../../components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
										<div class="media-body media-middle"> Single-line item with avatar </div>
									</li>
									<li class="list-group-item">
										<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../../components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
										<div class="media-body media-middle"> Single-line item with avatar </div>
									</li>
								</ul>
								<p class="component-desc">Example of a single-line item with avatar.</p>
							</div>
							<div class="col-md-6">
								<ul class="list-group pmd-z-depth pmd-card-list pmd-list-avatar">
									<li class="list-group-item">
										<div class="media-left"> <a class="avatar-list-img" href="javascript:void(0);"> <img data-holder-rendered="true" src="../../components/list/img/40x40.png" class="img-responsive" data-src="holder.js/40x40" alt="40x40"> </a> </div>
										<div class="media-body media-middle"> Single-line item with avatar and icon </div>
										<i class="material-icons media-middle media-right">check_box</i> </li>
									<li class="list-group-item">
										<div class="media-left"> <a class="avatar-list-img" href="javascript:void(0);"> <img data-holder-rendered="true" src="../../components/list/img/40x40.png" class="img-responsive" data-src="holder.js/40x40" alt="40x40"> </a> </div>
										<div class="media-body media-middle"> Single-line item with avatar and icon </div>
										<i class="material-icons media-middle media-right">check_box_outline_blank</i> </li>
									<li class="list-group-item">
										<div class="media-left"> <a class="avatar-list-img" href="javascript:void(0);"> <img data-holder-rendered="true" src="../../components/list/img/40x40.png" class="img-responsive" data-src="holder.js/40x40" alt="40x40"> </a> </div>
										<div class="media-body media-middle"> Single-line item with avatar and icon </div>
										<i class="material-icons media-middle media-right">check_box_outline_blank</i> </li>
								</ul>
								<p class="component-desc">Example of a single-line item with avatar and icon.</p>
							</div>
						</div> <!-- avatar list example end -->
						
					</div>
				</div> <!-- avatar list code and example end -->
			</section> <!-- single line list end -->
			
			<!-- Two Line List -->
			<section class="row component-section">
				
				<!-- Two Line List title and description -->
				<div class="col-md-3">
					<div id="twoll">
						<h2>Two Line List</h2>
					</div>
					<p>In a <strong>two-line list</strong>, each tile contains a maximum of two lines of text. The amount of text can vary between tiles within the same list.</p>
				</div> <!-- Two Line List title and description end -->
				
				<!-- Two Line List code and example -->
				<div class="col-md-9"> 
					<div class="component-box">
						<!-- two line list example -->
						<div class="row">
							<div class="col-md-4"> 
								<!--Two line list -->
								<ul class="list-group pmd-z-depth pmd-card-list pmd-list">
									<li class="list-group-item">
										<h3 class="list-group-item-heading">Two-line item</h3>
										<span class="list-group-item-text">Secondary text</span> </li>
									<li class="list-group-item">
										<h3 class="list-group-item-heading">Two-line item</h3>
										<span class="list-group-item-text">Secondary text</span> </li>
									<li class="list-group-item">
										<h3 class="list-group-item-heading">Two-line item</h3>
										<span class="list-group-item-text">Secondary text</span> </li>
								</ul>
								<p class="component-desc">Two-line List</p>
							</div>
							<div class="col-md-4"> 
								<!--Two line list with icon -->
								<ul class="list-group pmd-z-depth pmd-list pmd-card-list">
									<li class="list-group-item"> <i class="material-icons media-left media-middle">mood</i>
										<div class="media-body">
											<h3 class="list-group-item-heading">Two-line item</h3>
											<span class="list-group-item-text">Secondary text</span> </div>
									</li>
									<li class="list-group-item"> <i class="material-icons media-left media-middle">notifications</i>
										<div class="media-body">
											<h3 class="list-group-item-heading">Two-line item</h3>
											<span class="list-group-item-text">Secondary text</span> </div>
									</li>
									<li class="list-group-item"> <i class="material-icons media-left media-middle">share</i>
										<div class="media-body">
											<h3 class="list-group-item-heading">Two-line item</h3>
											<span class="list-group-item-text">Secondary text</span> </div>
									</li>
								</ul>
								<p class="component-desc">Two-line List with Icon</p>
							</div>
							<div class="col-md-4"> 
								<!--Avatar with secondary text -->
								<ul class="list-group pmd-z-depth pmd-list pmd-card-list">
									<li class="list-group-item">
										<div class="media-left"> <a class="avatar-list-img avatar-list-img-custom" href="javascript:void(0);"> <img data-holder-rendered="true" src="../../components/list/img/40x40.png" class="img-responsive" data-src="holder.js/40x40" alt="40x40"> </a> </div>
										<div class="media-body media-middle">
											<h3 class="list-group-item-heading">Two-line item</h3>
											<span class="list-group-item-text">Secondary text</span> </div>
									</li>
									<li class="list-group-item">
										<div class="media-left"> <a class="avatar-list-img avatar-list-img-custom" href="javascript:void(0);"> <img data-holder-rendered="true" src="../../components/list/img/40x40.png" class="img-responsive" data-src="holder.js/40x40" alt="40x40"> </a> </div>
										<div class="media-body media-middle">
											<h3 class="list-group-item-heading">Two-line item</h3>
											<span class="list-group-item-text">Secondary text</span> </div>
									</li>
									<li class="list-group-item">
										<div class="media-left"> <a class="avatar-list-img avatar-list-img-custom" href="javascript:void(0);"> <img data-holder-rendered="true" src="../../components/list/img/40x40.png" class="img-responsive" data-src="holder.js/40x40" alt="40x40"> </a> </div>
										<div class="media-body media-middle">
											<h3 class="list-group-item-heading">Two-line item</h3>
											<span class="list-group-item-text">Secondary text</span> </div>
									</li>
								</ul>
								<p class="component-desc">Avatar with Two-line List</p>
							</div>
						</div> <!-- two line list example end -->
					</div>
				</div> <!-- Two Line List code and example end -->
			</section> <!-- Two Line List end -->
			 
			<!-- Three Line List -->
			<section class="row component-section">
				
				<!-- Three Line List title and description --> 
				<div class="col-md-3">
					<div id="thl">
						<h2>Three Line List</h2>
					</div>
					<p>If the secondary text is of two lines, it will appear like this.</p>
				</div> <!-- Three Line List title and description end -->
				
				<!-- Three Line List code and example -->
				<div class="col-md-9"> 
					<div class="component-box">
						<!-- three line list example -->
						<div class="row">
							<div class="col-md-6"> 
								<!--Three-line list group start -->
								<ul class="list-group pmd-z-depth pmd-list pmd-card-list">
									<li class="list-group-item">
										<div class="media-body">
											<h3 class="list-group-item-heading">Three-line item</h3>
											<span class="list-group-item-text">In a three-line list, each tile contains a maximum of three lines of text.</span> </div>
									</li>
									<li class="list-group-item">
										<div class="media-body">
											<h3 class="list-group-item-heading">Three-line item</h3>
											<span class="list-group-item-text">The amount of text can vary between tiles within the same list.</span> </div>
									</li>
									<li class="list-group-item">
										<div class="media-body">
											<h3 class="list-group-item-heading">Three-line item</h3>
											<span class="list-group-item-text">If more than three lines of text need to be shown in list tiles, use cards instead.</span> </div>
									</li>
								</ul>
								<!--Three line list group end -->
								<p class="component-desc">Three-line List</p>
							</div>
							<div class="col-md-6"> 
								<!--Three line with icon list group start -->
								<ul class="list-group pmd-z-depth pmd-list pmd-card-list">
									<li class="list-group-item"> <i class="material-icons media-left pmd-sm">mood</i>
										<div class="media-body">
											<h3 class="list-group-item-heading">Three-line item</h3>
											<span class="list-group-item-text">In a three-line list, each tile contains a maximum of three lines of text.</span> </div>
									</li>
									<li class="list-group-item"> <i class="material-icons media-left">notifications</i>
										<div class="media-body">
											<h3 class="list-group-item-heading">Three-line item</h3>
											<span class="list-group-item-text">The amount of text can vary between tiles within the same list.</span> </div>
									</li>
									<li class="list-group-item"> <i class="material-icons media-left">share</i>
										<div class="media-body">
											<h3 class="list-group-item-heading">Three-line item</h3>
											<span class="list-group-item-text">If more than three lines of text need to be shown in list tiles, use cards instead.</span> </div>
									</li>
								</ul>
								<!--Three line with icon list group end -->
								<p class="component-desc">Three-line List with Icon</p>
							</div>
						</div> <!-- three line list example end -->
						
					</div>
					<div class="component-box">
						<!-- three line list with media -->
						<div class="row">
							<div class="col-md-6"> 
								<!--Avatar with Three Line Text start -->
								<ul class="list-group pmd-z-depth pmd-list pmd-card-list">
									<li class="list-group-item">
										<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../../components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
										<div class="media-body">
											<h3 class="list-group-item-heading">Three-line item</h3>
											<span class="list-group-item-text">In a three-line list, each tile contains a maximum of three lines of text.</span> </div>
									</li>
									<li class="list-group-item">
										<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../../components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
										<div class="media-body">
											<h3 class="list-group-item-heading">Three-line item</h3>
											<span class="list-group-item-text">The amount of text can vary between tiles within the same list.</span> </div>
									</li>
									<li class="list-group-item">
										<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../../components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
										<div class="media-body">
											<h3 class="list-group-item-heading">Three-line item</h3>
											<span class="list-group-item-text">If more than three lines of text need to be shown in list tiles, use cards instead.</span> </div>
									</li>
								</ul>
								<!--Avatar with Three Line Text end -->
								<p class="component-desc">Avatar with Three-line List</p>
							</div>
							<div class="col-md-6"> 
								<!--Avatar with Three Line Text and Icon -->
								<ul class="list-group pmd-z-depth pmd-list pmd-card-list">
									<li class="list-group-item">
										<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../../components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
										<div class="media-body">
											<h3 class="list-group-item-heading">Three-line item</h3>
											<span class="list-group-item-text">In a three-line list, each tile contains a maximum of three lines of text.</span> </div>
										<i class="material-icons media-right">check_box</i> </li>
									<li class="list-group-item">
										<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../../components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
										<div class="media-body">
											<h3 class="list-group-item-heading">Three-line item</h3>
											<span class="list-group-item-text">The amount of text can vary between tiles within the same list.</span> </div>
										<i class="material-icons media-right">check_box_outline_blank</i> </li>
									<li class="list-group-item">
										<div class="media-left"> <a href="javascript:void(0);" class="avatar-list-img"> <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../../components/list/img/40x40.png" data-holder-rendered="true"> </a> </div>
										<div class="media-body">
											<h3 class="list-group-item-heading">Three-line item</h3>
											<span class="list-group-item-text">If more than three lines of text need to be shown in list tiles, use cards instead.</span> </div>
										<i class="material-icons media-right">check_box_outline_blank</i> </li>
								</ul>
								<!--Avatar with Three Line Text and Icon  end-->
								
								<p class="component-desc">Avatar with Three-line List and Icon</p>
							</div>
						</div> <!-- three line list with media end -->
					</div>
				</div> <!-- Three Line List code and example end -->
			</section> <!-- Three Line List end --> 			
			
			<!-- Linked list -->
			<section class="row component-section">
				
				<!-- Linked list title and description --> 
				<div class="col-md-3">
					<div id="linked">
						<h2>Linked Items</h2>
					</div>
					<p>Make list group items clickable by using anchor tags instead of list items (that also means a parent <code>&lt;div&gt;</code> instead of an <code>&lt;ul&gt;</code>). No need for individual parents around each element.</p>
				</div> <!-- Linked list title and description end -->
				
				<!-- Linked list code and example -->
				<div class="col-md-9"> 
					<div class="component-box">

						<!-- linked list example -->
						<div class="row">
							<div class="col-md-12"> 
								<div class="list-group pmd-z-depth pmd-list pmd-card-list"> <a class="list-group-item" href="javascript:void(0);">Single-line item</a> <a class="list-group-item" href="javascript:void(0);">Single-line item</a> <a class="list-group-item" href="javascript:void(0);">Single-line item</a> <a class="list-group-item" href="javascript:void(0);">Single-line item</a> <a class="list-group-item" href="javascript:void(0);">Single-line item</a> </div>
							</div>
						</div> <!-- linked list example end -->
						
					</div>
				</div> <!-- Linked list code and example end -->
			</section> <!-- Linked list end --> 			
			
			<!-- Disabled list -->
			<section class="row component-section">
				
				<!-- Disabled list title and description -->
				<div class="col-md-3">
					<div id="disable">
						<h2>Disabled List Items</h2>
					</div>
					<p>Add <code>.disabled</code> to a <code>.list-group-item</code> to gray it out to appear disabled.</p>
				</div> <!-- Disabled list title and description end -->
				
				<!-- Disabled list code and example -->
				<div class="col-md-9"> 
					<div class="component-box">
						<!-- disabled list example -->
						<div class="row">
							<div class="col-md-12">
								<div class="list-group pmd-z-depth pmd-list pmd-card-list"> <a class="list-group-item disabled" href="javascript:void(0);">Cras justo odio</a> <a class="list-group-item" href="javascript:void(0);">Dapibus ac facilisis in</a> <a class="list-group-item" href="javascript:void(0);">Morbi leo risus</a> <a class="list-group-item" href="javascript:void(0);">Porta ac consectetur ac</a> <a class="list-group-item" href="javascript:void(0);">Vestibulum at eros</a> </div>
							</div>
						</div> <!-- disabled list example end -->
						
					</div>
				</div> <!-- Disabled list code and example end -->
			</section> <!-- Disabled list end -->			 
			
			<!-- Group Item list -->
			<section class="row component-section">
				
				<!-- Group Item list title and description --> 
				<div class="col-md-3">
					<div id="group">
						<h2>Group Items</h2>
					</div>
					<p>Use contextual classes to style list items, default or linked. Also includes <code>.active</code> state.</p>
				</div> <!-- Group Item list title and description end -->
				
				<!-- Group Item list code and example -->
				<div class="col-md-9"> 
					<div class="component-box">
						<!-- group item list example -->
						<div class="row">
							<div class="col-md-6"> 
								<!--Group Items of diffrent types start -->
								<ul class="list-group pmd-z-depth pmd-list pmd-card-list">
									<li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
									<li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
									<li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
									<li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
								</ul>
								<!--Group Items of diffrent types end -->
								<p class="component-desc">Group Items with diffrent types</p>
							</div>
							<div class="col-md-6"> 
								<!--Group Items with Linking start -->
								<div class="list-group pmd-z-depth pmd-list pmd-card-list"> 
									<a class="list-group-item list-group-item-success" href="javascript:void(0);">Dapibus ac facilisis in</a>
									<a class="list-group-item list-group-item-info" href="javascript:void(0);">Cras sit amet nibh libero</a>
									<a class="list-group-item list-group-item-warning" href="javascript:void(0);">Porta ac consectetur ac</a>
									<a class="list-group-item list-group-item-danger" href="javascript:void(0);">Vestibulum at eros</a>
								</div>
								<!--Group Items with Linking end -->
								<p class="component-desc">Group Items with Linking</p>
							</div>
						</div> <!-- group item list example end -->
						
					</div>
					<div class="component-box">
						<!-- grouped list example -->
						<div class="row">
							<div class="col-md-12"> 
								<!--List group items with heading and Linking start -->
								<div class="list-group pmd-z-depth pmd-list pmd-card-list"> <a href="javascript:void(0);" class="list-group-item ">
									<h3 class="list-group-item-heading">List group item heading</h3>
									<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
									</a> <a href="javascript:void(0);" class="list-group-item">
									<h3 class="list-group-item-heading">List group item heading</h3>
									<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
									</a> <a href="javascript:void(0);" class="list-group-item">
									<h3 class="list-group-item-heading">List group item heading</h3>
									<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
									</a> </div>
								<!--List group items with heading and Linking end -->
								<p class="component-desc">List group items with heading and Linking</p>
							</div>
						</div> <!-- grouped list example end -->
					</div>
				</div> <!-- Group Item list code and example end -->
			</section> <!-- Group Item list end --> 			
		</div>
	
	</div>	
	
</div> <!--Lists end -->
 
	
<!-- Footer Starts -->
<?php include('include/footer.php'); ?>
<!-- Footer Ends -->

<!-- Scripts Starts -->
<?php include('include/scripts.php'); ?>
<!-- Scripts Ends -->

</body>
</html>