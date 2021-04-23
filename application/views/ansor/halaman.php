<div class="container">
   <div class="row">
      <div class="col-md-9">
         <div class="title pb-3">
			<div class="space-navbar"></div>
			<div class="space-navbar"></div>
			<div class="container">
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="<?= base_url(); ?>">Beranda</a></li>
					<li class="breadcrumb-item active"><?= $content["judul_halaman"]; ?></li>
				</ul>	
				<h1 class="mb-3"><?= $content["judul_halaman"]; ?></h1>
			</div>
		</div>
		<div class="content container mt-3 mb-5">
			<?= $content["isi_halaman"]; ?>
		</div>
      </div>
		<div class="col-md-3">
         sde
		</div>
   </div>
</div>