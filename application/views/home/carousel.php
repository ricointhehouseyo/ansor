<div id="demo" class="carousel slide" data-ride="carousel" data-pause="hover">

	<ul class="carousel-indicators">
		<?php for ($i = 0; $i < count($carousel); $i++) : ?>
		<li data-target="#demo" data-slide-to="<?= $i; ?>" <?= ($i == 0) ? 'class="active"' : ''; ?>></li>
		<?php endfor; ?>
	</ul>

	<div class="carousel-inner">
		<?php $i = 0;
		foreach ($carousel as $image) : ?>
		<div class="carousel-item <?= ($i++ == 0) ? 'active' : ''; ?>">
			<img src="<?= base_url("assets/img/carousel/" . $image["image"]); ?>" width="1100" height="500">
			<div class="carousel-caption">
				<h2><?= $image["title"]; ?></h2>
				<p><?= $image["description"]; ?></p>
			</div>
		</div>
		<?php endforeach; ?>
	</div>

	<a class="carousel-control-prev" href="#demo" data-slide="prev">
		<span class="carousel-control-prev-icon"></span>
	</a>
	<a class="carousel-control-next" href="#demo" data-slide="next">
		<span class="carousel-control-next-icon"></span>
	</a>
</div>