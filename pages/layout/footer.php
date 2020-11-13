</div>

		<!-- end:: Page -->

		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>

		<!-- end::Scroll Top -->

		<!-- begin::Quick Nav -->
		<ul class="m-nav-sticky" style="margin-top: 30px;">
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
				<a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank"><i class="la la-cart-arrow-down"></i></a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
				<a href="https://keenthemes.com/metronic/documentation.html" target="_blank"><i class="la la-code-fork"></i></a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
				<a href="https://keenthemes.com/forums/forum/support/metronic5/" target="_blank"><i class="la la-life-ring"></i></a>
			</li>
		</ul>

		<!-- begin::Quick Nav -->

		<!--begin::Global Theme Bundle -->
		<script src="../../assets/metronic/js/vendors.bundle.js" type="text/javascript"></script>
		<script src="../../assets/metronic/js/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts -->
		<script src="../../assets/metronic/js/wizard.js" type="text/javascript"></script>
		<script src="../../assets/metronic/js/sweetalert2.js" type="text/javascript"></script>

		<script type="text/javascript">

			function EnableDisableTextBox() {
				var chkYes = document.getElementById("chkYes");
				var txtNilai = document.getElementById("txtNilai");
				var txtTunggal = document.getElementById("txtTunggal");
				txtNilai.disabled = chkYes.checked ? false : true;
				txtTunggal.disabled = chkYes.checked ? false : true;
				if (!txtTunggal.disabled && !txtNilai.disabled) {
					txtTunggal.focus();
					txtNilai.focus();
				}
			}

			function EnableDisableTextBox2() {
				var chkYes2 = document.getElementById("chkYes2");
				var txtNilai2 = document.getElementById("txtNilai2");
				var txtTunggal2 = document.getElementById("txtTunggal2");
				txtNilai2.disabled = chkYes2.checked ? false : true;
				txtTunggal2.disabled = chkYes2.checked ? false : true;
				if (!txtTunggal2.disabled && !txtNilai2.disabled) {
					txtTunggal2.focus();
					txtNilai2.focus();
				}
			}

		</script>

		<!--end::Page Scripts -->
		
		<!-- begin::Body -->
		<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

		<!-- begin::Footer -->
		<footer class="m-grid__item		m-footer ">
				<div class="m-container m-container--fluid m-container--full-height m-page__container">
					<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								Copyright &copy; 2017 <a href="https://keenthemes.com" class="m-link"></a>
							</span>
						</div>
						<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
							<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">About</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">Privacy</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">T&C</span>
									</a>
								</li>
								<li class="m-nav__item">
									<a href="#" class="m-nav__link">
										<span class="m-nav__link-text">Purchase</span>
									</a>
								</li>
								<li class="m-nav__item m-nav__item">
									<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
										<i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
			<!-- end::Footer -->
			</div>
	</body>

</html>