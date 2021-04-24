<script src="<?= base_url('assets/owl/owl.carousel.min.js'); ?>"></script>
<section>
	<div class="owl-carousel container my-5">
		<?php foreach ($content as $item) : ?>
		<div class="item">
			<div class="position-relative rounded-lg mb-3" style="height: 300px; overflow: hidden">
				<img src="<?= ($item["_embedded"]["wp:featuredmedia"][0]["source_url"]) ?? ($item["jetpack_featured_media_url"]); ?>"
					class="position-absolute h-100"
					style="width: auto !important; left: 50%; overflow: hidden; transform:translateX(-50%)" alt="">
				<span class="badge badge-success position-absolute" style="left: 1em; top: 1em">
					BERITA
				</span>
			</div>
			<h6>
				<strong>
					<a href="<?= $item["link"]; ?>" class="text-dark">
						<?= $item["title"]["rendered"]; ?>
					</a>
				</strong>
			</h6>
			<p class="text-secondary">
				<strong>
					<?= $item["modified"]; ?>
				</strong>
			</p>
		</div>
		<?php endforeach; ?>
	</div>
</section>
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
			items: 4
		}
	}
})
</script>