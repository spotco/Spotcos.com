<h1>Working at Roblox - 2016</h1>
<p>Posted by <b>SPOTCO</b> on November 2016</p>
<hr/>

Had some free time waiting for my flight, so decided to write a little catch-up blog post. <br/>
In the past I tried to make a concentrated effort to do these regularly. Once a year's good enough, isn't it?

<br/>
<br/>
I wasn't familiar at all with Roblox before starting last February. <br/>
In the past few months I've been working as a community facing engineer,
and I've probably been more active on <a href="http://devforum.roblox.com/">this forum</a> than any other in my life.

<br/>
<br/>
In a way, I find Roblox to be really similar to <a href="http://www.newgrounds.com/">Newgrounds</a>. <br/>
They're both communities of amateurs making game (or game-ish) creations. <br/>
There are really talented people in both places making amazing things and following their artistic visions,
and it's pretty great to be part of that (I'd still like to think I'm one of those people following my own artistic vision).

<br/>
<br/>
<?=show_image("http://www.newgrounds.com","/content/blogimg/newgrounds.png",250,"margin-top:20px;margin-left:20px;margin-bottom:10px")?>
<?=show_image("http://www.roblox.com/games","/content/blogimg/roblox.png",250,"margin-top:20px;margin-left:20px;margin-bottom:10px")?>
<br/>
<br/>
It's also interesting to see how tech and platform choices have influenced the kind of content you see in either place. <br/>
Newgrounds (still?) is a flash-based site. Because of that, you see a specific kind of thing.
Lots of 2D art with elaborate animation, audio and interesting game design.
The front page consists of mainly short, 10-20 minute single-player game "experiences" (So basically, the kind of stuff I used to do).
It's the quintessential flash game portal, which I imagine is a dying breed (you've got Apple to thank for that!)
<br/>
<br/>
I'm then going to say that I think Roblox's tech is incredible.
I don't know what other platform a small team of amateurs could possibly make the same scale of game they do.
If I was giving a sales pitch, it'd be something like this:<br/>
A small team of students can (and have) created professional quality online games with thousands of active players at any given time.
This is literally more players than the majority of games on steam.
<br/>
<br/>
<?=show_image("https://www.roblox.com/games/34972152/The-Lords-of-Nomrial","/content/blogimg/lords_of_nomrial.png",300,"margin-top:20px;margin-left:20px;margin-bottom:10px")?>
<?=show_image("https://www.roblox.com/games/292439477/Phantom-Forces-Beta","/content/blogimg/phantom_forces.png",300,"margin-top:20px;margin-left:20px;margin-bottom:10px")?>
<br/>
<br/>
The biggest difference between the two would be the amount of players and potential money to be made in a popular Roblox game.
I'd honestly say that it is (right now) one of the best kept secrets in indie gaming.
As in, if I were an indie game developer I'd seriously consider making a Roblox game if the goal was to be successful/make money (And this <i>isn't</i> just me talking as an employee right now :P)
<br/>
<hr/>
Anyway, I've been doing some interesting things while at Roblox.<br/>
Many of these have been documented as public announcements, which has been very different from other places I've been. <br/>

