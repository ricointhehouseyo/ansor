<script src="<?= base_url('assets/owl/owl.carousel.min.js'); ?>"></script>
<div class="owl-carousel container-fluid">
	<div class="item bg-dark">
		<img src="<?= base_url('assets/img/carousel/aq6.1.png'); ?>" class="w-full" alt="">
	</div>
	<div class="item bg-dark">
		<img src="<?= base_url('assets/img/carousel/aq6.1.png'); ?>" class="w-full" alt="">
	</div>
	<div class="item bg-dark">
		<img src="<?= base_url('assets/img/carousel/aq6.1.png'); ?>" class="w-full" alt="">
	</div>
	<div class="item bg-dark">
		<img src="<?= base_url('assets/img/carousel/aq6.1.png'); ?>" class="w-full" alt="">
	</div>
</div>
<script>
$('.owl-carousel').owlCarousel({
	loop: true,
	margin: 10,
	center: true,
	dots: false,
	responsive: {
		0: {
			items: 1
		},
		600: {
			items: 2
		}
	}
})
</script>
<!-- <div style="height:50px;display:block">
</div>
<div id="demo" class="carousel slide" data-ride="carousel"  data-pause="hover" >
	
	<ul class="carousel-indicators" >
		<li data-target="#demo" data-slide-to="0" class="active" ></li>
		<li data-target="#demo" data-slide-to="1" ></li>
		<li data-target="#demo" data-slide-to="2" ></li>
	</ul>
	
	<div class="carousel-inner" >
		<div class="carousel-item active" >
			<img src="<?= base_url(); ?>assets/img/carousel/aq6.2.png" width="1100" height="500" >
			<div class="carousel-caption">
				<h2>Desain Visualisasi Aqobah 6</h2>
				<p>Foto desain visualisasi Aqobah 6 yang berada di Jombok, Ngoro, Jombang.</p>
			</div>
		</div>
		<div class="carousel-item" >
			<img src="<?= base_url(); ?>assets/img/carousel/pengurus.jpg" width="1100" height="500" >
			<div class="carousel-caption">
				<h2>Foto Gedung</h2>
				<p>Foto gedung asrama tampak depan</p>
			</div>
		</div>
		<div class="carousel-item" >
			<img src="<?= base_url(); ?>assets/img/carousel/logoansor.png" width="1100" height="500" >
			<div class="carousel-caption">
				<h2>Logo Ansor</h2>
				<p>Logo GP Ansor</p>
			</div>
		</div>
		<div class="carousel-item" >
			<img src="<?= base_url(); ?>assets/img/carousel/aq6.3.png" width="1100" height="500" >
			<div class="carousel-caption">
				<h2>Foto Gedung</h2>
				<p>Foto gedung asrama tampak serong</p>
			</div>
		</div>
	</div>
	
	<a class="carousel-control-prev" href="#demo" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#demo" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
</div> -->