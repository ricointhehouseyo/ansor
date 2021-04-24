<section class="my-5">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="row">
					<?php foreach ($content as $item) : ?>
					<div class="col-md-4 col-6">
						<div class="position-relative rounded-lg mb-3" style="height: 170px; overflow: hidden">
							<img src="<?= ($item["_embedded"]["wp:featuredmedia"][0]["source_url"]) ?? ($item["jetpack_featured_media_url"]); ?>"
								alt="" class="position-absolute h-100"
								style="overflow: hidden;width: auto !important; left: 50%; transform: translateX(-50%)">
							<span class="badge badge-success position-absolute"
								style="left: 1em; top: 1em">BERITA</span>

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
			</div>
			<div class="col-md-3">
				second side
			</div>
		</div>
	</div>
</section>