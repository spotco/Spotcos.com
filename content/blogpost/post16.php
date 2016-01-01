<h1>My Best (Magical) Friend - LD34</h1>
<p>Posted by SPOTCO on December 2015</p>
<hr/>

If you haven't already played it, try our LD34 entry "My Best (Magical) Friend", a very japanese visual novel about friendship and cool magic powers.
<br/>
<a href="http://ludumdare.com/compo/ludum-dare-34/?action=preview&uid=35477">http://ludumdare.com/compo/ludum-dare-34/?action=preview&uid=35477</a>
<br/>
<br/>
And since this is always fun, here's some work-in-progress shots.
<hr/>
<h3>HOW TO MAKE A VISUAL NOVEL:</h3>

<?=show_image("/content/blogimg/girlsvn/1.png",250,"margin-top:20px;margin-left:20px;margin-bottom:10px")?>
<br/>STEP 1: Write a bunch of stuff on pieces of paper.<br/>

<?=show_image("/content/blogimg/girlsvn/2.png",250,"margin-top:20px;margin-left:20px;margin-bottom:10px")?>
<br/>STEP 2: Google docs because nobody else can read handwriting.<br/>

<?=show_image("/content/blogimg/girlsvn/3.png",250,"margin-top:20px;margin-left:20px;margin-bottom:10px")?>
<br/>STEP 3: Plan out the whole story in MSPaint.<br/>

<?=show_image("/content/blogimg/girlsvn/4.png",250,"margin-top:20px;margin-left:20px;margin-bottom:10px")?>
<br/>STEP 4: Write a little code.<br/>

<?=show_image("/content/blogimg/girlsvn/5.png",250,"margin-top:20px;margin-left:20px;margin-bottom:10px")?>
<br/>STEP 5: Write some scripts. A lot of scripts. (This part took the longest!)<br/>

<br/>
<br/>
And voila, that's how a visual novel was made!
Some screenshots of the final game:<br/>

<?=show_image("/content/blogimg/girlsvn/final_1.png",250,"margin-top:20px;margin-left:20px;margin-bottom:10px")?>
<?=show_image("/content/blogimg/girlsvn/final_2.png",250,"margin-top:20px;margin-left:20px;margin-bottom:10px")?>

<br/>
<br/>
Give it a shot, and hope you like it! Was very interesting to do something story-based (since I usually do action).

<?php
function show_image($url,$width,$style="") {
	?>
	<a href="<?=$url?>">
	<img class="alignnone size-medium wp-image-427820 img-polaroid" style="<?=$style?>" src="<?=$url?>" alt="<?=$url?>" width="<?=$width?>"/>
	</a>
	<?php
}
?>