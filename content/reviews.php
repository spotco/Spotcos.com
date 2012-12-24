<style>
h2 {
	font-size: 25px;
}
.b {
	font-weight: bold;
}
.boximg {
	height: 400px;
	width: 300px;
	margin-top: 30px;
}
.ratingstar {
	width:30px;
	height:30px;
	float:left;
	margin:2px;
}
.ratingdesc {
	margin-left:10px;
}
.ratingtxt {
	float:left;
	font-weight: bold;
	margin-right: 10px;
}
p {
	font-size:15px;
	line-height: 17px;
}
h2 {
	line-height: 12px;
	margin-bottom:30px;
}
.row {
	margin-top:30px;
	margin-bottom: 30px;
}
</style>

<h1>Vidcon+Animu Reviews</h1>
<p>I play videocons and review them quickly (10 mins max).</p>
<hr/>

<?php
$jasontext = file_get_contents("content/reviews.json");
$jason = json_decode($jasontext);

foreach ($jason as $review) {
	?>
	<div class="row">
		<div class="span4">
			<img src="content/reviewimg/<?=$review->boximg?>" class="boximg"></img>
		</div>
		<div class="span8">
			<h2><?=$review->title?></h2>
			<?php
				foreach ($review->paragraphs as $parag) {
					?><p><?=$parag?></p><?php
				}
			?>
			<p>
				<span class="ratingtxt">Rating:</span>
				<?php
					for ($i=0; $i < $review->rating ; $i++) {
						?><img src="content/reviewimg/<?=$review->iconimg?>" class="ratingstar"></img><?php
					}
				?>
				<span class="ratingdesc">
					<b><?=$review->rating?></b> <?=$review->ratingdesc?> out of <b>5</b>
				</span>
			</p>
		</div>
	</div>
	<hr/>
	<?php
}
?>