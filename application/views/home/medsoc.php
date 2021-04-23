<?php

//$curl = curl_init();
//curl_setopt ($curl, CURLOPT_URL, 'https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCDK69Bq8u45GMNOTmNeMg3Q&key=AIzaSyCoQzkfEmoRR5hv1dORTDUbTU7WSnT-bA8');
//curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
//curl_exec($curl);
//$result = curl_exec ($curl);
//curl_close($curl);

//$result = json_decode ($result, true);

$youtubeProfilePic = $result ['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName = $result ['items'][0]['snippet']['title'];
$subscriber = $result ['items'][0]['statistics']['subscriberCount'];

?>

<section class="social" id="social">
	<div class="container">
		<div class="row pt-5 mb-5">
			<div class="col text-center">
				<h2>social Media</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5">
				<div class="row">
					<div class="col-md-4">
					<img src="<?= $youtubeProfilePic; ?>" width="100" class="img-thumbnail">
					</div>
					<div class="col-md-8">
						<h5><?= $channelName; ?></h5>
						<p><?= $subscriber; ?> subscribers</p>
						<div class="g-ytsubscribe" data-channelid="UCDK69Bq8u45GMNOTmNeMg3Q" data-layout="default" data-count="default">
						</div>
					</div>
				</div>
			<div class="row mt-3 pb-4">
				<div class="col">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/VorvcNSXKns?rel=0" allowfullscreen></iframe>
				</div>
				</div>
			</div>
			
			</div>
			<div class="col-md-5">
				<div class="row">
					<div class="col-md-4">
						<img src="assets/img/instagram.png" width="100" class="img-thumbnail""		>				
					</div>
					<div class="col-md-8">
						<h5>Instagram Ansor Jombang</h5>
						<p>Follower</p>
					</div>
				</div>
				<div class="row mt-3 pb-4">
					<div class="col">
						<div class="ig-thumbnail">
							<img src="assets/img/instagram.png">							
						</div>
					</div>
				</div>
				<div class="row mt-3 pb-4">
					<div class="col">
						<div class="ig-thumbnail">
							<img src="assets/img/instagram.png">							
						</div>
					</div>
				</div>
				<div class="row mt-3 pb-4">
					<div class="col">
						<div class="ig-thumbnail">
							<img src="assets/img/instagram.png">							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


</section>
<script src="https://apis.google.com/js/platform.js"></script> <!--untuk tombol subscribe-->