<br/>
<br/>
<a href="http://devforum.roblox.com/t/audio-networking-api-consistency-and-3d-sound-improvements/26095" style="font-size: 1.5em;font-style: italic;">Sound Networking and API improvements</a><br/>
This one started as a side project in between the miscellaneous bugfixes I was doing, ended up taking several months and was the majority of the code rewrite. <br/>
Doing this made me <b><i>VERY</i></b> familiar with the internals of the Roblox engine. <br/>
At various points I had to download and look at the source code for various games to try and debug things.
It's pretty fun when some mysterious bug (ex: grenade sounds not firing) is appearing <a href="https://www.roblox.com/games/292439477/Phantom-Forces-Beta">Phantom Forces</a> because of some minor audio change made!
<br/>
<br/>
<a href="http://devforum.roblox.com/t/optimized-and-improved-character-sound-script/28408" style="font-size: 1.5em;font-style: italic;">Rewritten Humanoid Sound Scripts</a><br/>
This started as a bug report involving bad performance on a <a href="https://www.roblox.com/games/370731277/HOSPITAL-MeepCity">certain 100-player server Roblox Games</a>.
The ultimate problem was very high network traffic of humanoid audio code (think upwards of 10-20 KB/s per player in a worst case scenario), which combined with potentially 100-players led to some bad times.
For reference, the final code was at about 1-5 KB/s worse case.
<br/>
<br/>
<a href="http://blog.roblox.com/2016/11/bring-your-sounds-to-life-with-new-audio-effects-and-properties/" style="font-size: 1.5em;font-style: italic;">Audio Effects and Groups</a><br/>
This one even got a <a href="http://blog.roblox.com/2016/11/bring-your-sounds-to-life-with-new-audio-effects-and-properties/">Blog Post</a> (which I didn't write, that's <a href="https://twitter.com/yosoytofu">@yosoytofu</a>).
Pretty much just integrated some more advanced FMOD features into Roblox (so nothing too special tech-wise), this one took a lot of meetings/talks to get in.
<br/>
<br/>
<a href="http://devforum.roblox.com/t/more-new-fonts-to-use-in-text/30517" style="font-size: 1.5em;font-style: italic;">New Built-In Fonts</a><br/>
You wouldn't believe how many meetings this took to make happen.
<br/>
<br/>
<a href="http://devforum.roblox.com/t/tiered-audio-upload-prices-with-longer-max-length-sizes-coming-soon/27876" style="font-size: 1.5em;font-style: italic;">Tiered Audio Upload Prices</a><br/>
See above.
<br/>
<br/>
<a href="http://devforum.roblox.com/t/lua-performance-profiling-api/28934" style="font-size: 1.5em;font-style: italic;">Performance Profiling API</a><br/>
Exposed (to developer code) the existing performance profling API. <br/>Highlight of this? <br/>Got to narrate some tutorial videos.
<br/><br/>
<iframe width="560" height="315" src="https://www.youtube.com/embed/Js2pNBmALfc" frameborder="0" allowfullscreen></iframe>
<br/><br/>
So I've been busy. Currently working on <a href="https://github.com/ROBLOX/Core-Scripts">some exciting open-source</a> developer chat features.
<br/>
<hr/>

Still grinding away at my own indie game! <br/>
I'd say it's historically related to that Ludum Dare 34 game I made a year ago, but at this point is basically it's own thing.
Writing is hard (and working with remote people even harder), but as always it's a learning experience.<br/>
Realistically, it'll be out sometime late next year.

<blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr"><a href="https://twitter.com/hashtag/gamedev?src=hash">#gamedev</a> new animated cutscene. most scene&#39;s won&#39;t be nearly this high budget <a href="https://t.co/9GjFFparsm">pic.twitter.com/9GjFFparsm</a></p>&mdash; spotco (@spotco) <a href="https://twitter.com/spotco/status/791549809479921666">October 27, 2016</a></blockquote>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

<blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">clothing for days <a href="https://twitter.com/JoshWongArt">@JoshWongArt</a> <a href="https://twitter.com/hashtag/gamedev?src=hash">#gamedev</a> <a href="https://t.co/cpUmTn3COr">pic.twitter.com/cpUmTn3COr</a></p>&mdash; spotco (@spotco) <a href="https://twitter.com/spotco/status/791899284270567424">October 28, 2016</a></blockquote>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>


<?php
function show_image($url,$imgurl,$width,$style="") {
	?>
	<a href="<?=$url?>">
	<img class="alignnone size-medium wp-image-427820 img-polaroid" style="<?=$style?>" src="<?=$imgurl?>" alt="<?=$imgurl?>" width="<?=$width?>"/>
	</a>
	<?php
}
?>
