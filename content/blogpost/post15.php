<h1>Monday Night Monsters</h1>
<p>Posted by SPOTCO on October 2015</p>
<hr/>
Started a new job beginning of the summer, 
and got <a href="http://www.gamasutra.com/view/news/249099/Gree_International_lays_off_30_of_staff.php">laid off about a month and half afterwards</a>.
<br/>
<?=show_image("/content/blogimg/15_0.jpg",250,"margin-top:20px;margin-left:20px")?>
<br/><i style="margin-left:85px">Layoff block party</i>
<br/>
<br/>
Definitely was not expecting it (was hoping to coast by for a few more months at least...), but got a pretty hefty severance
and was able to travel for a few weeks. Currently got a job at <a href="http://www.evertoon.com/">a startup</a> and enjoying it.
<br/>
<hr/>
The weekend before starting work, made <a href="http://spotco.itch.io/monday-night-monsters">Monday Night Monsters</a> for Ludum Dare 33 with <a href="http://shy.am/">Shyam</a> (a friend from GREE)
and <a href="http://joshwongart.com/">Josh</a> (my old partner from previous gamejam stuff). I still like doing these since I feel they 
really force you to "hone" your game design and project management skills. Did something a lot more ambitious (and polished) than previous jams, and I think 
it really shows in the game.
<br/>
<?=show_image("/content/blogimg/15_1.png",250,"margin:20px;")?>
<br/>
Timelapse from the end of the first night. We had decided we wanted to make a sports/football game, and I think I got most of the basic control mechanics
(hold space to pause, click and point to give directions) down at this point.
<br/>
<?=show_image("/content/blogimg/15_2.png",250,"margin:20px;")?>
<br/>
End of second night (had my first day of work Monday, so only worked two days). Had a lot of the polish in, with most of Shyam's AI.
<br/>
<?=show_image("/content/blogimg/15_3.gif",250,"margin:20px;")?>
<br/>
Submitted for the Compo and ended up winning #13 overall. While it's fun to move up in the rankings every time (#144 to #67 to #16 to #13!!!) 
not sure if I can keep it up (the pressure's on!). A few assorted thoughts:
<br/>
<br/>
1. GIFS are hip right now (see above) and I should do more. Posting one on the LD homepage got our game dozens of votes and hundreds of views (free money, baby!).
<br/>
<br/>
2. Controls are still the most important thing. Rated LD lower in fun (and got general worse response when out in the "REAL" internet) than previous stuff.
Part of this I think is still the more clunkiness of the controls.
<br/>
<br/>
3. If LD reviewers even slightly mention something, that issue's gonna be a BIG problem in the "REAL" internet. 
With Ricochet Heroes, people mentioned tilt was confusing (which it was). In this game, they said the controls took time to figure out (which they do).
So just in general, controls really such UNLESS you have another game which to directly copy from.
<br/>
<br/>
4. I personally really love how the polish stuff turned out. Commissoned some really great music from <a href="http://finnmk.com/">FinnMK</a> (I just love everything about this song),
<iframe width="100%" height="120" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/178021830&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
and got to practice my video game writing by using every skeleton pun known to man.
<br/>
<br/>
5. This game didn't get nearly as many plays on some of the major sites (Newgrounds, etc) as my previous stuff.
My theory on this is that it's because of Unity Webplayer (and the whole not working on Google Chrome thing) compared to my previous stuff in flash.
A real shame since I really love the Unity workflow and HTML5 is so bad.
<br/>
<hr/>
Finally, work continues on Hanoka Mobile (which is probably no longer mobile-focused).
Pivoted to a PC/Console (XBLA/PS4 STORE BABY) focus with a Unity-based codebase.
Also more artists on the team.
<?=show_image("/content/blogimg/15_4.gif",250,"margin:20px;")?>
<br/>
Launch by end of a summer was a lie. I don't think I was ever serious about it :)

<?php
function show_image($url,$width,$style="") {
	?>
	<a href="<?=$url?>">
	<img class="alignnone size-medium wp-image-427820 img-polaroid" style="<?=$style?>" src="<?=$url?>" alt="<?=$url?>" width="<?=$width?>"/>
	</a>
	<?php
}
?>