<script src="<?= base_url('assets/owl/owl.carousel.min.js'); ?>"></script>
<div class="owl-carousel container">
	<?php foreach ($content as $item) : ?>
	<div class="item">
		<div class="position-relative rounded-lg mb-3" style="height: 300px; overflow: hidden">
			<img src="<?= ($item["_embedded"]["wp:featuredmedia"][0]["source_url"]) ?? ($item["jetpack_featured_media_url"]); ?>"
				class="position-absolute h-100" style="width: auto !important; left: -50%; overflow: hidden" alt="">
		</div>
		<?php
			// if (isset($item["_embedded"]["wp:featuredmedia"][0]["source_url"])) {
			// 	echo ($item["_embedded"]["wp:featuredmedia"][0]["source_url"]);
			// } else {
			// 	echo $item["jetpack_featured_media_url"];
			// }
			?>
		<strong>
			<?= $item["title"]["rendered"]; ?>
		</strong>
	</div>
	<?php endforeach; ?>
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
			items: 4
		}
	}
})
</script>