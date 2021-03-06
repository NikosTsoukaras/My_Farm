<?php 
	session_start();
	include "assets/php/functions.php";
?>

<!DOCTYPE html>
<html lang="el">

	<!-- begin::Head -->
	<head>
		<base href="">
		<meta charset="utf-8" />
		<title>My Farm | Οικονομική Διαχείριση </title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />

		<!--begin::Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->
		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="assets/css/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/skins/brand/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/skins/aside/light.css" rel="stylesheet" type="text/css" />

		<!--end::Layout Skins -->
		<!-- <link rel="shortcut icon" href="assets/media/logos/favicon.ico" /> -->
	</head>

	<!-- end::Head -->


	<?php if(isset($_SESSION['user_id'])){ ?>


	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Header Mobile -->
		<?php include "html_includes/dashboard_mobile_header.html" ?>
		<!-- end:: Header Mobile -->

		<!-- begin:: Root -->
		<div class="kt-grid kt-grid--hor kt-grid--root">

			<!-- begin:: Page -->
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

				<!-- begin:: Aside -->
				<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>

				<?php include "html_includes/dashboard_sidebar.php" ?>

				<!-- end:: Aside -->

				<!-- begin:: Wrapper -->
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

					<!-- begin:: Header -->
					<?php include "html_includes/dashboard_header.php" ?>
					<!-- end:: Header -->
					<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

						<!-- begin:: Subheader -->
						<?php include "html_includes/dashboard_subheader.php" ?>
						<!-- end:: Subheader -->

						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										<h3 class="kt-portlet__head-title">
											Πίνακας Εσόδων
											<!-- <small>data loaded from remote data source</small> -->
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<a href="#" class="btn btn-clean kt-hidden">
												Back to dashboard
											</a>
											<a href="#" class="btn btn-clean btn-bold btn-upper btn-font-sm kt-hidden">
												<i class="la la-long-arrow-left"></i>
												Back
											</a>
											<a data-toggle="collapse" href="#income_form" role="button" aria-expanded="true" aria-controls="income_form" class="btn btn-default btn-bold btn-upper btn-font-sm d-flex">
												<i class="flaticon2-add-1"></i>
												Νέα Καταχώρηση
											</a>
		
											
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">
									<div class="collapse" id="income_form" >
										<div class="card card-body">
											<div class="kt-portlet__head">
												<div class="kt-portlet__head-label">
													<h3 class="kt-portlet__head-title">Καταχώρηση Είσπραξης</h3>
												</div>
											</div>
											<div id="in_status"></div>
											<form class="kt-form kt-form--label-right" id="insert_income_form">
												<div class="kt-portlet__body">

													<div class="form-group row">
														<label class="col-form-label col-lg-3 col-sm-12">Χρηματικό Ποσό *</label>
														<div class="col-lg-5 col-md-5 col-sm-12 form-group-sub">
															<div class="input-group">
																<input id="kt_touchspin_6" type="text" class="form-control" name="income" placeholder="" type="text">
																<div class="input-group-append"><span class="input-group-text" id="basic-addon2">€</span></div>
															</div>
															<span class="form-text text-muted">Παρακαλώ εισάγεται αριθμό νεογνών.</span>
														</div>
													</div>


													<div class="form-group row">
														<label class="col-form-label col-lg-3 col-sm-12">Περιγραφή *</label>
														<div class="col-lg-5 col-md-5 col-sm-12">
															<input type="text" class="form-control" name="income_description" placeholder="">
                                                            <span class="form-text text-muted">Παρακαλώ πληκτρολογήστε την πηγή της είσπραξης</span>
														</div>
													</div>

													<div class="kt-portlet__foot">
														<div class="kt-form__actions">
															<div class="row">
																<div class="col-lg-9 ml-lg-auto">
																	<button type="submit" id="income_record" class="btn btn-brand">Καταχώρηση</button>
																	<button type="reset" data-toggle="collapse" href="#income_form" aria-controls="income_form"  class="btn btn-secondary">Ακύρωση</button>
																</div>
															</div>
														</div>
													</div>
											</form>
										</div>
									</div>
									</div>

									<!--begin: Search Form -->
									<div class="kt-form kt-fork--label-right kt-margin-t-20 kt-margin-b-10">
										<div class="row align-items-center">
											<div class="col-xl-8 order-2 order-xl-1">
												<div class="row align-items-center">
													<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
														<div class="kt-input-icon kt-input-icon--left">
															<input type="text" class="form-control" placeholder="Αναζήτηση..." id="generalSearch">
															<span class="kt-input-icon__icon kt-input-icon__icon--left">
																<span><i class="la la-search"></i></span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end: Search Form -->
								
								<div class="kt-portlet__body kt-portlet__body--fit">

									<!--begin: Datatable -->
									<div class="income_datatable" id="json_data"></div>
									<!--end: Datatable -->
								</div>
							</div>
						</div>
						<!-- end:: Content -->
					</div>

                    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

				

						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										<h3 class="kt-portlet__head-title">
											Πίνακας Εξόδων
											<!-- <small>data loaded from remote data source</small> -->
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<a href="#" class="btn btn-clean kt-hidden">
												Back to dashboard
											</a>
											<a href="#" class="btn btn-clean btn-bold btn-upper btn-font-sm kt-hidden">
												<i class="la la-long-arrow-left"></i>
												Back
											</a>
											<a data-toggle="collapse" href="#outgoings_form" role="button" aria-expanded="true" aria-controls="outgoings_form" class="btn btn-default btn-bold btn-upper btn-font-sm d-flex">
												<i class="flaticon2-add-1"></i>
												Νέα Καταχώρηση
											</a>
		
											
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">
									<div class="collapse" id="outgoings_form" >
										<div class="card card-body">
											<div class="kt-portlet__head">
												<div class="kt-portlet__head-label">
													<h3 class="kt-portlet__head-title">Καταχώρηση Δαπάνης</h3>
												</div>
											</div>
											<div id="out_status"></div>
											<form class="kt-form kt-form--label-right" id="insert_outgoings_form">
												<div class="kt-portlet__body">
												

													<div class="form-group row">
														<label class="col-form-label col-lg-3 col-sm-12">Χρηματικό Ποσό *</label>
														<div class="col-lg-5 col-md-5 col-sm-12 form-group-sub">
															<div class="input-group">
																<input id="kt_touchspin_7" type="text" class="form-control" name="outgoings" placeholder="" type="text">
																<div class="input-group-append"><span class="input-group-text" id="basic-addon2">€</span></div>
															</div>
															<span class="form-text text-muted">Παρακαλώ εισάγεται αριθμό νεογνών.</span>

														</div>
													</div>

													<div class="form-group row">
														<label class="col-form-label col-lg-3 col-sm-12">Περιγραφή *</label>
														<div class="col-lg-5 col-md-5 col-sm-12">
															<input type="text" class="form-control" name="outgoings_description" placeholder="">
                                                            <span class="form-text text-muted">Παρακαλώ πληκτρολογήστε την αιτία της δαπάνης</span>
														</div>
													</div>

													<div class="kt-portlet__foot">
														<div class="kt-form__actions">
															<div class="row">
																<div class="col-lg-9 ml-lg-auto">
																	<button type="submit" id="outgoings_record" class="btn btn-brand">Καταχώρηση</button>
																	<button type="reset" data-toggle="collapse" href="#outgoings_form" aria-controls="outgoings_form"  class="btn btn-secondary">Ακύρωση</button>
																</div>
															</div>
														</div>
													</div>
											</form>
										</div>
									</div>
									</div>

									<!--begin: Search Form -->
									<div class="kt-form kt-fork--label-right kt-margin-t-20 kt-margin-b-10">
										<div class="row align-items-center">
											<div class="col-xl-8 order-2 order-xl-1">
												<div class="row align-items-center">
													<div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
														<div class="kt-input-icon kt-input-icon--left">
															<input type="text" class="form-control" placeholder="Αναζήτηση..." id="generalSearch">
															<span class="kt-input-icon__icon kt-input-icon__icon--left">
																<span><i class="la la-search"></i></span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end: Search Form -->
								
								<div class="kt-portlet__body kt-portlet__body--fit">

									<!--begin: Datatable -->
									<div class="outgoings_datatable" id="json_data"></div>

									<!--end: Datatable -->
								</div>
							</div>
						</div>
						<!-- end:: Content -->
					</div></div>
	</div>
					<!-- begin:: Footer -->
					<?php include "html_includes/dashboard_footer.html" ?>
					<!-- end:: Footer -->
				</div>
				
					<!-- Update Income Modal -->
				<div class="modal fade bd-example-modal-lg edit-income-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Επεξεργασία Καταχώρησης</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body" >
									<div id="update_income_status"></div>
									<form class="kt-form kt-form--label-right" id="update_income">
											<div class="form-group row">
												<label class="col-form-label col-lg-3 col-sm-12">Τίτλος *</label>
												<div class="col-lg-5 col-md-5 col-sm-12">
													<input type="text" class="form-control" id="" name="up_incomes_description" placeholder="">
													<span class="form-text text-muted">Παρακαλώ πληκτρολογήστε τίτλο</span>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-form-label col-lg-3 col-sm-12">Χρηματικό Ποσό *</label>
												<div class="col-lg-5 col-md-5 col-sm-12">
													<div class="input-group">
														<input id="kt_touchspin_1" type="text" class="form-control" value="" name="up_incomes_price" placeholder="" type="text">
														<div class="input-group-append"><span class="input-group-text" id="basic-addon2">€</span></div>
													</div>
													<span class="form-text text-muted">Παρακαλώ εισάγεται χρηματικό ποσό</span>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-form-label col-lg-3 col-sm-12">Ημερομηνία *</label>
												<div class="col-lg-5 col-md-5 col-sm-12">
													<div class="input-group date">
															<input type="text" class="form-control" autocomplete="off" name="up_incomes_date" placeholder="" id="kt_datetimepicker_6">
															<div class="input-group-append">
																<span class="input-group-text">
																	<i class="la la-calendar glyphicon-th"></i>
																</span>
															</div>
													</div>
													<span class="form-text text-muted">Παρακαλώ επιλέξτε ημερομηνία</span>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-outline-brand" data-dismiss="modal">Ακύρωση</button>
												<button type="submit" id="confirm_income_update" class="btn btn-outline-brand" >Επιβεβαίωση</button>
											</div>
									</form>
								</div>
								
							</div>
						</div>
					</div>
				</div>

				<!-- Delete Income Modal -->
				<div class="modal fade bd-example-modal-lg delete-income-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Διαγραφή Καταχώρησης</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body" >
									<div id="delete_income_status"></div>
									<form class="kt-form kt-form--label-right" id="delete_income_form">
										<div class="form-group row">
											<h6>Είστε σίγουρος πως θέλετε να διαγράψετε την συγκεκριμένη καταχώρηση ; </h6>
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-outline-brand" data-dismiss="modal">Ακύρωση</button>
									<button type="submit" id="confirm_income_delete" class="btn btn-outline-brand" >Επιβεβαίωση</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Update Outgoings Modal -->
				<div class="modal fade bd-example-modal-lg edit-outgoings-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Επεξεργασία Καταχώρησης</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body" >
									<div id="update_outgoings_status"></div>
									<form class="kt-form kt-form--label-right" id="update_outgoings_form">
										<div class="form-group row">
												<label class="col-form-label col-lg-3 col-sm-12">Τίτλος *</label>
												<div class="col-lg-5 col-md-5 col-sm-12">
													<input type="text" class="form-control" id="" name="up_outgoings_description" placeholder="">
													<span class="form-text text-muted">Παρακαλώ πληκτρολογήστε τίτλο</span>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-form-label col-lg-3 col-sm-12">Τίτλος *</label>
												<div class="col-lg-5 col-md-5 col-sm-12">
													<div class="input-group">
														<input id="kt_touchspin_1" type="text" class="form-control" value="" name="up_outgoings_price" placeholder="" type="text">
															<div class="input-group-append"><span class="input-group-text" id="basic-addon2">€</span></div>
														</div>
														<span class="form-text text-muted">Παρακαλώ εισάγεται χρηματικό ποσό</span>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-form-label col-lg-3 col-sm-12">Τίτλος *</label>
												<div class="col-lg-5 col-md-5 col-sm-12">
													<div class="input-group date">
															<input type="text" class="form-control" autocomplete="off" name="up_outgoings_date" placeholder="" id="kt_datetimepicker_6">
															<div class="input-group-append">
																<span class="input-group-text">
																	<i class="la la-calendar glyphicon-th"></i>
																</span>
															</div>
													</div>
													<span class="form-text text-muted">Παρακαλώ επιλέξτε ημερομηνία</span>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-outline-brand" data-dismiss="modal">Ακύρωση</button>
												<button type="submit" id="confirm_outgoings_update" class="btn btn-outline-brand" >Επιβεβαίωση</button>
											</div>
									</form>
								</div>
								
							</div>
						</div>
					</div>
				</div>

				<!-- Delete Outgoings Modal -->
				<div class="modal fade bd-example-modal-lg delete-outgoings-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Διαγραφή Καταχώρησης</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body" >
									<div id="delete_outgoings_status"></div>
									<form class="kt-form kt-form--label-right" id="delete_outgoings_form">
										<div class="form-group row">
											<h6>Είστε σίγουρος πως θέλετε να διαγράψετε την συγκεκριμένη καταχώρηση ; </h6>
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-outline-brand" data-dismiss="modal">Ακύρωση</button>
									<button type="submit" id="confirm_outgoings_delete" class="btn btn-outline-brand" >Επιβεβαίωση</button>
								</div>
							</div>
						</div>
					</div>
				</div>


				<!-- end:: Wrapper -->
			</div>

			<!-- end:: Page -->
		</div>

		<!-- end:: Root -->

		<!-- begin:: Topbar Offcanvas Panels -->

		<!-- begin::Offcanvas Toolbar Quick Actions -->
		<?php include "html_includes/dashboard_quick_panel.html" ?>
		<!-- end::Offcanvas Toolbar Quick Actions -->

		<!-- end:: Topbar Offcanvas Panels -->

		<!-- begin:: Quick Panel -->
		<?php include "html_includes/dashboard_quick_panel_window.html" ?>
		<!-- end:: Quick Panel -->

		<!-- begin:: Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end:: Scrolltop -->

	<?php }else{ header('Location: custom/error/404-v1.html'); } ?>

		

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#10ac84",
						"metal": "#c4c5d6",
						"light": "#ffffff",
						"accent": "#00c5dc",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995",
						"focus": "#9816f4"
					},
					"base": {
						"label": [
							"#c5cbe3",
							"#a1a8c3",
							"#3d4465",
							"#3e4466"
						],
						"shape": [
							"#f0f3ff",
							"#d9dffa",
							"#afb4d4",
							"#646c9a"
						]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
		<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<script src="assets/js/pages/components/forms/validation/controls.js" type="text/javascript"></script>

		<!--begin::Page Scripts(used by this page) -->
		<!-- <script src="assets/js/pages/dashboard.js" type="text/javascript"></script> -->
        <script src="assets/js/pages/components/keen-datatable/base/data-json.js" type="text/javascript"></script>
        
		<script src="assets/js/pages/components/forms/widgets/bootstrap-datetimepicker.js" type="text/javascript"></script>
        

		<script src="assets/js/pages/components/forms/widgets/bootstrap-touchspin.js" type="text/javascript"></script>


        <script src="assets/js/pages/custom/economics.js" type="text/javascript"></script>

		
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>