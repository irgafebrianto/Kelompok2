<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">

	<div class="sidebar-header">
		<div class="sidebar-title">
			Navigation
		</div>
		<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
			<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
		</div>
	</div>

	<div class="nano">
		<div class="nano-content">
			<nav id="menu" class="nav-main" role="navigation">
				<ul class="nav nav-main">
					<li class="nav-active">
						<a href="{{url('/admin/pegawai')}}">
							<i class="fa fa-user" aria-hidden="true"></i>
							<span>Dashboard Admin</span>
						</a>
					</li>
					<li class="disabled">
						<a href="{{url('/user/pegawai')}}">
							<i class="fa fa-user" aria-hidden="true"></i>
							<span>Dashboard User</span>
						</a>
					</li>
					<li class="nav-parent">
						<a>
							<i class="fa fa-columns" aria-hidden="true"></i>
							<span>Data</span>
						</a>
						<ul class="nav nav-children">
							<li>
								<a href="{{url('/admin/pegawai')}}">
									Pegawai
								</a>
							</li>
							<li>
								<a href="{{url('/admin/datakepegawaian')}}">
									Kepegawaian
								</a>
							</li>
							<li>
								<a href="{{url('/admin/dataanak')}}">
									Data Anak
								</a>
							</li>
							<li>
								<a href="{{url('/admin/kenaikanpangkat')}}">
									Kenaikan Pangkat
								</a>
							</li>
							<li>
								<a href="{{url('/admin/riwayatpendidikan')}}">
									Riwayat Pendidikan
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>

			<hr class="separator" />
		</div>

		<script>
			// Maintain Scroll Position
			if (typeof localStorage !== 'undefined') {
				if (localStorage.getItem('sidebar-left-position') !== null) {
					var initialPosition = localStorage.getItem('sidebar-left-position'),
							sidebarLeft = document.querySelector('#sidebar-left .nano-content');

					sidebarLeft.scrollTop = initialPosition;
				}
			}
		</script>

	</div>

</aside>
<!-- end: sidebar -->
