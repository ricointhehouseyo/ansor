<nav class="navbar navbar-expand-lg fixed-top">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url(); ?>">
			<img src="<?= base_url(); ?>assets/img/logoansor.png" style="height: 30px;" />
			Web Resmi Gerakan Pemuda Ansor Jombang
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto"></ul>
			<ul class="navbar-nav">
				<li class="nav-item" id="home">
					<a class="nav-link" href="<?= base_url(); ?>">Beranda</a>
				</li>
				<li class="nav-item ml-2 dropdown" id="profile">
					<a class="nav-link dropdown-toggle caret-off" href="javascript:void(0)" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Profile
					</a>
					<ul class="dropdown-menu animate-menu slideIn-menu" aria-labelledby="navbarDropdownMenuLink">
						<li><a href="<?= base_url() ?>ansor/show_page/susunan-kepengurusan" class="dropdown-item"><b>Susunan Pengurus</b></a></li>
					</ul>
				</li>
				<li class="nav-item ml-2 dropdown" id="admissions">
					<a class="nav-link dropdown-toggle caret-off" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Banom & Lembaga
					</a>
					<ul class="dropdown-menu animate-menu slideIn-menu" aria-labelledby="navbarDropdownMenuLink">
						<li><a href="<?= base_url() ?>ansor/show_page/tentang-banser" class="dropdown-item"><b>Banser</b></a></li>
						<li class="dropdown-divider"></li>
						<li><a href="<?= base_url() ?>ansor/show_page/rijalul-ansor" class="dropdown-item"><b>Rijalul Ansor</b></a></li>
						<li class="dropdown-divider"></li>
					</ul>
				</li>
				<li class="nav-item ml-2" id="profile">
					<a class="nav-link " href="<?= base_url() ?>ansor/news">
						Berita
					</a>
				</li>
				<li class="nav-item ml-2" id="profile">
					<a class="nav-link " href="<?= base_url() ?>ansor/show_page/tentang-kami">
						Kontak Kami
					</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
<script>
	$(document).ready(function() {
		$("#<?= $selected; ?>").addClass("active");
	});
</script>