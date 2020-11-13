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
										<a href="index.php" class="m-nav__link">
											<span class="m-nav__link-text">Form Kuisioner</span>
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
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													Kuisioner
												</h3>
											</div>
										</div>
									</div>
									<div class="m-portlet__body">
										<ul class="nav nav-tabs" role="tablist">
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#" data-target="#m_tabs_1_1">Domain 1</a>
											</li>
											<li class="nav-item">
												<a class="nav-link active show" data-toggle="tab" href="#m_tabs_1_2">Domain 2</a>
											</li>
											<li class="nav-item">
												<a class="nav-link disabled" data-toggle="tab" href="#" data-target="#m_tabs_1_3">Domain 3</a>
											</li>
											<li class="nav-item">
												<a class="nav-link disabled" data-toggle="tab" href="#" data-target="#m_tabs_1_4">Domain 4</a>
											</li>
											<li class="nav-item">
												<a class="nav-link disabled" data-toggle="tab" href="#" data-target="#m_tabs_1_5">Domain 5</a>
											</li>
										</ul>
										<div class="tab-content">
											<div class="tab-pane " id="m_tabs_1_1" role="tabpanel">
												<!--begin: Form Wizard-->
												<div class="m-wizard m-wizard--2 m-wizard--success" id="m_wizard">

													<!--begin: Message container -->
													<div class="m-portlet__padding-x m--margin-top-20 m--margin-right-20">

														<div class="row pilihan-step" style="height:10px ">
															<label for="exampleSelect1">Pilihan Step</label>	
															<div class="col-md-3">
																<div class="form-group m-form__group" style="height:10px">
																
																	<select class="form-control m-input form-control-sm" id="exampleSelect1">
																		<option>Step 1</option>
																		<option>Step 2</option>
																		<option>Step 3</option>
																		<option>Step 4</option>
																		<option>Step 5</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<!--end: Message container -->

													<!--begin: Form Wizard Head -->
													<div class="m-wizard__head m-portlet__padding-x m--margin-bottom-20">
																						
														<div class="m-wizard__progress">
															<div class="progress">
																<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>

															<!--begin: Form Wizard Nav -->														
															<div class="m-wizard__nav">
																<div class="m-wizard__steps">
																	<div class="m-wizard__step m-wizard__step--current" m-wizard-target="m_wizard_form_step_1">
																		<a class="m-wizard__step-number m-tabs__link active" href="#m_wizard_form_step_1">
																			<span><span>1</span></span>
																		</a>
																		<div class="m-wizard__step-info">
																			<div class="m-wizard__step-title">
																				Step
																			</div>	
																		</div>
																	</div>																	
																	<div class="m-wizard__step m-wizard__step--current" m-wizard-target="m_wizard_form_step_2">
																		<a class="m-wizard__step-number m-tabs__link"  href="#m_wizard_form_step_2">
																			<span><span>2</span></span>
																		</a>
																		<div class="m-wizard__step-info">
																			<div class="m-wizard__step-title">
																				Step
																			</div>
																		</div>
																	</div>
																	<div class="m-wizard__step m-wizard__step--current" m-wizard-target="m_wizard_form_step_3">
																		<a class="m-wizard__step-number m-tabs__link" href="#m_wizard_form_step_3">
																		<span><span>3</span></span>
																		</a>
																		<div class="m-wizard__step-info">
																			<div class="m-wizard__step-title">
																				Step
																				
																			</div>	
																		</div>	
																	</div>	
																	<div class="m-wizard__step m-wizard__step--current" m-wizard-target="m_wizard_form_step_4">
																		<a class="m-wizard__step-number m-tabs__link"  href="#m_wizard_form_step_4">
																		<span><span>4</span></span>
																		</a>
																		<div class="m-wizard__step-info">
																			<div class="m-wizard__step-title">
																				Step
																			</div>	
																		</div>
																	</div>
																	<div class="m-wizard__step m-wizard__step--current" m-wizard-target="m_wizard_form_step_5">
																		<a class="m-wizard__step-number m-tabs__link"  href="#m_wizard_form_step_5">
																		<span><span>5</span></span>
																		</a>	
																		<div class="m-wizard__step-info">
																			<div class="m-wizard__step-title">
																				Step
																			</div>
																		</div>
																	</div>

																</div>
															</div>
															<!--end: Form Wizard Nav -->
													</div>
													<!--end: Form Wizard Head -->

													<!--begin: Form Wizard Form-->
													<div class="m-wizard__form">

														<form class="m-form m-form--label-align-left- m-form--state-" id="m_form">

															<!--begin: Form Body -->
															<div class="m-portlet__body" >
																<div class="tab-content">

																	<!--begin: Form Wizard Step 1-->
																	<div class="m-wizard__form-step tab-pane" id="m_wizard_form_step_1">
																		<div class="row" >
																			<div class="col-xl-12 f-penilaian" >

																				<!--begin::Portlet-->
																				<div class="tab-content  m--padding-15" style="margin-top: -4%;margin-bottom: -2%;">
																						<div class="m-form__section m-form__section--first">
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Domain 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal SPBE</span>
																								</div>
																							</div>
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Aspek 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal Tata Kelola SPBE</span>
																								</div>
																							</div>
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Indikator 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal Tata Pengarah SPBE Instansi Pemerintah</span>
																								</div>
																							</div>
																						</div>
																					</div>
																				<!--end::Portlet-->

																				<!--begin::Portlet-->
																				<div class="m-portlet m-portlet--creative m-portlet--bordered-semi">
																					<div class="m-portlet__head">
																					<div class="m-portlet__head-caption">
																						<div class="m-portlet__head-title">
																							<span class="m-portlet__head-icon m--hide">
																								<i class="flaticon-statistics"></i>
																							</span>
																							<h2 class="m-portlet__head-text">
																								Apakah Instansi Saudara memiliki kebijakan internal terkait Tim Pengarah SPBE/TIK/?
																							</h2>
																							<h2 class="m-portlet__head-label m-portlet__head-label--primary">
																								<span>Pertanyaan</span>
																							</h2>
																						</div>
																					</div>
																					</div>
																					
																					<div class="m-portlet__body">
																						<div class="row">
																							<div class="col-lg-12">
																								<label class="m-option m-option m-option--plain">
																									<span class="m-option__control">
																										<span class="m-radio m-radio--brand m-radio--check-bold">
																											<input type="radio" name="m_option_1" value="1">
																											<span></span>
																										</span>
																									</span>
																									<span class="m-option__label">
																										<span class="m-option__head">
																											<span class="m-option__title">
																												Level 0
																											</span>
																										</span>
																										<span class="m-option__body">
																										Tidak terdapat kebijakan internal terkait Tim Pengarah SPBE.
																										</span>
																									</span>
																								</label>
																							</div>
																						</div>
																						<div class="row">
																							<div class="col-lg-12">
																								<label class="m-option m-option m-option--plain">
																									<span class="m-option__control">
																										<span class="m-radio m-radio--brand m-radio--check-bold">
																											<input type="radio" name="m_option_1" value="1">
																											<span></span>
																										</span>
																									</span>
																									<span class="m-option__label">
																										<span class="m-option__head">
																											<span class="m-option__title">
																												Level 1
																											</span>
																										</span>
																										<span class="m-option__body">
																											Terdapat konsep kebijakan internal terkait Tim Pengarah SPBE.
																										</span>
																									</span>
																								</label>
																							</div>	
																						</div>
																						<div class="row">
																							<div class="col-lg-12">
																								<label class="m-option m-option m-option--plain">
																									<span class="m-option__control">
																										<span class="m-radio m-radio--brand m-radio--check-bold">
																											<input type="radio" name="m_option_1" value="1">
																											<span></span>
																										</span>
																									</span>
																									<span class="m-option__label">
																										<span class="m-option__head">
																											<span class="m-option__title">
																												Level 2
																											</span>
																										</span>
																										<span class="m-option__body">
																										Kebijakan internal telah ditetapkan dan mencakup pengaturan tugas-tugas Tim Pengarah SPBE yang mendukung penerapan SPBE  pada sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.
																										</span>
																									</span>
																								</label>
																							</div>	
																						</div>
																						<div class="row">
																							<div class="col-lg-12">
																								<label class="m-option m-option m-option--plain">
																									<span class="m-option__control">
																										<span class="m-radio m-radio--brand m-radio--check-bold">
																											<input type="radio" name="m_option_1" value="1">
																											<span></span>
																										</span>
																									</span>
																									<span class="m-option__label">
																										<span class="m-option__head">
																											<span class="m-option__title">
																												Level 3
																											</span>
																										</span>
																										<span class="m-option__body">
																										Kebijakan internal mencakup pengaturan tugas-tugas Tim Pengarah SPBE yang mendukung penerapan SPBE pada semua unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.
																										</span>
																									</span>
																								</label>
																							</div>	
																						</div>
																						<div class="row">
																							<div class="col-lg-12">
																								<label class="m-option m-option m-option--plain">
																									<span class="m-option__control">
																										<span class="m-radio m-radio--brand m-radio--check-bold">
																											<input type="radio" name="m_option_1" value="1">
																											<span></span>
																										</span>
																									</span>
																									<span class="m-option__label">
																										<span class="m-option__head">
																											<span class="m-option__title">
																												Level 4
																											</span>
																										</span>
																										<span class="m-option__body">
																										Kebijakan internal mencakup pengaturan tugas-tugas Tim Pengarah SPBE yang mendukung penerapan SPBE antar Instansi Pusat, antar Pemerintah Daerah, atau antar Instansi Pusat dan Pemerintah Daerah.
																										</span>
																									</span>
																								</label>
																							</div>	
																						</div>
																						<div class="row">
																							<div class="col-lg-12">
																								<label class="m-option m-option m-option--plain">
																									<span class="m-option__control">
																										<span class="m-radio m-radio--brand m-radio--check-bold">
																											<input type="radio" name="m_option_1" value="1">
																											<span></span>
																										</span>
																									</span>
																									<span class="m-option__label">
																										<span class="m-option__head">
																											<span class="m-option__title">
																												Level 5
																											</span>
																										</span>
																										<span class="m-option__body">
																										Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan instansi.
																										</span>
																									</span>
																								</label>
																							</div>	
																						</div>
																					</div>	


																						<div class="m-portlet__body">
																								<div class="row">
																									<div class="col-lg-6">	 
																									<h5>
																										<span>Penjelasan</span>
																									</h5>
																									</div>	
																									<div class="col-lg-6">	 
																									<h5>
																										<span>Dokumen Pendukung</span>
																									</h5>
																									</div>	
																								</div>
																						</div>

																					<div class="m-portlet__body">
																						<div class="row">
																							<div class="col-xl-6">
																								<div class="form-grup">
																									<textarea class="form-control" placeholder="Enter Here"></textarea>
																								</div>	
																							</div>
																							<div class="col-xl-6"> 
																								<div class="custom-file">
																								<input type="file" class="custom-file-input" id="customFile">
																								<label class="custom-file-label" for="customFile">Choose file</label>
																							</div>
																						</div>
																					</div>
																				</div>
																				<!--end::Portlet-->
																				
																				</div>
																			</div>
																		</div>
																	</div>

																	<!--end: Form Wizard Step 1-->

																	<!--begin: Form Wizard Step 2-->
																	<div class="m-wizard__form-step tab-pane" id="m_wizard_form_step_2">
																		<div class="row">
																			<div class="col-xl-12  f-penilaian">
																					<!--begin::Portlet-->
																					<div class="tab-content  m--padding-15" style="margin-top: -4%;margin-bottom: -2%;">
																						<div class="m-form__section m-form__section--first">
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Domain 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal SPBE</span>
																								</div>
																							</div>
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Aspek 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal Tata Kelola SPBE</span>
																								</div>
																							</div>
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Indikator 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal Tata Pengarah SPBE Instansi Pemerintah</span>
																								</div>
																							</div>
																						</div>
																					</div>
																					<!--end::Portlet-->

																					<!--begin::Portlet-->
																					<div class="m-portlet m-portlet--creative m-portlet--bordered-semi">
																						<div class="m-portlet__head">
																						<div class="m-portlet__head-caption">
																							<div class="m-portlet__head-title">
																								<span class="m-portlet__head-icon m--hide">
																									<i class="flaticon-statistics"></i>
																								</span>
																								<h2 class="m-portlet__head-text">
																								Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait proses bisnis (alur kerja) terintegrasi?
																								</h2>
																								<h2 class="m-portlet__head-label m-portlet__head-label--primary">
																									<span>Pertanyaan</span>
																								</h2>
																							</div>
																						</div>
																						</div>
																						
																							<div class="m-portlet__body">
																								<div class="row">
																									<div class="col-lg-12">
																										<label class="m-option m-option m-option--plain">
																											<span class="m-option__control">
																												<span class="m-radio m-radio--brand m-radio--check-bold">
																													<input type="radio" name="m_option_1" value="1">
																													<span></span>
																												</span>
																											</span>
																											<span class="m-option__label">
																												<span class="m-option__head">
																													<span class="m-option__title">
																														Level 0
																													</span>
																												</span>
																												<span class="m-option__body">
																												Tidak terdapat kebijakan internal terkait standardisasi proses bisnis.
																												</span>
																											</span>
																										</label>
																									</div>
																								</div>
																								<div class="row">
																									<div class="col-lg-12">
																										<label class="m-option m-option m-option--plain">
																											<span class="m-option__control">
																												<span class="m-radio m-radio--brand m-radio--check-bold">
																													<input type="radio" name="m_option_1" value="1">
																													<span></span>
																												</span>
																											</span>
																											<span class="m-option__label">
																												<span class="m-option__head">
																													<span class="m-option__title">
																														Level 1
																													</span>
																												</span>
																												<span class="m-option__body">
																												Terdapat konsep kebijakan internal terkait standardisasi penyusunan proses bisnis.
																												</span>
																											</span>
																										</label>
																									</div>	
																								</div>
																								<div class="row">
																									<div class="col-lg-12">
																									<label class="m-option m-option m-option--plain">
																										<span class="m-option__control">
																											<span class="m-radio m-radio--brand m-radio--check-bold">
																												<input type="radio" name="m_option_1" value="1">
																												<span></span>
																											</span>
																										</span>
																										<span class="m-option__label">
																											<span class="m-option__head">
																												<span class="m-option__title">
																													Level 2
																												</span>
																											</span>
																											<span class="m-option__body">
																											Kebijakan internal telah ditetapkan dan mendukung standardisasi penyusunan proses bisnis.
																										</span>
																										</span>
																									</label>
																									</div>	
																								</div>
																								<div class="row">
																									<div class="col-lg-12">
																										<label class="m-option m-option m-option--plain">
																											<span class="m-option__control">
																												<span class="m-radio m-radio--brand m-radio--check-bold">
																													<input type="radio" name="m_option_1" value="1">
																													<span></span>
																												</span>
																											</span>
																											<span class="m-option__label">
																												<span class="m-option__head">
																													<span class="m-option__title">
																														Level 3
																													</span>
																												</span>
																												<span class="m-option__body">
																												Kebijakan internal telah mendukung integrasi proses bisnis di dalam Instansi Pusat/Pemerintah Daerah Saudara.
																											</span>
																											</span>
																										</label>
																									</div>	
																								</div>
																								<div class="row">
																									<div class="col-lg-12">
																										<label class="m-option m-option m-option--plain">
																											<span class="m-option__control">
																												<span class="m-radio m-radio--brand m-radio--check-bold">
																													<input type="radio" name="m_option_1" value="1">
																													<span></span>
																												</span>
																											</span>
																											<span class="m-option__label">
																												<span class="m-option__head">
																													<span class="m-option__title">
																														Level 4
																													</span>
																												</span>
																												<span class="m-option__body">
																												Kebijakan telah mendukung integrasi proses bisnis antar Instansi Pusat, antar Pemerintah Daerah, dan/atau antar Instansi Pusat dan Pemerintah Daerah.
																											</span>
																											</span>
																										</label>
																									</div>	
																								</div>
																								<div class="row">
																									<div class="col-lg-12">
																										<label class="m-option m-option m-option--plain">
																											<span class="m-option__control">
																												<span class="m-radio m-radio--brand m-radio--check-bold">
																													<input type="radio" name="m_option_1" value="1">
																													<span></span>
																												</span>
																											</span>
																											<span class="m-option__label">
																												<span class="m-option__head">
																													<span class="m-option__title">
																														Level 5
																													</span>
																												</span>
																												<span class="m-option__body">
																												Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan instansi.
																											</span>
																											</span>
																										</label>
																									</div>	
																								</div>
																							</div>	

																								<div class="m-portlet__body">
																									<div class="row">
																										<div class="col-lg-6">	 
																											<h5>
																												<span>Penjelasan</span>
																											</h5>
																										</div>	
																										<div class="col-lg-6">	 
																											<h5>
																												<span>Dokumen Pendukung</span>
																											</h5>
																										</div>	
																									</div>
																								</div>

																						<div class="m-portlet__body">
																							<div class="row">
																								<div class="col-xl-6">
																									<div class="form-grup">
																										<textarea class="form-control" placeholder="Enter Here"></textarea>
																									</div>	
																								</div>
																								<div class="col-xl-6"> 
																									<div class="custom-file">
																									<input type="file" class="custom-file-input" id="customFile">
																									<label class="custom-file-label" for="customFile">Choose file</label>
																								</div>
																							</div>
																						</div>

																						</div>
																					</div>
																					<!--end::Portlet-->

																			</div>
																		</div>
																	</div>
																	<!--end: Form Wizard Step 2-->

																	<!--begin: Form Wizard Step 3-->
																	<div class="m-wizard__form-step tab-pane" id="m_wizard_form_step_3">
																		<div class="row">
																			<div class="col-xl-12  f-penilaian">
																				<!--begin::Portlet-->
																				<div class="tab-content  m--padding-15" style="margin-top: -4%;margin-bottom: -2%;">
																						<div class="m-form__section m-form__section--first">
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Domain 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal SPBE</span>
																								</div>
																							</div>
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Aspek 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal Tata Kelola SPBE</span>
																								</div>
																							</div>
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Indikator 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal Tata Pengarah SPBE Instansi Pemerintah</span>
																								</div>
																							</div>
																						</div>
																					</div>
																				<!--end::Portlet-->
																				
																				<!--begin::Portlet-->
																				<div class="m-portlet m-portlet--creative m-portlet--bordered-semi">
																				<div class="m-portlet__head">
																				<div class="m-portlet__head-caption">
																					<div class="m-portlet__head-title">
																						<span class="m-portlet__head-icon m--hide">
																							<i class="flaticon-statistics"></i>
																						</span>
																						<h2 class="m-portlet__head-text">
																						Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait rencana induk SPBE?
																						</h2>
																						<h2 class="m-portlet__head-label m-portlet__head-label--primary">
																							<span>Pertanyaan</span>
																						</h2>
																					</div>
																					</div>
																					</div>

																					<div class="m-portlet__body">
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 0
																										</span>
																									</span>
																									<span class="m-option__body">
																									Tidak terdapat kebijakan internal terkait rencana induk SPBE. 
																									</span>
																								</span>
																							</label>
																						</div>
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 1
																										</span>
																									</span>
																									<span class="m-option__body">
																									Terdapat konsep kebijakan internal terkait rencana induk SPBE.
																									</span>
																								</span>
																							</label>
																						</div>	
																						</div>
																						<div class="row">
																					<div class="col-lg-12">
																						<label class="m-option m-option m-option--plain">
																							<span class="m-option__control">
																								<span class="m-radio m-radio--brand m-radio--check-bold">
																									<input type="radio" name="m_option_1" value="1">
																									<span></span>
																								</span>
																							</span>
																							<span class="m-option__label">
																								<span class="m-option__head">
																									<span class="m-option__title">
																										Level 2
																									</span>
																								</span>
																								<span class="m-option__body">
																								Kebijakan internal telah ditetapkan dan mendukung pengaturan rencana induk SPBE  yang mencakup hanya sebagian dari muatan rencana induk SPBE yaitu visi dan misi SPBE, arsitektur SPBE, atau peta jalan SPBE.
																							</span>
																							</span>
																						</label>
																					</div>	
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 3
																										</span>
																									</span>
																									<span class="m-option__body">
																									Kebijakan internal telah mendukung pengaturan rencana induk SPBE yang mencakup seluruh  muatan rencana induk SPBE yaitu visi dan misi SPBE, arsitektur SPBE, dan peta jalan SPBE.
																								</span>
																								</span>
																							</label>
																						</div>	
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 4
																										</span>
																									</span>
																									<span class="m-option__body">
																									Kebijakan internal telah mendukung pengaturan rencana induk SPBE yang mencakup integrasi SPBE antar Instansi Pusat, antar Pemerintah Daerah, dan/atau antar Instansi Pusat dan Pemerintah Daerah.
																								</span>
																								</span>
																							</label>
																						</div>	
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 5
																										</span>
																									</span>
																									<span class="m-option__body">
																									Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan Instansi Pusat/Pemerintah Daerah.
																								</span>
																								</span>
																							</label>
																						</div>	
																					</div>
																				</div>

																						<div class="m-portlet__body">
																								<div class="row">
																									<div class="col-lg-6">	 
																									<h5>
																										<span>Penjelasan</span>
																									</h5>
																									</div>	
																									<div class="col-lg-6">	 
																									<h5>
																										<span>Dokumen Pendukung</span>
																									</h5>
																									</div>	
																								</div>
																						</div>

																						<div class="m-portlet__body">
																						<div class="row">
																						<div class="col-xl-6">
																							<div class="form-grup">
																								<textarea class="form-control" placeholder="Enter Here"></textarea>
																							</div>	
																						</div>
																						<div class="col-xl-6"> 
																							<div class="custom-file">
																							<input type="file" class="custom-file-input" id="customFile">
																							<label class="custom-file-label" for="customFile">Choose file</label>
																							</div>
																						</div>
																						</div>
																					</div>
																				</div>			
																			</div>	
																		</div>
																	</div>
																	<!--end: Form Wizard Step 3-->

																	<!--begin: Form Wizard Step 4-->
																	<div class="m-wizard__form-step tab-pane" id="m_wizard_form_step_4">
																		<div class="row">
																		
																			<div class="col-xl-12 f-penilaian">
																				<!--begin::Portlet-->
																				<div class="tab-content  m--padding-15" style="margin-top: -4%;margin-bottom: -2%;">
																						<div class="m-form__section m-form__section--first">
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Domain 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal SPBE</span>
																								</div>
																							</div>
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Aspek 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal Tata Kelola SPBE</span>
																								</div>
																							</div>
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Indikator 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal Tata Pengarah SPBE Instansi Pemerintah</span>
																								</div>
																							</div>
																						</div>
																					</div>
																				<!--end::Portlet-->
																			
																				<!--begin::Portlet-->
																				<div class="m-portlet m-portlet--creative m-portlet--bordered-semi">
																				<div class="m-portlet__head">
																				<div class="m-portlet__head-caption">
																					<div class="m-portlet__head-title">
																						<span class="m-portlet__head-icon m--hide">
																							<i class="flaticon-statistics"></i>
																						</span>
																						<h2 class="m-portlet__head-text">
																						Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait perencanaan dan penganggaran TIK?
																						</h2>
																						<h2 class="m-portlet__head-label m-portlet__head-label--primary">
																							<span>Pertanyaan</span>
																						</h2>
																					</div>
																				</div>
																				</div>

																				<div class="m-portlet__body">
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 0
																										</span>
																									</span>
																									<span class="m-option__body">
																									Tidak terdapat kebijakan internal terkait perencanaan dan penganggaran TIK di Instansi Pusat/Pemerintah Daerah Saudara.
																									</span>
																								</span>
																							</label>
																						</div>
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 1
																										</span>
																									</span>
																									<span class="m-option__body">
																									Terdapat konsep kebijakan internal terkait perencanaan dan penganggaran TIK di Instansi Pusat/Pemerintah Daerah Saudara.
																									</span>
																								</span>
																							</label>
																						</div>	
																						</div>
																						<div class="row">
																					<div class="col-lg-12">
																						<label class="m-option m-option m-option--plain">
																							<span class="m-option__control">
																								<span class="m-radio m-radio--brand m-radio--check-bold">
																									<input type="radio" name="m_option_1" value="1">
																									<span></span>
																								</span>
																							</span>
																							<span class="m-option__label">
																								<span class="m-option__head">
																									<span class="m-option__title">
																										Level 2
																									</span>
																								</span>
																								<span class="m-option__body">
																								Kebijakan internal telah ditetapkan dan mendukung pengaturan perencanaan dan penganggaran TIK  yang menyelaraskan dengan sebagian muatan dari rencana induk SPBE.
																							</span>
																							</span>
																						</label>
																					</div>	
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 3
																										</span>
																									</span>
																									<span class="m-option__body">
																									Kebijakan internal telah mendukung pengaturan perencanaan dan penganggaran TIK yang menyelaraskan dengan seluruh muatan dari rencana induk SPBE.
																								</span>
																								</span>
																							</label>
																						</div>	
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 4
																										</span>
																									</span>
																									<span class="m-option__body">
																									Kebijakan internal telah mendukung pengaturan perencanaan dan penganggaran TIK yang mencakup integrasi SPBE antar Instansi Pusat, antar Pemerintah Daerah, dan/atau antar Instansi Pusat dan Pemerintah Daerah.
																								</span>
																								</span>
																							</label>
																						</div>	
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 5
																										</span>
																									</span>
																									<span class="m-option__body">
																									Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan Instansi Pusat/Pemerintah Daerah.
																									</span>
																								</span>
																							</label>
																						</div>	
																					</div>
																						</div>
																						<div class="m-portlet__body">
																								<div class="row">
																									<div class="col-lg-6">	 
																									<h5>
																										<span>Penjelasan</span>
																									</h5>
																									</div>	
																									<div class="col-lg-6">	 
																									<h5>
																										<span>Dokumen Pendukung</span>
																									</h5>
																									</div>	
																								</div>
																						</div>

																					<div class="m-portlet__body">
																						<div class="row">
																						<div class="col-xl-6">
																							<div class="form-grup">
																								<textarea class="form-control" placeholder="Enter Here"></textarea>
																							</div>	
																						</div>
																						<div class="col-xl-6"> 
																							<div class="custom-file">
																							<input type="file" class="custom-file-input" id="customFile">
																							<label class="custom-file-label" for="customFile">Choose file</label>
																							</div>
																						</div>
																						</div>
																					</div>
																				</div>
																				</div>
																		</div>
																	</div>
																	<!--end: Form Wizard Step 4-->

																	<!--begin: Form Wizard Step 5-->
																	<div class="m-wizard__form-step tab-pane" id="m_wizard_form_step_5">
																		<div class="row">
																		<div class="col-xl-12  f-penilaian">
																				<!--begin::Portlet-->
																				<div class="tab-content  m--padding-15" style="margin-top: -4%;margin-bottom: -2%;">
																						<div class="m-form__section m-form__section--first">
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Domain 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal SPBE</span>
																								</div>
																							</div>
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Aspek 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal Tata Kelola SPBE</span>
																								</div>
																							</div>
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Indikator 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal Tata Pengarah SPBE Instansi Pemerintah</span>
																								</div>
																							</div>
																						</div>
																					</div>
																				<!--end::Portlet-->

																				<!--begin::Portlet-->
																				<div class="m-portlet m-portlet--creative m-portlet--bordered-semi">
																				<div class="m-portlet__head">
																				<div class="m-portlet__head-caption">
																					<div class="m-portlet__head-title">
																						<span class="m-portlet__head-icon m--hide">
																							<i class="flaticon-statistics"></i>
																						</span>
																						<h2 class="m-portlet__head-text">
																						Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait pengoperasian pusat data (data center)?
																						</h2>
																						<h2 class="m-portlet__head-label m-portlet__head-label--primary">
																							<span>Pertanyaan</span>
																						</h2>
																					</div>
																				</div>
																				</div>
																				<div class="m-portlet__body">
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 0
																										</span>
																									</span>
																									<span class="m-option__body">
																									Tidak terdapat kebijakan internal terkait pengoperasian pusat data di Instansi Pusat/Pemerintah Daerah Saudara.
																									</span>
																								</span>
																							</label>
																						</div>
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 1
																										</span>
																									</span>
																									<span class="m-option__body">
																									Terdapat konsep kebijakan internal terkait pengoperasian pusat data di Instansi Pusat/Pemerintah Daerah Saudara.
																									</span>
																								</span>
																							</label>
																						</div>	
																						</div>
																						<div class="row">
																					<div class="col-lg-12">
																						<label class="m-option m-option m-option--plain">
																							<span class="m-option__control">
																								<span class="m-radio m-radio--brand m-radio--check-bold">
																									<input type="radio" name="m_option_1" value="1">
																									<span></span>
																								</span>
																							</span>
																							<span class="m-option__label">
																								<span class="m-option__head">
																									<span class="m-option__title">
																										Level 2
																									</span>
																								</span>
																								<span class="m-option__body">
																								Kebijakan internal telah ditetapkan dan mendukung pengaturan pengoperasian pusat data bagi sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah Saudara.
																							</span>
																							</span>
																						</label>
																					</div>	
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 3
																										</span>
																									</span>
																									<span class="m-option__body">
																									Kebijakan internal mendukung pengaturan pengoperasian pusat data bagi semua unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah Saudara.
																								</span>
																								</span>
																							</label>
																						</div>	
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 4
																										</span>
																									</span>
																									<span class="m-option__body">
																									Kebijakan  internal mendukung pengaturan pengoperasian pusat data untuk melaksanakan  integrasi  pusat  data dengan pusat data milik Instansi Pusat/Pemerintah Daerah lain atau  untuk rencana  transisi penggunaan pusat data nasional.
																								</span>
																								</span>
																							</label>
																						</div>	
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 5
																										</span>
																									</span>
																									<span class="m-option__body">
																									Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan instansi.
																								</span>
																								</span>
																							</label>
																						</div>	
																					</div>
																					</div>
																					<div class="m-portlet__body">
																								<div class="row">
																									<div class="col-lg-6">	 
																									<h5>
																										<span>Penjelasan</span>
																									</h5>
																									</div>	
																									<div class="col-lg-6">	 
																									<h5>
																										<span>Dokumen Pendukung</span>
																									</h5>
																									</div>	
																								</div>
																						</div>

																					<div class="m-portlet__body">
																						<div class="row">
																						<div class="col-xl-6">
																							<div class="form-grup">
																								<textarea class="form-control" placeholder="Enter Here"></textarea>
																							</div>	
																						</div>
																						<div class="col-xl-6"> 
																							<div class="custom-file">
																							<input type="file" class="custom-file-input" id="customFile">
																							<label class="custom-file-label" for="customFile">Choose file</label>
																							</div>
																						</div>
																						</div>
																					</div>	
																					</div>
																			</div>
																		</div>
																	</div>
																	<!--end: Form Wizard Step 5-->

																		
																</div>
																
																<!-- end from tab content -->
															</div>

															<!--end: Form Body -->
															<!--begin: Form Actions --> 
															<div class="m-portlet__foot m-portlet__foot--fit">
																			<div class="m-form__actions m-form__actions">
																				<div class="row">
																					
																					<div class="col-lg-8 m--align-left">
																						<button class="btn btn-success m-btn m-btn--custom m-btn--icon" data-wizard-action="prev">
																							<span>
																								<i class="la la-arrow-left"></i>&nbsp;&nbsp;
																								<span>Kembali</span>
																							</span>
																						</button>
																					</div>
																					<div class="col-lg-4 m--align-right">
																						<button class="btn btn-success m-btn m-btn--custom m-btn--icon" data-wizard-action="submit">
																							<span>
																								<i class="la la-check"></i>&nbsp;&nbsp;
																								<span>Simpan</span>
																							</span>
																						</button>
																						<button class="btn btn-success m-btn m-btn--custom m-btn--icon" data-wizard-action="next">
																							<span>
																								<span>Selanjutnya</span>&nbsp;&nbsp;
																								<i class="la la-arrow-right"></i>
																							</span>
																						</button>
																					</div>
																					
																				</div>
																			</div>
																		</div>
															
															
														</form>

													</div>
													<!--end: Form Wizard Form-->

												</div>
												<!--end: Form Wizard-->
											</div>
											<div class="tab-pane active show" id="m_tabs_1_2" role="tabpanel">
												<!--begin: Form Wizard-->
												<div class="m-wizard m-wizard--2 m-wizard--success" id="m_wizard2">

													<!--begin: Message container -->
													<div class="m-portlet__padding-x m--margin-top-20 m--margin-right-20">

														<div class="row pilihan-step" style="height:10px ">
															<label for="exampleSelect1">Pilihan Step</label>	
															<div class="col-md-3">
																<div class="form-group m-form__group" style="height:10px">
																
																	<select class="form-control m-input form-control-sm" id="exampleSelect1">
																		<option>Step 1</option>
																		<option>Step 2</option>
																		<option>Step 3</option>
																		<option>Step 4</option>
																		<option>Step 5</option>
																	</select>
																</div>
															</div>
														</div>

													</div>
													<!--end: Message container -->

													<!--begin: Form Wizard Head -->
													<div class="m-wizard__head m-portlet__padding-x m--margin-bottom-20">
																						
														<div class="m-wizard__progress">
															<div class="progress">
																<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
															</div>
														</div>

														<!--begin: Form Wizard Nav -->
														
															<div class="m-wizard__nav">
																<div class="m-wizard__steps">
																	<div class="m-wizard__step m-wizard__step--current" m-wizard-target="m_wizard_form_step_6">
																		<a class="m-wizard__step-number m-tabs__link active" href="#m_wizard_form_step_6">
																			<span><span>1</span></span>
																		</a>
																		<div class="m-wizard__step-info">
																		<div class="m-wizard__step-title">
																			Step
																		</div>	
																</div>
																	</div>
																	
																	<div class="m-wizard__step m-wizard__step--current" m-wizard-target="m_wizard_form_step_7">
																		<a class="m-wizard__step-number m-tabs__link"  href="#m_wizard_form_step_7">
																			<span><span>2</span></span>
																		</a>
																		<div class="m-wizard__step-info">
																		<div class="m-wizard__step-title">
																			Step
																		</div>
																	</div>
																	</div>
																	<div class="m-wizard__step m-wizard__step--current" m-wizard-target="m_wizard_form_step_8">
																		<a class="m-wizard__step-number m-tabs__link" href="#m_wizard_form_step_8">
																		<span><span>3</span></span>
																		</a>
																		<div class="m-wizard__step-info">
																		<div class="m-wizard__step-title">
																			Step
																			
																		</div>	
																	</div>
																	</div>	
																	<div class="m-wizard__step m-wizard__step--current" m-wizard-target="m_wizard_form_step_9">
																		<a class="m-wizard__step-number m-tabs__link"  href="#m_wizard_form_step_9">
																		<span><span>4</span></span>
																		</a>
																		<div class="m-wizard__step-info">
																		<div class="m-wizard__step-title">
																			Step
																		</div>	
																	</div>
																	</div>
																	<div class="m-wizard__step m-wizard__step--current" m-wizard-target="m_wizard_form_step_10">
																		<a class="m-wizard__step-number m-tabs__link"  href="#m_wizard_form_step_10">
																		<span><span>5</span></span>
																		</a>	
																		<div class="m-wizard__step-info">
																		<div class="m-wizard__step-title">
																			Step
																		</div>
																		</div>
																	</div>

															</div>
														</div>
														<!--end: Form Wizard Nav -->
													</div>
													<!--end: Form Wizard Head -->

													<!--begin: Form Wizard Form-->
													<div class="m-wizard__form">

														<form class="m-form m-form--label-align-left- m-form--state-" id="m_form2">

															<!--begin: Form Body -->
															<div class="m-portlet__body" >
																<div class="tab-content">

																	<!--begin: Form Wizard Step 1-->
																	<div class="m-wizard__form-step tab-pane" id="m_wizard_form_step_6">
																		<div class="row" >
																			<div class="col-xl-12 f-penilaian" >

																				<!--begin::Portlet-->
																				<div class="tab-content  m--padding-15" style="margin-top: -4%;margin-bottom: -2%;">
																						<div class="m-form__section m-form__section--first">
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Domain 2</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal SPBE</span>
																								</div>
																							</div>
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Aspek 2</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal Tata Kelola SPBE</span>
																								</div>
																							</div>
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Indikator 2</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal Tata Pengarah SPBE Instansi Pemerintah</span>
																								</div>
																							</div>
																						</div>
																					</div>
																				<!--end::Portlet-->

																				<!--begin::Portlet-->
																				<div class="m-portlet m-portlet--creative m-portlet--bordered-semi">
																					<div class="m-portlet__head">
																					<div class="m-portlet__head-caption">
																						<div class="m-portlet__head-title">
																							<span class="m-portlet__head-icon m--hide">
																								<i class="flaticon-statistics"></i>
																							</span>
																							<h2 class="m-portlet__head-text">
																								Apakah Instansi Saudara memiliki kebijakan internal terkait Tim Pengarah SPBE/TIK/?
																							</h2>
																							<h2 class="m-portlet__head-label m-portlet__head-label--primary">
																								<span>Pertanyaan</span>
																							</h2>
																						</div>
																					</div>
																					</div>
																					
																					<div class="m-portlet__body">
																						<div class="row">
																							<div class="col-lg-12">
																								<label class="m-option m-option m-option--plain">
																									<span class="m-option__control">
																										<span class="m-radio m-radio--brand m-radio--check-bold">
																											<input type="radio" name="m_option_1" value="1">
																											<span></span>
																										</span>
																									</span>
																									<span class="m-option__label">
																										<span class="m-option__head">
																											<span class="m-option__title">
																												Level 0
																											</span>
																										</span>
																										<span class="m-option__body">
																										Tidak terdapat kebijakan internal terkait Tim Pengarah SPBE.
																										</span>
																									</span>
																								</label>
																							</div>
																						</div>
																						<div class="row">
																							<div class="col-lg-12">
																								<label class="m-option m-option m-option--plain">
																									<span class="m-option__control">
																										<span class="m-radio m-radio--brand m-radio--check-bold">
																											<input type="radio" name="m_option_1" value="1">
																											<span></span>
																										</span>
																									</span>
																									<span class="m-option__label">
																										<span class="m-option__head">
																											<span class="m-option__title">
																												Level 1
																											</span>
																										</span>
																										<span class="m-option__body">
																											Terdapat konsep kebijakan internal terkait Tim Pengarah SPBE.
																										</span>
																									</span>
																								</label>
																							</div>	
																						</div>
																						<div class="row">
																							<div class="col-lg-12">
																								<label class="m-option m-option m-option--plain">
																									<span class="m-option__control">
																										<span class="m-radio m-radio--brand m-radio--check-bold">
																											<input type="radio" name="m_option_1" value="1">
																											<span></span>
																										</span>
																									</span>
																									<span class="m-option__label">
																										<span class="m-option__head">
																											<span class="m-option__title">
																												Level 2
																											</span>
																										</span>
																										<span class="m-option__body">
																										Kebijakan internal telah ditetapkan dan mencakup pengaturan tugas-tugas Tim Pengarah SPBE yang mendukung penerapan SPBE  pada sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.
																										</span>
																									</span>
																								</label>
																							</div>	
																						</div>
																						<div class="row">
																							<div class="col-lg-12">
																								<label class="m-option m-option m-option--plain">
																									<span class="m-option__control">
																										<span class="m-radio m-radio--brand m-radio--check-bold">
																											<input type="radio" name="m_option_1" value="1">
																											<span></span>
																										</span>
																									</span>
																									<span class="m-option__label">
																										<span class="m-option__head">
																											<span class="m-option__title">
																												Level 3
																											</span>
																										</span>
																										<span class="m-option__body">
																										Kebijakan internal mencakup pengaturan tugas-tugas Tim Pengarah SPBE yang mendukung penerapan SPBE pada semua unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.
																										</span>
																									</span>
																								</label>
																							</div>	
																						</div>
																						<div class="row">
																							<div class="col-lg-12">
																								<label class="m-option m-option m-option--plain">
																									<span class="m-option__control">
																										<span class="m-radio m-radio--brand m-radio--check-bold">
																											<input type="radio" name="m_option_1" value="1">
																											<span></span>
																										</span>
																									</span>
																									<span class="m-option__label">
																										<span class="m-option__head">
																											<span class="m-option__title">
																												Level 4
																											</span>
																										</span>
																										<span class="m-option__body">
																										Kebijakan internal mencakup pengaturan tugas-tugas Tim Pengarah SPBE yang mendukung penerapan SPBE antar Instansi Pusat, antar Pemerintah Daerah, atau antar Instansi Pusat dan Pemerintah Daerah.
																										</span>
																									</span>
																								</label>
																							</div>	
																						</div>
																						<div class="row">
																							<div class="col-lg-12">
																								<label class="m-option m-option m-option--plain">
																									<span class="m-option__control">
																										<span class="m-radio m-radio--brand m-radio--check-bold">
																											<input type="radio" name="m_option_1" value="1">
																											<span></span>
																										</span>
																									</span>
																									<span class="m-option__label">
																										<span class="m-option__head">
																											<span class="m-option__title">
																												Level 5
																											</span>
																										</span>
																										<span class="m-option__body">
																										Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan instansi.
																										</span>
																									</span>
																								</label>
																							</div>	
																						</div>
																					</div>	


																						<div class="m-portlet__body">
																								<div class="row">
																									<div class="col-lg-6">	 
																									<h5>
																										<span>Keterangan</span>
																									</h5>
																									</div>	
																									<div class="col-lg-6">	 
																									<h5>
																										<span>Dokumen Pendukung</span>
																									</h5>
																									</div>	
																								</div>
																						</div>

																					<div class="m-portlet__body">
																						<div class="row">
																							<div class="col-xl-6">
																								<div class="form-grup">
																									<textarea class="form-control" placeholder="Enter Here"></textarea>
																								</div>	
																							</div>
																							<div class="col-xl-6"> 
																								<div class="custom-file">
																								<input type="file" class="custom-file-input" id="customFile">
																								<label class="custom-file-label" for="customFile">Choose file</label>
																							</div>
																						</div>
																					</div>
																				</div>
																				<!--end::Portlet-->
																				
																				</div>
																			</div>
																		</div>
																	</div>

																	<!--end: Form Wizard Step 1-->

																	<!--begin: Form Wizard Step 2-->
																	<div class="m-wizard__form-step tab-pane" id="m_wizard_form_step_7">
																		<div class="row">
																			<div class="col-xl-12  f-penilaian">
																					<!--begin::Portlet-->
																					<div class="tab-content  m--padding-15" style="margin-top: -4%;margin-bottom: -2%;">
																						<div class="m-form__section m-form__section--first">
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Domain 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal SPBE</span>
																								</div>
																							</div>
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Aspek 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal Tata Kelola SPBE</span>
																								</div>
																							</div>
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Indikator 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal Tata Pengarah SPBE Instansi Pemerintah</span>
																								</div>
																							</div>
																						</div>
																					</div>
																					<!--end::Portlet-->

																					<!--begin::Portlet-->
																					<div class="m-portlet m-portlet--creative m-portlet--bordered-semi">
																						<div class="m-portlet__head">
																						<div class="m-portlet__head-caption">
																							<div class="m-portlet__head-title">
																								<span class="m-portlet__head-icon m--hide">
																									<i class="flaticon-statistics"></i>
																								</span>
																								<h2 class="m-portlet__head-text">
																								Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait proses bisnis (alur kerja) terintegrasi?
																								</h2>
																								<h2 class="m-portlet__head-label m-portlet__head-label--primary">
																									<span>Pertanyaan</span>
																								</h2>
																							</div>
																						</div>
																						</div>
																						
																							<div class="m-portlet__body">
																								<div class="row">
																									<div class="col-lg-12">
																										<label class="m-option m-option m-option--plain">
																											<span class="m-option__control">
																												<span class="m-radio m-radio--brand m-radio--check-bold">
																													<input type="radio" name="m_option_1" value="1">
																													<span></span>
																												</span>
																											</span>
																											<span class="m-option__label">
																												<span class="m-option__head">
																													<span class="m-option__title">
																														Level 0
																													</span>
																												</span>
																												<span class="m-option__body">
																												Tidak terdapat kebijakan internal terkait standardisasi proses bisnis.
																												</span>
																											</span>
																										</label>
																									</div>
																								</div>
																								<div class="row">
																									<div class="col-lg-12">
																										<label class="m-option m-option m-option--plain">
																											<span class="m-option__control">
																												<span class="m-radio m-radio--brand m-radio--check-bold">
																													<input type="radio" name="m_option_1" value="1">
																													<span></span>
																												</span>
																											</span>
																											<span class="m-option__label">
																												<span class="m-option__head">
																													<span class="m-option__title">
																														Level 1
																													</span>
																												</span>
																												<span class="m-option__body">
																												Terdapat konsep kebijakan internal terkait standardisasi penyusunan proses bisnis.
																												</span>
																											</span>
																										</label>
																									</div>	
																								</div>
																								<div class="row">
																									<div class="col-lg-12">
																									<label class="m-option m-option m-option--plain">
																										<span class="m-option__control">
																											<span class="m-radio m-radio--brand m-radio--check-bold">
																												<input type="radio" name="m_option_1" value="1">
																												<span></span>
																											</span>
																										</span>
																										<span class="m-option__label">
																											<span class="m-option__head">
																												<span class="m-option__title">
																													Level 2
																												</span>
																											</span>
																											<span class="m-option__body">
																											Kebijakan internal telah ditetapkan dan mendukung standardisasi penyusunan proses bisnis.
																										</span>
																										</span>
																									</label>
																									</div>	
																								</div>
																								<div class="row">
																									<div class="col-lg-12">
																										<label class="m-option m-option m-option--plain">
																											<span class="m-option__control">
																												<span class="m-radio m-radio--brand m-radio--check-bold">
																													<input type="radio" name="m_option_1" value="1">
																													<span></span>
																												</span>
																											</span>
																											<span class="m-option__label">
																												<span class="m-option__head">
																													<span class="m-option__title">
																														Level 3
																													</span>
																												</span>
																												<span class="m-option__body">
																												Kebijakan internal telah mendukung integrasi proses bisnis di dalam Instansi Pusat/Pemerintah Daerah Saudara.
																											</span>
																											</span>
																										</label>
																									</div>	
																								</div>
																								<div class="row">
																									<div class="col-lg-12">
																										<label class="m-option m-option m-option--plain">
																											<span class="m-option__control">
																												<span class="m-radio m-radio--brand m-radio--check-bold">
																													<input type="radio" name="m_option_1" value="1">
																													<span></span>
																												</span>
																											</span>
																											<span class="m-option__label">
																												<span class="m-option__head">
																													<span class="m-option__title">
																														Level 4
																													</span>
																												</span>
																												<span class="m-option__body">
																												Kebijakan telah mendukung integrasi proses bisnis antar Instansi Pusat, antar Pemerintah Daerah, dan/atau antar Instansi Pusat dan Pemerintah Daerah.
																											</span>
																											</span>
																										</label>
																									</div>	
																								</div>
																								<div class="row">
																									<div class="col-lg-12">
																										<label class="m-option m-option m-option--plain">
																											<span class="m-option__control">
																												<span class="m-radio m-radio--brand m-radio--check-bold">
																													<input type="radio" name="m_option_1" value="1">
																													<span></span>
																												</span>
																											</span>
																											<span class="m-option__label">
																												<span class="m-option__head">
																													<span class="m-option__title">
																														Level 5
																													</span>
																												</span>
																												<span class="m-option__body">
																												Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan instansi.
																											</span>
																											</span>
																										</label>
																									</div>	
																								</div>
																							</div>	

																								<div class="m-portlet__body">
																									<div class="row">
																										<div class="col-lg-6">	 
																											<h5>
																												<span>Keterangan</span>
																											</h5>
																										</div>	
																										<div class="col-lg-6">	 
																											<h5>
																												<span>Dokumen Pendukung</span>
																											</h5>
																										</div>	
																									</div>
																								</div>

																						<div class="m-portlet__body">
																							<div class="row">
																								<div class="col-xl-6">
																									<div class="form-grup">
																										<textarea class="form-control" placeholder="Enter Here"></textarea>
																									</div>	
																								</div>
																								<div class="col-xl-6"> 
																									<div class="custom-file">
																									<input type="file" class="custom-file-input" id="customFile">
																									<label class="custom-file-label" for="customFile">Choose file</label>
																								</div>
																							</div>
																						</div>

																						</div>
																					</div>
																					<!--end::Portlet-->

																			</div>
																		</div>
																	</div>
																	<!--end: Form Wizard Step 2-->

																	<!--begin: Form Wizard Step 3-->
																	<div class="m-wizard__form-step tab-pane" id="m_wizard_form_step_8">
																		<div class="row">
																			<div class="col-xl-12  f-penilaian">
																				<!--begin::Portlet-->
																				<div class="tab-content  m--padding-15" style="margin-top: -4%;margin-bottom: -2%;">
																						<div class="m-form__section m-form__section--first">
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Domain 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal SPBE</span>
																								</div>
																							</div>
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Aspek 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal Tata Kelola SPBE</span>
																								</div>
																							</div>
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Indikator 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal Tata Pengarah SPBE Instansi Pemerintah</span>
																								</div>
																							</div>
																						</div>
																					</div>
																				<!--end::Portlet-->
																				
																				<!--begin::Portlet-->
																				<div class="m-portlet m-portlet--creative m-portlet--bordered-semi">
																				<div class="m-portlet__head">
																				<div class="m-portlet__head-caption">
																					<div class="m-portlet__head-title">
																						<span class="m-portlet__head-icon m--hide">
																							<i class="flaticon-statistics"></i>
																						</span>
																						<h2 class="m-portlet__head-text">
																						Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait rencana induk SPBE?
																						</h2>
																						<h2 class="m-portlet__head-label m-portlet__head-label--primary">
																							<span>Pertanyaan</span>
																						</h2>
																					</div>
																					</div>
																					</div>

																					<div class="m-portlet__body">
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 0
																										</span>
																									</span>
																									<span class="m-option__body">
																									Tidak terdapat kebijakan internal terkait rencana induk SPBE. 
																									</span>
																								</span>
																							</label>
																						</div>
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 1
																										</span>
																									</span>
																									<span class="m-option__body">
																									Terdapat konsep kebijakan internal terkait rencana induk SPBE.
																									</span>
																								</span>
																							</label>
																						</div>	
																						</div>
																						<div class="row">
																					<div class="col-lg-12">
																						<label class="m-option m-option m-option--plain">
																							<span class="m-option__control">
																								<span class="m-radio m-radio--brand m-radio--check-bold">
																									<input type="radio" name="m_option_1" value="1">
																									<span></span>
																								</span>
																							</span>
																							<span class="m-option__label">
																								<span class="m-option__head">
																									<span class="m-option__title">
																										Level 2
																									</span>
																								</span>
																								<span class="m-option__body">
																								Kebijakan internal telah ditetapkan dan mendukung pengaturan rencana induk SPBE  yang mencakup hanya sebagian dari muatan rencana induk SPBE yaitu visi dan misi SPBE, arsitektur SPBE, atau peta jalan SPBE.
																							</span>
																							</span>
																						</label>
																					</div>	
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 3
																										</span>
																									</span>
																									<span class="m-option__body">
																									Kebijakan internal telah mendukung pengaturan rencana induk SPBE yang mencakup seluruh  muatan rencana induk SPBE yaitu visi dan misi SPBE, arsitektur SPBE, dan peta jalan SPBE.
																								</span>
																								</span>
																							</label>
																						</div>	
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 4
																										</span>
																									</span>
																									<span class="m-option__body">
																									Kebijakan internal telah mendukung pengaturan rencana induk SPBE yang mencakup integrasi SPBE antar Instansi Pusat, antar Pemerintah Daerah, dan/atau antar Instansi Pusat dan Pemerintah Daerah.
																								</span>
																								</span>
																							</label>
																						</div>	
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 5
																										</span>
																									</span>
																									<span class="m-option__body">
																									Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan Instansi Pusat/Pemerintah Daerah.
																								</span>
																								</span>
																							</label>
																						</div>	
																					</div>
																				</div>

																						<div class="m-portlet__body">
																								<div class="row">
																									<div class="col-lg-6">	 
																									<h5>
																										<span>Keterangan</span>
																									</h5>
																									</div>	
																									<div class="col-lg-6">	 
																									<h5>
																										<span>Dokumen Pendukung</span>
																									</h5>
																									</div>	
																								</div>
																						</div>

																						<div class="m-portlet__body">
																						<div class="row">
																						<div class="col-xl-6">
																							<div class="form-grup">
																								<textarea class="form-control" placeholder="Enter Here"></textarea>
																							</div>	
																						</div>
																						<div class="col-xl-6"> 
																							<div class="custom-file">
																							<input type="file" class="custom-file-input" id="customFile">
																							<label class="custom-file-label" for="customFile">Choose file</label>
																							</div>
																						</div>
																						</div>
																					</div>
																				</div>			
																			</div>	
																		</div>
																	</div>
																	<!--end: Form Wizard Step 3-->

																	<!--begin: Form Wizard Step 4-->
																	<div class="m-wizard__form-step tab-pane" id="m_wizard_form_step_9">
																		<div class="row">
																		
																			<div class="col-xl-12 f-penilaian">
																				<!--begin::Portlet-->
																				<div class="tab-content  m--padding-15" style="margin-top: -4%;margin-bottom: -2%;">
																						<div class="m-form__section m-form__section--first">
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Domain 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal SPBE</span>
																								</div>
																							</div>
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Aspek 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal Tata Kelola SPBE</span>
																								</div>
																							</div>
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Indikator 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal Tata Pengarah SPBE Instansi Pemerintah</span>
																								</div>
																							</div>
																						</div>
																					</div>
																				<!--end::Portlet-->
																			
																				<!--begin::Portlet-->
																				<div class="m-portlet m-portlet--creative m-portlet--bordered-semi">
																				<div class="m-portlet__head">
																				<div class="m-portlet__head-caption">
																					<div class="m-portlet__head-title">
																						<span class="m-portlet__head-icon m--hide">
																							<i class="flaticon-statistics"></i>
																						</span>
																						<h2 class="m-portlet__head-text">
																						Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait perencanaan dan penganggaran TIK?
																						</h2>
																						<h2 class="m-portlet__head-label m-portlet__head-label--primary">
																							<span>Pertanyaan</span>
																						</h2>
																					</div>
																				</div>
																				</div>

																				<div class="m-portlet__body">
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 0
																										</span>
																									</span>
																									<span class="m-option__body">
																									Tidak terdapat kebijakan internal terkait perencanaan dan penganggaran TIK di Instansi Pusat/Pemerintah Daerah Saudara.
																									</span>
																								</span>
																							</label>
																						</div>
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 1
																										</span>
																									</span>
																									<span class="m-option__body">
																									Terdapat konsep kebijakan internal terkait perencanaan dan penganggaran TIK di Instansi Pusat/Pemerintah Daerah Saudara.
																									</span>
																								</span>
																							</label>
																						</div>	
																						</div>
																						<div class="row">
																					<div class="col-lg-12">
																						<label class="m-option m-option m-option--plain">
																							<span class="m-option__control">
																								<span class="m-radio m-radio--brand m-radio--check-bold">
																									<input type="radio" name="m_option_1" value="1">
																									<span></span>
																								</span>
																							</span>
																							<span class="m-option__label">
																								<span class="m-option__head">
																									<span class="m-option__title">
																										Level 2
																									</span>
																								</span>
																								<span class="m-option__body">
																								Kebijakan internal telah ditetapkan dan mendukung pengaturan perencanaan dan penganggaran TIK  yang menyelaraskan dengan sebagian muatan dari rencana induk SPBE.
																							</span>
																							</span>
																						</label>
																					</div>	
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 3
																										</span>
																									</span>
																									<span class="m-option__body">
																									Kebijakan internal telah mendukung pengaturan perencanaan dan penganggaran TIK yang menyelaraskan dengan seluruh muatan dari rencana induk SPBE.
																								</span>
																								</span>
																							</label>
																						</div>	
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 4
																										</span>
																									</span>
																									<span class="m-option__body">
																									Kebijakan internal telah mendukung pengaturan perencanaan dan penganggaran TIK yang mencakup integrasi SPBE antar Instansi Pusat, antar Pemerintah Daerah, dan/atau antar Instansi Pusat dan Pemerintah Daerah.
																								</span>
																								</span>
																							</label>
																						</div>	
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 5
																										</span>
																									</span>
																									<span class="m-option__body">
																									Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan Instansi Pusat/Pemerintah Daerah.
																									</span>
																								</span>
																							</label>
																						</div>	
																					</div>
																						</div>
																						<div class="m-portlet__body">
																								<div class="row">
																									<div class="col-lg-6">	 
																									<h5>
																										<span>Keterangan</span>
																									</h5>
																									</div>	
																									<div class="col-lg-6">	 
																									<h5>
																										<span>Dokumen Pendukung</span>
																									</h5>
																									</div>	
																								</div>
																						</div>

																					<div class="m-portlet__body">
																						<div class="row">
																						<div class="col-xl-6">
																							<div class="form-grup">
																								<textarea class="form-control" placeholder="Enter Here"></textarea>
																							</div>	
																						</div>
																						<div class="col-xl-6"> 
																							<div class="custom-file">
																							<input type="file" class="custom-file-input" id="customFile">
																							<label class="custom-file-label" for="customFile">Choose file</label>
																							</div>
																						</div>
																						</div>
																					</div>
																				</div>
																				</div>
																		</div>
																	</div>
																	<!--end: Form Wizard Step 4-->

																	<!--begin: Form Wizard Step 5-->
																	<div class="m-wizard__form-step tab-pane" id="m_wizard_form_step_10">
																		<div class="row">
																		<div class="col-xl-12  f-penilaian">
																				<!--begin::Portlet-->
																				<div class="tab-content  m--padding-15" style="margin-top: -4%;margin-bottom: -2%;">
																						<div class="m-form__section m-form__section--first">
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Domain 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal SPBE</span>
																								</div>
																							</div>
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Aspek 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal Tata Kelola SPBE</span>
																								</div>
																							</div>
																							<div class="form-group m-form__group m-form__group--sm row">
																								<label class="col-xl-2 col-lg-2 col-form-label">Indikator 1</label>
																								<div class="col-xl-10 col-lg-10">
																									<span class="m-form__control-static">: Kebijakan Internal Tata Pengarah SPBE Instansi Pemerintah</span>
																								</div>
																							</div>
																						</div>
																					</div>
																				<!--end::Portlet-->

																				<!--begin::Portlet-->
																				<div class="m-portlet m-portlet--creative m-portlet--bordered-semi">
																				<div class="m-portlet__head">
																				<div class="m-portlet__head-caption">
																					<div class="m-portlet__head-title">
																						<span class="m-portlet__head-icon m--hide">
																							<i class="flaticon-statistics"></i>
																						</span>
																						<h2 class="m-portlet__head-text">
																						Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait pengoperasian pusat data (data center)?
																						</h2>
																						<h2 class="m-portlet__head-label m-portlet__head-label--primary">
																							<span>Pertanyaan</span>
																						</h2>
																					</div>
																				</div>
																				</div>
																				<div class="m-portlet__body">
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 0
																										</span>
																									</span>
																									<span class="m-option__body">
																									Tidak terdapat kebijakan internal terkait pengoperasian pusat data di Instansi Pusat/Pemerintah Daerah Saudara.
																									</span>
																								</span>
																							</label>
																						</div>
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 1
																										</span>
																									</span>
																									<span class="m-option__body">
																									Terdapat konsep kebijakan internal terkait pengoperasian pusat data di Instansi Pusat/Pemerintah Daerah Saudara.
																									</span>
																								</span>
																							</label>
																						</div>	
																						</div>
																						<div class="row">
																					<div class="col-lg-12">
																						<label class="m-option m-option m-option--plain">
																							<span class="m-option__control">
																								<span class="m-radio m-radio--brand m-radio--check-bold">
																									<input type="radio" name="m_option_1" value="1">
																									<span></span>
																								</span>
																							</span>
																							<span class="m-option__label">
																								<span class="m-option__head">
																									<span class="m-option__title">
																										Level 2
																									</span>
																								</span>
																								<span class="m-option__body">
																								Kebijakan internal telah ditetapkan dan mendukung pengaturan pengoperasian pusat data bagi sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah Saudara.
																							</span>
																							</span>
																						</label>
																					</div>	
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 3
																										</span>
																									</span>
																									<span class="m-option__body">
																									Kebijakan internal mendukung pengaturan pengoperasian pusat data bagi semua unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah Saudara.
																								</span>
																								</span>
																							</label>
																						</div>	
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 4
																										</span>
																									</span>
																									<span class="m-option__body">
																									Kebijakan  internal mendukung pengaturan pengoperasian pusat data untuk melaksanakan  integrasi  pusat  data dengan pusat data milik Instansi Pusat/Pemerintah Daerah lain atau  untuk rencana  transisi penggunaan pusat data nasional.
																								</span>
																								</span>
																							</label>
																						</div>	
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 5
																										</span>
																									</span>
																									<span class="m-option__body">
																									Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan instansi.
																								</span>
																								</span>
																							</label>
																						</div>	
																					</div>
																					</div>
																					<div class="m-portlet__body">
																								<div class="row">
																									<div class="col-lg-6">	 
																									<h5>
																										<span>Keterangan</span>
																									</h5>
																									</div>	
																									<div class="col-lg-6">	 
																									<h5>
																										<span>Dokumen Pendukung</span>
																									</h5>
																									</div>	
																								</div>
																						</div>

																					<div class="m-portlet__body">
																						<div class="row">
																						<div class="col-xl-6">
																							<div class="form-grup">
																								<textarea class="form-control" placeholder="Enter Here"></textarea>
																							</div>	
																						</div>
																						<div class="col-xl-6"> 
																							<div class="custom-file">
																							<input type="file" class="custom-file-input" id="customFile">
																							<label class="custom-file-label" for="customFile">Choose file</label>
																							</div>
																						</div>
																						</div>
																					</div>	
																					</div>
																			</div>
																		</div>
																	</div>
																	<!--end: Form Wizard Step 5-->
																
																</div>
																<!-- end from tab content -->
															</div>

															<!--end: Form Body -->

															<!--begin: Form Actions --> 
															<div class="m-portlet__foot m-portlet__foot--fit">
																<div class="m-form__actions m-form__actions">
																	<div class="row">
																		
																		<div class="col-lg-8 m--align-left">
																			<button class="btn btn-success m-btn m-btn--custom m-btn--icon" data-wizard-action="prev">
																				<span>
																					<i class="la la-arrow-left"></i>&nbsp;&nbsp;
																					<span>Kembali</span>
																				</span>
																			</button>
																		</div>
																		<div class="col-lg-4 m--align-right">
																			<button class="btn btn-success m-btn m-btn--custom m-btn--icon" data-wizard-action="submit">
																				<span>
																					<i class="la la-check"></i>&nbsp;&nbsp;
																					<span>Simpan</span>
																				</span>
																			</button>
																			<button class="btn btn-success m-btn m-btn--custom m-btn--icon" data-wizard-action="next">
																				<span>
																					<span>Selanjutnya</span>&nbsp;&nbsp;
																					<i class="la la-arrow-right"></i>
																				</span>
																			</button>
																		</div>
																		
																	</div>
																</div>
															</div>
															
														</form>

													</div>

													<!--end: Form Wizard Form-->
												</div>
												<!--end: Form Wizard-->
											</div>
											<div class="tab-pane" id="m_tabs_1_3" role="tabpanel">
												<div class="m-wizard m-wizard--2 m-wizard--success" id="m_wizard3">

												<!--begin: Message container -->
												<div class="m-portlet__padding-x m--margin-top-20 m--margin-right-20">

													<!-- Here you can put a message or alert ;-->

												<div class="row pilihan-step" style="height:10px ">
													<label for="exampleSelect1">Pilihan Step</label>	
													<div class="col-md-3">
														<div class="form-group m-form__group" style="height:10px">
														
															<select class="form-control m-input form-control-sm" id="exampleSelect1">
																<option>Step 1</option>
																<option>Step 2</option>
																<option>Step 3</option>
																<option>Step 4</option>
																<option>Step 5</option>
															</select>
														</div>
													</div>
												</div>
												</div>
												<!--end: Message container -->

												<!--begin: Form Wizard Head -->
												<div class="m-wizard__head m-portlet__padding-x m--margin-bottom-20">
																					
													<div class="m-wizard__progress">
														<div class="progress">
															<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>

														</div>
														
													</div>

													<!--begin: Form Wizard Nav -->
													
														<div class="m-wizard__nav">
															<div class="m-wizard__steps">
																<div class="m-wizard__step m-wizard__step--current" m-wizard-target="m_wizard_form_step_1">
																	<a class="m-wizard__step-number m-tabs__link active" href="#m_wizard_form_step_1">
																		<span><span>1</span></span>
																	</a>
																	<div class="m-wizard__step-info">
																	<div class="m-wizard__step-title">
																		Step
																	</div>	
															</div>
																</div>
																
																<div class="m-wizard__step m-wizard__step--current" m-wizard-target="m_wizard_form_step_2">
																	<a class="m-wizard__step-number m-tabs__link"  href="#m_wizard_form_step_2">
																		<span><span>2</span></span>
																	</a>
																	<div class="m-wizard__step-info">
																	<div class="m-wizard__step-title">
																		Step
																	</div>
																</div>
																</div>
																<div class="m-wizard__step m-wizard__step--current" m-wizard-target="m_wizard_form_step_3">
																	<a class="m-wizard__step-number m-tabs__link" href="#m_wizard_form_step_3">
																	<span><span>3</span></span>
																	</a>
																	<div class="m-wizard__step-info">
																	<div class="m-wizard__step-title">
																		Step
																		
																	</div>	
																</div>
																</div>	
																<div class="m-wizard__step m-wizard__step--current" m-wizard-target="m_wizard_form_step_4">
																	<a class="m-wizard__step-number m-tabs__link"  href="#m_wizard_form_step_4">
																	<span><span>4</span></span>
																	</a>
																	<div class="m-wizard__step-info">
																	<div class="m-wizard__step-title">
																		Step
																	</div>	
																</div>
																</div>
																<div class="m-wizard__step m-wizard__step--current" m-wizard-target="m_wizard_form_step_5">
																	<a class="m-wizard__step-number m-tabs__link"  href="#m_wizard_form_step_5">
																	<span><span>5</span></span>
																	</a>	
																	<div class="m-wizard__step-info">
																	<div class="m-wizard__step-title">
																		Step
																	</div>
																	</div>
																</div>

														</div>
													</div>
													<!--end: Form Wizard Nav -->
												</div>
												<!--end: Form Wizard Head -->

												<!--begin: Form Wizard Form-->
												<div class="m-wizard__form">

													<form class="m-form m-form--label-align-left- m-form--state-" id="m_form">

														<!--begin: Form Body -->
														<div class="m-portlet__body" >
															<div class="tab-content">

																<!--begin: Form Wizard Step 1-->
																<div class="m-wizard__form-step tab-pane" id="m_wizard_form_step_1">
																	<div class="row" >
																		<div class="col-xl-12 f-penilaian" >

																			<!--begin::Portlet-->
																			<div class="tab-content  m--padding-15" style="margin-top: -4%;margin-bottom: -2%;">
																					<div class="m-form__section m-form__section--first">
																						<div class="form-group m-form__group m-form__group--sm row">
																							<label class="col-xl-2 col-lg-2 col-form-label">Domain 2</label>
																							<div class="col-xl-10 col-lg-10">
																								<span class="m-form__control-static">: Kebijakan Internal SPBE</span>
																							</div>
																						</div>
																						<div class="form-group m-form__group m-form__group--sm row">
																							<label class="col-xl-2 col-lg-2 col-form-label">Aspek 2</label>
																							<div class="col-xl-10 col-lg-10">
																								<span class="m-form__control-static">: Kebijakan Internal Tata Kelola SPBE</span>
																							</div>
																						</div>
																						<div class="form-group m-form__group m-form__group--sm row">
																							<label class="col-xl-2 col-lg-2 col-form-label">Indikator 2</label>
																							<div class="col-xl-10 col-lg-10">
																								<span class="m-form__control-static">: Kebijakan Internal Tata Pengarah SPBE Instansi Pemerintah</span>
																							</div>
																						</div>
																					</div>
																				</div>
																			<!--end::Portlet-->

																			<!--begin::Portlet-->
																			<div class="m-portlet m-portlet--creative m-portlet--bordered-semi">
																				<div class="m-portlet__head">
																				<div class="m-portlet__head-caption">
																					<div class="m-portlet__head-title">
																						<span class="m-portlet__head-icon m--hide">
																							<i class="flaticon-statistics"></i>
																						</span>
																						<h2 class="m-portlet__head-text">
																							Apakah Instansi Saudara memiliki kebijakan internal terkait Tim Pengarah SPBE/TIK/?
																						</h2>
																						<h2 class="m-portlet__head-label m-portlet__head-label--primary">
																							<span>Pertanyaan</span>
																						</h2>
																					</div>
																				</div>
																				</div>
																				
																				<div class="m-portlet__body">
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 0
																										</span>
																									</span>
																									<span class="m-option__body">
																									Tidak terdapat kebijakan internal terkait Tim Pengarah SPBE.
																									</span>
																								</span>
																							</label>
																						</div>
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 1
																										</span>
																									</span>
																									<span class="m-option__body">
																										Terdapat konsep kebijakan internal terkait Tim Pengarah SPBE.
																									</span>
																								</span>
																							</label>
																						</div>	
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 2
																										</span>
																									</span>
																									<span class="m-option__body">
																									Kebijakan internal telah ditetapkan dan mencakup pengaturan tugas-tugas Tim Pengarah SPBE yang mendukung penerapan SPBE  pada sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.
																									</span>
																								</span>
																							</label>
																						</div>	
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 3
																										</span>
																									</span>
																									<span class="m-option__body">
																									Kebijakan internal mencakup pengaturan tugas-tugas Tim Pengarah SPBE yang mendukung penerapan SPBE pada semua unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah.
																									</span>
																								</span>
																							</label>
																						</div>	
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 4
																										</span>
																									</span>
																									<span class="m-option__body">
																									Kebijakan internal mencakup pengaturan tugas-tugas Tim Pengarah SPBE yang mendukung penerapan SPBE antar Instansi Pusat, antar Pemerintah Daerah, atau antar Instansi Pusat dan Pemerintah Daerah.
																									</span>
																								</span>
																							</label>
																						</div>	
																					</div>
																					<div class="row">
																						<div class="col-lg-12">
																							<label class="m-option m-option m-option--plain">
																								<span class="m-option__control">
																									<span class="m-radio m-radio--brand m-radio--check-bold">
																										<input type="radio" name="m_option_1" value="1">
																										<span></span>
																									</span>
																								</span>
																								<span class="m-option__label">
																									<span class="m-option__head">
																										<span class="m-option__title">
																											Level 5
																										</span>
																									</span>
																									<span class="m-option__body">
																									Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan instansi.
																									</span>
																								</span>
																							</label>
																						</div>	
																					</div>
																				</div>	


																					<div class="m-portlet__body">
																							<div class="row">
																								<div class="col-lg-6">	 
																								<h5>
																									<span>Keterangan</span>
																								</h5>
																								</div>	
																								<div class="col-lg-6">	 
																								<h5>
																									<span>Dokumen Pendukung</span>
																								</h5>
																								</div>	
																							</div>
																					</div>

																				<div class="m-portlet__body">
																					<div class="row">
																						<div class="col-xl-6">
																							<div class="form-grup">
																								<textarea class="form-control" placeholder="Enter Here"></textarea>
																							</div>	
																						</div>
																						<div class="col-xl-6"> 
																							<div class="custom-file">
																							<input type="file" class="custom-file-input" id="customFile">
																							<label class="custom-file-label" for="customFile">Choose file</label>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!--end::Portlet-->
																			
																			</div>
																		</div>
																	</div>
																</div>

																<!--end: Form Wizard Step 1-->

																<!--begin: Form Wizard Step 2-->
																<div class="m-wizard__form-step tab-pane" id="m_wizard_form_step_2">
																	<div class="row">
																		<div class="col-xl-12  f-penilaian">
																				<!--begin::Portlet-->
																				<div class="tab-content  m--padding-15" style="margin-top: -4%;margin-bottom: -2%;">
																					<div class="m-form__section m-form__section--first">
																						<div class="form-group m-form__group m-form__group--sm row">
																							<label class="col-xl-2 col-lg-2 col-form-label">Domain 1</label>
																							<div class="col-xl-10 col-lg-10">
																								<span class="m-form__control-static">: Kebijakan Internal SPBE</span>
																							</div>
																						</div>
																						<div class="form-group m-form__group m-form__group--sm row">
																							<label class="col-xl-2 col-lg-2 col-form-label">Aspek 1</label>
																							<div class="col-xl-10 col-lg-10">
																								<span class="m-form__control-static">: Kebijakan Internal Tata Kelola SPBE</span>
																							</div>
																						</div>
																						<div class="form-group m-form__group m-form__group--sm row">
																							<label class="col-xl-2 col-lg-2 col-form-label">Indikator 1</label>
																							<div class="col-xl-10 col-lg-10">
																								<span class="m-form__control-static">: Kebijakan Internal Tata Pengarah SPBE Instansi Pemerintah</span>
																							</div>
																						</div>
																					</div>
																				</div>
																				<!--end::Portlet-->

																				<!--begin::Portlet-->
																				<div class="m-portlet m-portlet--creative m-portlet--bordered-semi">
																					<div class="m-portlet__head">
																					<div class="m-portlet__head-caption">
																						<div class="m-portlet__head-title">
																							<span class="m-portlet__head-icon m--hide">
																								<i class="flaticon-statistics"></i>
																							</span>
																							<h2 class="m-portlet__head-text">
																							Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait proses bisnis (alur kerja) terintegrasi?
																							</h2>
																							<h2 class="m-portlet__head-label m-portlet__head-label--primary">
																								<span>Pertanyaan</span>
																							</h2>
																						</div>
																					</div>
																					</div>
																					
																						<div class="m-portlet__body">
																							<div class="row">
																								<div class="col-lg-12">
																									<label class="m-option m-option m-option--plain">
																										<span class="m-option__control">
																											<span class="m-radio m-radio--brand m-radio--check-bold">
																												<input type="radio" name="m_option_1" value="1">
																												<span></span>
																											</span>
																										</span>
																										<span class="m-option__label">
																											<span class="m-option__head">
																												<span class="m-option__title">
																													Level 0
																												</span>
																											</span>
																											<span class="m-option__body">
																											Tidak terdapat kebijakan internal terkait standardisasi proses bisnis.
																											</span>
																										</span>
																									</label>
																								</div>
																							</div>
																							<div class="row">
																								<div class="col-lg-12">
																									<label class="m-option m-option m-option--plain">
																										<span class="m-option__control">
																											<span class="m-radio m-radio--brand m-radio--check-bold">
																												<input type="radio" name="m_option_1" value="1">
																												<span></span>
																											</span>
																										</span>
																										<span class="m-option__label">
																											<span class="m-option__head">
																												<span class="m-option__title">
																													Level 1
																												</span>
																											</span>
																											<span class="m-option__body">
																											Terdapat konsep kebijakan internal terkait standardisasi penyusunan proses bisnis.
																											</span>
																										</span>
																									</label>
																								</div>	
																							</div>
																							<div class="row">
																								<div class="col-lg-12">
																								<label class="m-option m-option m-option--plain">
																									<span class="m-option__control">
																										<span class="m-radio m-radio--brand m-radio--check-bold">
																											<input type="radio" name="m_option_1" value="1">
																											<span></span>
																										</span>
																									</span>
																									<span class="m-option__label">
																										<span class="m-option__head">
																											<span class="m-option__title">
																												Level 2
																											</span>
																										</span>
																										<span class="m-option__body">
																										Kebijakan internal telah ditetapkan dan mendukung standardisasi penyusunan proses bisnis.
																									</span>
																									</span>
																								</label>
																								</div>	
																							</div>
																							<div class="row">
																								<div class="col-lg-12">
																									<label class="m-option m-option m-option--plain">
																										<span class="m-option__control">
																											<span class="m-radio m-radio--brand m-radio--check-bold">
																												<input type="radio" name="m_option_1" value="1">
																												<span></span>
																											</span>
																										</span>
																										<span class="m-option__label">
																											<span class="m-option__head">
																												<span class="m-option__title">
																													Level 3
																												</span>
																											</span>
																											<span class="m-option__body">
																											Kebijakan internal telah mendukung integrasi proses bisnis di dalam Instansi Pusat/Pemerintah Daerah Saudara.
																										</span>
																										</span>
																									</label>
																								</div>	
																							</div>
																							<div class="row">
																								<div class="col-lg-12">
																									<label class="m-option m-option m-option--plain">
																										<span class="m-option__control">
																											<span class="m-radio m-radio--brand m-radio--check-bold">
																												<input type="radio" name="m_option_1" value="1">
																												<span></span>
																											</span>
																										</span>
																										<span class="m-option__label">
																											<span class="m-option__head">
																												<span class="m-option__title">
																													Level 4
																												</span>
																											</span>
																											<span class="m-option__body">
																											Kebijakan telah mendukung integrasi proses bisnis antar Instansi Pusat, antar Pemerintah Daerah, dan/atau antar Instansi Pusat dan Pemerintah Daerah.
																										</span>
																										</span>
																									</label>
																								</div>	
																							</div>
																							<div class="row">
																								<div class="col-lg-12">
																									<label class="m-option m-option m-option--plain">
																										<span class="m-option__control">
																											<span class="m-radio m-radio--brand m-radio--check-bold">
																												<input type="radio" name="m_option_1" value="1">
																												<span></span>
																											</span>
																										</span>
																										<span class="m-option__label">
																											<span class="m-option__head">
																												<span class="m-option__title">
																													Level 5
																												</span>
																											</span>
																											<span class="m-option__body">
																											Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan instansi.
																										</span>
																										</span>
																									</label>
																								</div>	
																							</div>
																						</div>	

																							<div class="m-portlet__body">
																								<div class="row">
																									<div class="col-lg-6">	 
																										<h5>
																											<span>Keterangan</span>
																										</h5>
																									</div>	
																									<div class="col-lg-6">	 
																										<h5>
																											<span>Dokumen Pendukung</span>
																										</h5>
																									</div>	
																								</div>
																							</div>

																					<div class="m-portlet__body">
																						<div class="row">
																							<div class="col-xl-6">
																								<div class="form-grup">
																									<textarea class="form-control" placeholder="Enter Here"></textarea>
																								</div>	
																							</div>
																							<div class="col-xl-6"> 
																								<div class="custom-file">
																								<input type="file" class="custom-file-input" id="customFile">
																								<label class="custom-file-label" for="customFile">Choose file</label>
																							</div>
																						</div>
																					</div>

																					</div>
																				</div>
																				<!--end::Portlet-->

																		</div>
																	</div>
																</div>
																<!--end: Form Wizard Step 2-->

																<!--begin: Form Wizard Step 3-->
																<div class="m-wizard__form-step tab-pane" id="m_wizard_form_step_3">
																	<div class="row">
																		<div class="col-xl-12  f-penilaian">
																			<!--begin::Portlet-->
																			<div class="tab-content  m--padding-15" style="margin-top: -4%;margin-bottom: -2%;">
																					<div class="m-form__section m-form__section--first">
																						<div class="form-group m-form__group m-form__group--sm row">
																							<label class="col-xl-2 col-lg-2 col-form-label">Domain 1</label>
																							<div class="col-xl-10 col-lg-10">
																								<span class="m-form__control-static">: Kebijakan Internal SPBE</span>
																							</div>
																						</div>
																						<div class="form-group m-form__group m-form__group--sm row">
																							<label class="col-xl-2 col-lg-2 col-form-label">Aspek 1</label>
																							<div class="col-xl-10 col-lg-10">
																								<span class="m-form__control-static">: Kebijakan Internal Tata Kelola SPBE</span>
																							</div>
																						</div>
																						<div class="form-group m-form__group m-form__group--sm row">
																							<label class="col-xl-2 col-lg-2 col-form-label">Indikator 1</label>
																							<div class="col-xl-10 col-lg-10">
																								<span class="m-form__control-static">: Kebijakan Internal Tata Pengarah SPBE Instansi Pemerintah</span>
																							</div>
																						</div>
																					</div>
																				</div>
																			<!--end::Portlet-->
																			
																			<!--begin::Portlet-->
																			<div class="m-portlet m-portlet--creative m-portlet--bordered-semi">
																			<div class="m-portlet__head">
																			<div class="m-portlet__head-caption">
																				<div class="m-portlet__head-title">
																					<span class="m-portlet__head-icon m--hide">
																						<i class="flaticon-statistics"></i>
																					</span>
																					<h2 class="m-portlet__head-text">
																					Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait rencana induk SPBE?
																					</h2>
																					<h2 class="m-portlet__head-label m-portlet__head-label--primary">
																						<span>Pertanyaan</span>
																					</h2>
																				</div>
																				</div>
																				</div>

																				<div class="m-portlet__body">
																				<div class="row">
																					<div class="col-lg-12">
																						<label class="m-option m-option m-option--plain">
																							<span class="m-option__control">
																								<span class="m-radio m-radio--brand m-radio--check-bold">
																									<input type="radio" name="m_option_1" value="1">
																									<span></span>
																								</span>
																							</span>
																							<span class="m-option__label">
																								<span class="m-option__head">
																									<span class="m-option__title">
																										Level 0
																									</span>
																								</span>
																								<span class="m-option__body">
																								Tidak terdapat kebijakan internal terkait rencana induk SPBE. 
																								</span>
																							</span>
																						</label>
																					</div>
																				</div>
																				<div class="row">
																					<div class="col-lg-12">
																						<label class="m-option m-option m-option--plain">
																							<span class="m-option__control">
																								<span class="m-radio m-radio--brand m-radio--check-bold">
																									<input type="radio" name="m_option_1" value="1">
																									<span></span>
																								</span>
																							</span>
																							<span class="m-option__label">
																								<span class="m-option__head">
																									<span class="m-option__title">
																										Level 1
																									</span>
																								</span>
																								<span class="m-option__body">
																								Terdapat konsep kebijakan internal terkait rencana induk SPBE.
																								</span>
																							</span>
																						</label>
																					</div>	
																					</div>
																					<div class="row">
																				<div class="col-lg-12">
																					<label class="m-option m-option m-option--plain">
																						<span class="m-option__control">
																							<span class="m-radio m-radio--brand m-radio--check-bold">
																								<input type="radio" name="m_option_1" value="1">
																								<span></span>
																							</span>
																						</span>
																						<span class="m-option__label">
																							<span class="m-option__head">
																								<span class="m-option__title">
																									Level 2
																								</span>
																							</span>
																							<span class="m-option__body">
																							Kebijakan internal telah ditetapkan dan mendukung pengaturan rencana induk SPBE  yang mencakup hanya sebagian dari muatan rencana induk SPBE yaitu visi dan misi SPBE, arsitektur SPBE, atau peta jalan SPBE.
																						</span>
																						</span>
																					</label>
																				</div>	
																				</div>
																				<div class="row">
																					<div class="col-lg-12">
																						<label class="m-option m-option m-option--plain">
																							<span class="m-option__control">
																								<span class="m-radio m-radio--brand m-radio--check-bold">
																									<input type="radio" name="m_option_1" value="1">
																									<span></span>
																								</span>
																							</span>
																							<span class="m-option__label">
																								<span class="m-option__head">
																									<span class="m-option__title">
																										Level 3
																									</span>
																								</span>
																								<span class="m-option__body">
																								Kebijakan internal telah mendukung pengaturan rencana induk SPBE yang mencakup seluruh  muatan rencana induk SPBE yaitu visi dan misi SPBE, arsitektur SPBE, dan peta jalan SPBE.
																							</span>
																							</span>
																						</label>
																					</div>	
																				</div>
																				<div class="row">
																					<div class="col-lg-12">
																						<label class="m-option m-option m-option--plain">
																							<span class="m-option__control">
																								<span class="m-radio m-radio--brand m-radio--check-bold">
																									<input type="radio" name="m_option_1" value="1">
																									<span></span>
																								</span>
																							</span>
																							<span class="m-option__label">
																								<span class="m-option__head">
																									<span class="m-option__title">
																										Level 4
																									</span>
																								</span>
																								<span class="m-option__body">
																								Kebijakan internal telah mendukung pengaturan rencana induk SPBE yang mencakup integrasi SPBE antar Instansi Pusat, antar Pemerintah Daerah, dan/atau antar Instansi Pusat dan Pemerintah Daerah.
																							</span>
																							</span>
																						</label>
																					</div>	
																				</div>
																				<div class="row">
																					<div class="col-lg-12">
																						<label class="m-option m-option m-option--plain">
																							<span class="m-option__control">
																								<span class="m-radio m-radio--brand m-radio--check-bold">
																									<input type="radio" name="m_option_1" value="1">
																									<span></span>
																								</span>
																							</span>
																							<span class="m-option__label">
																								<span class="m-option__head">
																									<span class="m-option__title">
																										Level 5
																									</span>
																								</span>
																								<span class="m-option__body">
																								Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan Instansi Pusat/Pemerintah Daerah.
																							</span>
																							</span>
																						</label>
																					</div>	
																				</div>
																			</div>

																					<div class="m-portlet__body">
																							<div class="row">
																								<div class="col-lg-6">	 
																								<h5>
																									<span>Keterangan</span>
																								</h5>
																								</div>	
																								<div class="col-lg-6">	 
																								<h5>
																									<span>Dokumen Pendukung</span>
																								</h5>
																								</div>	
																							</div>
																					</div>

																					<div class="m-portlet__body">
																					<div class="row">
																					<div class="col-xl-6">
																						<div class="form-grup">
																							<textarea class="form-control" placeholder="Enter Here"></textarea>
																						</div>	
																					</div>
																					<div class="col-xl-6"> 
																						<div class="custom-file">
																						<input type="file" class="custom-file-input" id="customFile">
																						<label class="custom-file-label" for="customFile">Choose file</label>
																						</div>
																					</div>
																					</div>
																				</div>
																			</div>			
																		</div>	
																	</div>
																</div>
																<!--end: Form Wizard Step 3-->

																<!--begin: Form Wizard Step 4-->
																<div class="m-wizard__form-step tab-pane" id="m_wizard_form_step_4">
																	<div class="row">
																	
																		<div class="col-xl-12 f-penilaian">
																			<!--begin::Portlet-->
																			<div class="tab-content  m--padding-15" style="margin-top: -4%;margin-bottom: -2%;">
																					<div class="m-form__section m-form__section--first">
																						<div class="form-group m-form__group m-form__group--sm row">
																							<label class="col-xl-2 col-lg-2 col-form-label">Domain 1</label>
																							<div class="col-xl-10 col-lg-10">
																								<span class="m-form__control-static">: Kebijakan Internal SPBE</span>
																							</div>
																						</div>
																						<div class="form-group m-form__group m-form__group--sm row">
																							<label class="col-xl-2 col-lg-2 col-form-label">Aspek 1</label>
																							<div class="col-xl-10 col-lg-10">
																								<span class="m-form__control-static">: Kebijakan Internal Tata Kelola SPBE</span>
																							</div>
																						</div>
																						<div class="form-group m-form__group m-form__group--sm row">
																							<label class="col-xl-2 col-lg-2 col-form-label">Indikator 1</label>
																							<div class="col-xl-10 col-lg-10">
																								<span class="m-form__control-static">: Kebijakan Internal Tata Pengarah SPBE Instansi Pemerintah</span>
																							</div>
																						</div>
																					</div>
																				</div>
																			<!--end::Portlet-->
																		
																			<!--begin::Portlet-->
																			<div class="m-portlet m-portlet--creative m-portlet--bordered-semi">
																			<div class="m-portlet__head">
																			<div class="m-portlet__head-caption">
																				<div class="m-portlet__head-title">
																					<span class="m-portlet__head-icon m--hide">
																						<i class="flaticon-statistics"></i>
																					</span>
																					<h2 class="m-portlet__head-text">
																					Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait perencanaan dan penganggaran TIK?
																					</h2>
																					<h2 class="m-portlet__head-label m-portlet__head-label--primary">
																						<span>Pertanyaan</span>
																					</h2>
																				</div>
																			</div>
																			</div>

																			<div class="m-portlet__body">
																				<div class="row">
																					<div class="col-lg-12">
																						<label class="m-option m-option m-option--plain">
																							<span class="m-option__control">
																								<span class="m-radio m-radio--brand m-radio--check-bold">
																									<input type="radio" name="m_option_1" value="1">
																									<span></span>
																								</span>
																							</span>
																							<span class="m-option__label">
																								<span class="m-option__head">
																									<span class="m-option__title">
																										Level 0
																									</span>
																								</span>
																								<span class="m-option__body">
																								Tidak terdapat kebijakan internal terkait perencanaan dan penganggaran TIK di Instansi Pusat/Pemerintah Daerah Saudara.
																								</span>
																							</span>
																						</label>
																					</div>
																				</div>
																				<div class="row">
																					<div class="col-lg-12">
																						<label class="m-option m-option m-option--plain">
																							<span class="m-option__control">
																								<span class="m-radio m-radio--brand m-radio--check-bold">
																									<input type="radio" name="m_option_1" value="1">
																									<span></span>
																								</span>
																							</span>
																							<span class="m-option__label">
																								<span class="m-option__head">
																									<span class="m-option__title">
																										Level 1
																									</span>
																								</span>
																								<span class="m-option__body">
																								Terdapat konsep kebijakan internal terkait perencanaan dan penganggaran TIK di Instansi Pusat/Pemerintah Daerah Saudara.
																								</span>
																							</span>
																						</label>
																					</div>	
																					</div>
																					<div class="row">
																				<div class="col-lg-12">
																					<label class="m-option m-option m-option--plain">
																						<span class="m-option__control">
																							<span class="m-radio m-radio--brand m-radio--check-bold">
																								<input type="radio" name="m_option_1" value="1">
																								<span></span>
																							</span>
																						</span>
																						<span class="m-option__label">
																							<span class="m-option__head">
																								<span class="m-option__title">
																									Level 2
																								</span>
																							</span>
																							<span class="m-option__body">
																							Kebijakan internal telah ditetapkan dan mendukung pengaturan perencanaan dan penganggaran TIK  yang menyelaraskan dengan sebagian muatan dari rencana induk SPBE.
																						</span>
																						</span>
																					</label>
																				</div>	
																				</div>
																				<div class="row">
																					<div class="col-lg-12">
																						<label class="m-option m-option m-option--plain">
																							<span class="m-option__control">
																								<span class="m-radio m-radio--brand m-radio--check-bold">
																									<input type="radio" name="m_option_1" value="1">
																									<span></span>
																								</span>
																							</span>
																							<span class="m-option__label">
																								<span class="m-option__head">
																									<span class="m-option__title">
																										Level 3
																									</span>
																								</span>
																								<span class="m-option__body">
																								Kebijakan internal telah mendukung pengaturan perencanaan dan penganggaran TIK yang menyelaraskan dengan seluruh muatan dari rencana induk SPBE.
																							</span>
																							</span>
																						</label>
																					</div>	
																				</div>
																				<div class="row">
																					<div class="col-lg-12">
																						<label class="m-option m-option m-option--plain">
																							<span class="m-option__control">
																								<span class="m-radio m-radio--brand m-radio--check-bold">
																									<input type="radio" name="m_option_1" value="1">
																									<span></span>
																								</span>
																							</span>
																							<span class="m-option__label">
																								<span class="m-option__head">
																									<span class="m-option__title">
																										Level 4
																									</span>
																								</span>
																								<span class="m-option__body">
																								Kebijakan internal telah mendukung pengaturan perencanaan dan penganggaran TIK yang mencakup integrasi SPBE antar Instansi Pusat, antar Pemerintah Daerah, dan/atau antar Instansi Pusat dan Pemerintah Daerah.
																							</span>
																							</span>
																						</label>
																					</div>	
																				</div>
																				<div class="row">
																					<div class="col-lg-12">
																						<label class="m-option m-option m-option--plain">
																							<span class="m-option__control">
																								<span class="m-radio m-radio--brand m-radio--check-bold">
																									<input type="radio" name="m_option_1" value="1">
																									<span></span>
																								</span>
																							</span>
																							<span class="m-option__label">
																								<span class="m-option__head">
																									<span class="m-option__title">
																										Level 5
																									</span>
																								</span>
																								<span class="m-option__body">
																								Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan Instansi Pusat/Pemerintah Daerah.
																								</span>
																							</span>
																						</label>
																					</div>	
																				</div>
																					</div>
																					<div class="m-portlet__body">
																							<div class="row">
																								<div class="col-lg-6">	 
																								<h5>
																									<span>Keterangan</span>
																								</h5>
																								</div>	
																								<div class="col-lg-6">	 
																								<h5>
																									<span>Dokumen Pendukung</span>
																								</h5>
																								</div>	
																							</div>
																					</div>

																				<div class="m-portlet__body">
																					<div class="row">
																					<div class="col-xl-6">
																						<div class="form-grup">
																							<textarea class="form-control" placeholder="Enter Here"></textarea>
																						</div>	
																					</div>
																					<div class="col-xl-6"> 
																						<div class="custom-file">
																						<input type="file" class="custom-file-input" id="customFile">
																						<label class="custom-file-label" for="customFile">Choose file</label>
																						</div>
																					</div>
																					</div>
																				</div>
																			</div>
																			</div>
																	</div>
																</div>
																<!--end: Form Wizard Step 4-->

																<!--begin: Form Wizard Step 5-->
																<div class="m-wizard__form-step tab-pane" id="m_wizard_form_step_5">
																	<div class="row">
																	<div class="col-xl-12  f-penilaian">
																			<!--begin::Portlet-->
																			<div class="tab-content  m--padding-15" style="margin-top: -4%;margin-bottom: -2%;">
																					<div class="m-form__section m-form__section--first">
																						<div class="form-group m-form__group m-form__group--sm row">
																							<label class="col-xl-2 col-lg-2 col-form-label">Domain 1</label>
																							<div class="col-xl-10 col-lg-10">
																								<span class="m-form__control-static">: Kebijakan Internal SPBE</span>
																							</div>
																						</div>
																						<div class="form-group m-form__group m-form__group--sm row">
																							<label class="col-xl-2 col-lg-2 col-form-label">Aspek 1</label>
																							<div class="col-xl-10 col-lg-10">
																								<span class="m-form__control-static">: Kebijakan Internal Tata Kelola SPBE</span>
																							</div>
																						</div>
																						<div class="form-group m-form__group m-form__group--sm row">
																							<label class="col-xl-2 col-lg-2 col-form-label">Indikator 1</label>
																							<div class="col-xl-10 col-lg-10">
																								<span class="m-form__control-static">: Kebijakan Internal Tata Pengarah SPBE Instansi Pemerintah</span>
																							</div>
																						</div>
																					</div>
																				</div>
																			<!--end::Portlet-->

																			<!--begin::Portlet-->
																			<div class="m-portlet m-portlet--creative m-portlet--bordered-semi">
																			<div class="m-portlet__head">
																			<div class="m-portlet__head-caption">
																				<div class="m-portlet__head-title">
																					<span class="m-portlet__head-icon m--hide">
																						<i class="flaticon-statistics"></i>
																					</span>
																					<h2 class="m-portlet__head-text">
																					Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait pengoperasian pusat data (data center)?
																					</h2>
																					<h2 class="m-portlet__head-label m-portlet__head-label--primary">
																						<span>Pertanyaan</span>
																					</h2>
																				</div>
																			</div>
																			</div>
																			<div class="m-portlet__body">
																				<div class="row">
																					<div class="col-lg-12">
																						<label class="m-option m-option m-option--plain">
																							<span class="m-option__control">
																								<span class="m-radio m-radio--brand m-radio--check-bold">
																									<input type="radio" name="m_option_1" value="1">
																									<span></span>
																								</span>
																							</span>
																							<span class="m-option__label">
																								<span class="m-option__head">
																									<span class="m-option__title">
																										Level 0
																									</span>
																								</span>
																								<span class="m-option__body">
																								Tidak terdapat kebijakan internal terkait pengoperasian pusat data di Instansi Pusat/Pemerintah Daerah Saudara.
																								</span>
																							</span>
																						</label>
																					</div>
																				</div>
																				<div class="row">
																					<div class="col-lg-12">
																						<label class="m-option m-option m-option--plain">
																							<span class="m-option__control">
																								<span class="m-radio m-radio--brand m-radio--check-bold">
																									<input type="radio" name="m_option_1" value="1">
																									<span></span>
																								</span>
																							</span>
																							<span class="m-option__label">
																								<span class="m-option__head">
																									<span class="m-option__title">
																										Level 1
																									</span>
																								</span>
																								<span class="m-option__body">
																								Terdapat konsep kebijakan internal terkait pengoperasian pusat data di Instansi Pusat/Pemerintah Daerah Saudara.
																								</span>
																							</span>
																						</label>
																					</div>	
																					</div>
																					<div class="row">
																				<div class="col-lg-12">
																					<label class="m-option m-option m-option--plain">
																						<span class="m-option__control">
																							<span class="m-radio m-radio--brand m-radio--check-bold">
																								<input type="radio" name="m_option_1" value="1">
																								<span></span>
																							</span>
																						</span>
																						<span class="m-option__label">
																							<span class="m-option__head">
																								<span class="m-option__title">
																									Level 2
																								</span>
																							</span>
																							<span class="m-option__body">
																							Kebijakan internal telah ditetapkan dan mendukung pengaturan pengoperasian pusat data bagi sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah Saudara.
																						</span>
																						</span>
																					</label>
																				</div>	
																				</div>
																				<div class="row">
																					<div class="col-lg-12">
																						<label class="m-option m-option m-option--plain">
																							<span class="m-option__control">
																								<span class="m-radio m-radio--brand m-radio--check-bold">
																									<input type="radio" name="m_option_1" value="1">
																									<span></span>
																								</span>
																							</span>
																							<span class="m-option__label">
																								<span class="m-option__head">
																									<span class="m-option__title">
																										Level 3
																									</span>
																								</span>
																								<span class="m-option__body">
																								Kebijakan internal mendukung pengaturan pengoperasian pusat data bagi semua unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah Saudara.
																							</span>
																							</span>
																						</label>
																					</div>	
																				</div>
																				<div class="row">
																					<div class="col-lg-12">
																						<label class="m-option m-option m-option--plain">
																							<span class="m-option__control">
																								<span class="m-radio m-radio--brand m-radio--check-bold">
																									<input type="radio" name="m_option_1" value="1">
																									<span></span>
																								</span>
																							</span>
																							<span class="m-option__label">
																								<span class="m-option__head">
																									<span class="m-option__title">
																										Level 4
																									</span>
																								</span>
																								<span class="m-option__body">
																								Kebijakan  internal mendukung pengaturan pengoperasian pusat data untuk melaksanakan  integrasi  pusat  data dengan pusat data milik Instansi Pusat/Pemerintah Daerah lain atau  untuk rencana  transisi penggunaan pusat data nasional.
																							</span>
																							</span>
																						</label>
																					</div>	
																				</div>
																				<div class="row">
																					<div class="col-lg-12">
																						<label class="m-option m-option m-option--plain">
																							<span class="m-option__control">
																								<span class="m-radio m-radio--brand m-radio--check-bold">
																									<input type="radio" name="m_option_1" value="1">
																									<span></span>
																								</span>
																							</span>
																							<span class="m-option__label">
																								<span class="m-option__head">
																									<span class="m-option__title">
																										Level 5
																									</span>
																								</span>
																								<span class="m-option__body">
																								Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan instansi.
																							</span>
																							</span>
																						</label>
																					</div>	
																				</div>
																				</div>
																				<div class="m-portlet__body">
																							<div class="row">
																								<div class="col-lg-6">	 
																								<h5>
																									<span>Keterangan</span>
																								</h5>
																								</div>	
																								<div class="col-lg-6">	 
																								<h5>
																									<span>Dokumen Pendukung</span>
																								</h5>
																								</div>	
																							</div>
																					</div>

																				<div class="m-portlet__body">
																					<div class="row">
																					<div class="col-xl-6">
																						<div class="form-grup">
																							<textarea class="form-control" placeholder="Enter Here"></textarea>
																						</div>	
																					</div>
																					<div class="col-xl-6"> 
																						<div class="custom-file">
																						<input type="file" class="custom-file-input" id="customFile">
																						<label class="custom-file-label" for="customFile">Choose file</label>
																						</div>
																					</div>
																					</div>
																				</div>	
																				</div>
																		</div>
																	</div>
																</div>
																<!--end: Form Wizard Step 5-->
															
															</div>
															<!-- end from tab content -->
														</div>

														<!--end: Form Body -->

														<!--begin: Form Actions --> 
														<div class="m-portlet__foot m-portlet__foot--fit">
															<div class="m-form__actions m-form__actions">
																<div class="row">
																	
																	<div class="col-lg-8 m--align-left">
																		<button class="btn btn-success m-btn m-btn--custom m-btn--icon" data-wizard-action="prev">
																			<span>
																				<i class="la la-arrow-left"></i>&nbsp;&nbsp;
																				<span>Kembali</span>
																			</span>
																		</button>
																	</div>
																	<div class="col-lg-4 m--align-right">
																		<button class="btn btn-success m-btn m-btn--custom m-btn--icon" data-wizard-action="submit">
																			<span>
																				<i class="la la-check"></i>&nbsp;&nbsp;
																				<span>Simpan</span>
																			</span>
																		</button>
																		<button class="btn btn-success m-btn m-btn--custom m-btn--icon" data-wizard-action="next">
																			<span>
																				<span>Selanjutnya</span>&nbsp;&nbsp;
																				<i class="la la-arrow-right"></i>
																			</span>
																		</button>
																	</div>
																	
																</div>
															</div>
														</div>
														
													</form>

												</div>

												<!--end: Form Wizard Form-->
												</div>

												<!--end: Form Wizard-->
											</div>
											<div class="tab-pane" id="m_tabs_1_4" role="tabpanel">
												Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
												specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
												industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
											</div>
											<div class="tab-pane" id="m_tabs_1_5" role="tabpanel">
												Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
												specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
												industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
											</div>
										</div>
									</div>
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