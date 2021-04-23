<div class="container-fluid bg-primary text-light p-5 mt-5">
	<div class="container">
		<h1>Our <b>Blog</b></h1>
	</div>
</div>
<div class="container mt-5 slideanim mb-5">
	<h2 class="mb-5 text-center"><u>Latest <b>News</b></u></h2>
	<div class="row">
		<?php foreach ($recent as $news) : ?>
		<div class="col-md-4 mb-3 col-12">
			<img src="<?= base_url("assets/img/blog/" . $news["thumbnail"]); ?>" class="mb-2 w-100" alt="" />
			<a href="<?= base_url("blog/read/" . $news["link"]); ?>">
				<h5><?= $news["title"]; ?></h5>
			</a>
			<p><?= substr($news["content"], 0, 50); ?> ...</p>
			<p class="detail-blog">
				<span class=" mr-2">
					<i class='fas fa-calendar-alt'></i> <?= date("D, d M Y ", $news["date_created"]); ?>
				</span> <span class="mr-2"><i class='fas fa-user-alt'></i>
					by <b><?= $news["creator"]; ?></b></span> <span class="mr-2">
			</p>
			<a href="<?= base_url("blog/read/" . $news["link"]); ?>" class="btn btn-primary float-right mt-3">Read
				More...</a>
		</div>
		<?php endforeach; ?>
	</div>
</div>
<div class="container-fluid mb-5 pb-5 pt-5 bg-light">
	<div class="container slideanim">
		<div class="row">
			<div class="col-md-6">
				<div class="container">
					<h2 class="mb-5 border-left"><b>Aqobah International</b> Office</h2>
					<div class="row mb-3">
						<?php foreach ($office as $ofc) : ?>
						<div class="col-md-6 col-6">
							<img src="<?= base_url("assets/img/blog/" . $ofc["thumbnail"]); ?>" class="mb-2 w-100"
								alt="<?= $ofc["title"]; ?>" />
							<a href="<?= base_url("blog/read/" . $news["link"]); ?>">
								<h5><?= $ofc["title"]; ?></h5>
							</a>
							<p><?= substr($ofc["content"], 0, 50); ?>...</p>
							<p class="detail-blog">
								<i class='fas fa-calendar-alt'></i> <?= date("d M Y ", $news["date_created"]); ?>
								<i class='fas fa-user-alt'></i> by
								<b><?= $ofc["creator"]; ?></b>
							</p>
							<a href="<?= base_url("blog/read/" . $ofc["link"]); ?>"
								class="btn btn-primary float-right mt-3">Read More...</a>
						</div>
						<?php endforeach; ?>
					</div>
					<a href="<?= base_url("blog/tag/office"); ?>">Show More Aqobah International Office Info...</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="container">
					<h2 class="mb-5 border-left">Activities</h2>
					<div class="row mb-3">
						<?php foreach ($activities as $activity) : ?>
						<div class="col-md-6 col-6">
							<img src="<?= base_url("assets/img/blog/" . $activity["thumbnail"]); ?>" class="mb-2 w-100"
								alt="<?= $activity["title"]; ?>" />
							<a href="<?= base_url("blog/read/" . $news["link"]); ?>">
								<h5><?= $activity["title"]; ?></h5>
							</a>
							<p><?= substr($activity["content"], 0, 50); ?>...</p>
							<p class="detail-blog">
								<i class='fas fa-calendar-alt'></i> <?= date("d M Y ", $news["date_created"]); ?><i
									class='fas fa-user-alt'></i> by
								<b><?= $activity["creator"]; ?></b>
							</p>
							<a href="<?= base_url("blog/read/" . $activity["link"]); ?>"
								class="btn btn-primary float-right mt-3">Read More...</a>
						</div>
						<?php endforeach; ?>
					</div>
					<a href="<?= base_url("blog/tag/activities"); ?>">Show More Activities...</a>
				</div>
			</div>
		</div>
	</div>
</div>