<?php $active = "penilaian"; ?>
<?php include '../layout/header.php'; ?>

	<!-- CSS CUSTOM -->
	<link href="../../assets/metronic/css/custom.css"rel="stylesheet" type="text/css" />

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">Kuisioner</h3>
								<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<li class="m-nav__item m-nav__item--home">
										<a href="#" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
									</li>
									<li class="m-nav__separator">-</li>
									<li class="m-nav__item">
										<span class="m-nav__link-text">Kuisioner</span>
									</li>
								</ul>
							</div>
							<div>
								
							</div>
						</div>
					</div>
					<!-- END: Subheader -->

					<div class="m-content">
						<div class="row">
							<div class="col-xl-12">

								<!--Begin::Main Portlet-->
								<div class="m-portlet">

									<!--begin: Portlet Head-->
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
                                                <h3 class="m-portlet__head-text">
                                                <span>Form Kuisioner</span>
												</h3>
											</div>
										</div>
									</div>
									<!--end: Portlet Head-->

											
									<!--begin: Form Wizard-->
									<div class="m-wizard m-wizard--2 m-wizard--success" id="m_wizard">

										<!--begin: Message container -->
										<div class="m-portlet__padding-x">
										
											<!-- Here you can put a message or alert ;-->
										
										
									</div>
										<!--end: Message container -->

										<!--begin: Form Wizard Form-->
										<div class="m-wizard__form">

											<form class="m-form m-form--label-align-left- m-form--state-" id="m_form">

												<!--begin: Form Body -->
												<div class="m-portlet__body" >
													
													<!--begin::Form-->
                                                    <form class="m-form m-form--fit m-form--label-align-right">
                                                        <div class="m-portlet__body" style="margin-top:-30px;">

                                                           
															<div class="form-group m-form__group row">
																<div class="col-lg-6 m-form__group-sub">
																	<label>Nama Responden :</label>
                                                                	<input type="text" class="form-control m-input" placeholder="Masukan Nama Responden">
																</div>
															</div>
	
															<div class="form-group m-form__group row">
																<div class="col-lg-6 m-form__group-sub">
																	<label>NIP :</label>
                                                                	<input type="text" class="form-control m-input" placeholder="Masukan NIP">
																</div>
															</div>

															<div class="form-group m-form__group row">
																<div class="col-lg-6 m-form__group-sub">
																	<label>Jabatan :</label>
																	<input type="text" class="form-control m-input" placeholder="Masukan Jabatan">
																</div>
															</div>
															
                                                        </div>
                                                        <div class="m-portlet__foot m-portlet__foot--fit">
                                                            <div class="m-form__actions">
																<a href="kuisioner.php" data-toggle="m-tooltip" class="btn btn-primary" data-direction="left" data-width="auto">
																	<span>Mulai
																	</span>
																</a>
																
                                                            </div>
                                                        </div>
                                                    </form>

                                                    <!--end::Form-->
												</div>

												<!--end: Form Body -->
											</form>
										</div>

										<!--end: Form Wizard Form-->
									</div>

									<!--end: Form Wizard-->
								</div>

								<!--End::Main Portlet-->
							</div>
						</div>
					</div>
					
				</div>
			</div>
			<!-- end:: Body -->
</body>
					
<?php include '../layout/footer.php'; ?>