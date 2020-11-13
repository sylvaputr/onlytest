<?php $active = "penilaian"; ?>
<?php include '../layout/header.php'; ?>

<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

	<div class="m-grid__item m-grid__item--fluid m-wrapper">

		<!-- BEGIN: Subheader -->
		<div class="m-subheader ">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="m-subheader__title m-subheader__title--separator">Penilaian verson</h3>
					<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
						<li class="m-nav__item m-nav__item--home">
							<a href="#" class="m-nav__link m-nav__link--icon">
								<i class="m-nav__link-icon la la-home"></i>
							</a>
						</li>
						<li class="m-nav__separator">-</li>
						<li class="m-nav__item">
							<a href="" class="m-nav__link">
								<span class="m-nav__link-text">Kebijakan  Internal SPBE</span>
							</a>
						</li>
						<li class="m-nav__separator">-</li>
						<li class="m-nav__item">
							<a href="" class="m-nav__link">
								<span class="m-nav__link-text">Kebijakan Internal Tata Kelola SPBE</span>
							</a>
						</li>
					</ul>
				</div>
				<div>
					<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
						<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
							<i class="la la-plus m--hide"></i>
							<i class="la la-ellipsis-h"></i>
						</a>
						<div class="m-dropdown__wrapper">
							<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
							<div class="m-dropdown__inner">
								<div class="m-dropdown__body">
									<div class="m-dropdown__content">
										<ul class="m-nav">
											<li class="m-nav__section m-nav__section--first m--hide">
												<span class="m-nav__section-text">Quick Actions</span>
											</li>
											<li class="m-nav__item">
												<a href="" class="m-nav__link">
													<i class="m-nav__link-icon flaticon-share"></i>
													<span class="m-nav__link-text">Activity</span>
												</a>
											</li>
											<li class="m-nav__item">
												<a href="" class="m-nav__link">
													<i class="m-nav__link-icon flaticon-chat-1"></i>
													<span class="m-nav__link-text">Messages</span>
												</a>
											</li>
											<li class="m-nav__item">
												<a href="" class="m-nav__link">
													<i class="m-nav__link-icon flaticon-info"></i>
													<span class="m-nav__link-text">FAQ</span>
												</a>
											</li>
											<li class="m-nav__item">
												<a href="" class="m-nav__link">
													<i class="m-nav__link-icon flaticon-lifebuoy"></i>
													<span class="m-nav__link-text">Support</span>
												</a>
											</li>
											<li class="m-nav__separator m-nav__separator--fit">
											</li>
											<li class="m-nav__item">
												<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END: Subheader -->

		<div class="m-content">
			<div class="row">
				<div class="col-xl-12">

					<!--begin::Portlet-->
					<div class="m-portlet">
						<!--begin: Portlet Head-->
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<h3 class="m-portlet__head-text">
										Form Penilaian	
									</h3>
								</div>
							</div>
							<div class="m-portlet__head-tools">
								<ul class="m-portlet__nav">
									<li class="m-portlet__nav-item">
										<a href="#" data-toggle="m-tooltip" class="m-portlet__nav-link m-portlet__nav-link--icon" data-direction="left" data-width="auto" title="Get help with filling up this form">
											<i class="flaticon-info m--icon-font-size-lg3"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>

						<!--end: Portlet Head-->
						<div class="m-portlet__body">
							<div class="row">
								<div class="col-6">
									<table class="table m-table m-table--head-bg-primary">
										<thead>
											<tr>
												<th>#</th>
												<th>Domain</th>
												<th>Indeks</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Kebijakan</td>
												<td>2.65</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Tata Kelola</td>
												<td>2.86</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Layanan</td>
												<td>1.73</td>
											</tr>
										</tbody>
										<tfoot>
											<tr>
												<th colspan="2">Rata-rata</th>
												<th>2.20</td>
											</tr>
										</tfoot>
									</table>
								</div>
								<div class="col-6">
									<img src="../../assets/metronic/logo/chart.png">
								</div>
							</div>
						</div>
					</div>

					<!--end::Portlet-->
				</div>
			</div>
		</div>
		
	</div>
</div>
<!-- end:: Body -->

					
<?php include '../layout/footer.php'; ?>