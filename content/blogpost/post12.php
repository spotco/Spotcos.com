<h1>Ludum Dare 30</h1>
<p>Posted by SPOTCO on Sep 2014</p>
<hr/>
<p>
	Another gamejam, another blog post! This time I did Ludum Dare 30 with Josh and Josephine.<br/><br/>
	After playing about 300 of these (200 last jam, 100 this time), you start to see some common archetypes (janky physics platformers, overly complex space sims, default unity capsule fps platformers, etc).
	Here's a few random favorites:
</p>

<div>
	<ul id="gamelist">
		<style>
		#gamelist > li {
			margin: 10px;
		}
		</style>
		<li>
			<a href="http://www.ludumdare.com/compo/ludum-dare-30/?action=preview&uid=35500">Shattered</a> 
			- My overall favorite in terms of completeness and fun. An indie platformer in the vein of Fez, with graphics inspired by Cave Story. Pretty similar to a game that won (1st or 2nd place) the last LD Compo, <a href="http://www.newgrounds.com/portal/view/638411">The Valley Rule</a>.
		</li>
		<li><a href="http://www.ludumdare.com/compo/ludum-dare-30/?action=preview&uid=7279">Schrodinghost</a>
			- Very creative and stylistic puzzle game along the lines of Ghost Trick (which I've sadly never played :( )
		</li>
		<li><a href="http://www.ludumdare.com/compo/ludum-dare-30/?action=preview&uid=3923">The Lion's Song</a>
			- Really pretty visual novel, some feels may be had.
		</li>
		<li><a href="http://www.ludumdare.com/compo/ludum-dare-30/?action=preview&uid=6965">Trappy Tomb</a>
			- Top down dodge-the-lava-and-spikes game with an online Dark Souls "leave message when you die" mechanic.
		</li>
		<li><a href="http://www.ludumdare.com/compo/ludum-dare-30/?action=preview&uid=39331">Dance of Fire and Ice</a>
			- Super simple and clever rhythm game, pretty difficult though. You'll be tapping your keyboard like a drum.
		</li>
		<li><a href="http://www.ludumdare.com/compo/ludum-dare-30/?action=preview&uid=26777">Souzou Cliff</a>
			- Indie style (nice art, few mechanics, story based) platformer where you <i>control two characters at the same time</i>. I swear I thought of this idea when brainstorming before. Wins award for corniest dialogue, but does grow on you by the end.
		</li>
		<li><a href="http://www.ludumdare.com/compo/ludum-dare-30/?action=preview&uid=22823">The Bacon Uprising</a>
			- Most original idea I played. You actually play 4 games at once - a shmup, a DDR clone, a jogging sim and a typing/math game. While the individual implementations weren't great, loved the idea.
		</li>
	</ul>
</div>
<p>
	I also wrote a postmortem of our game up on the LD site, hosting it here too for posterity.
</p>
<hr/>
<div>
	<h2><a href="http://www.ludumdare.com/compo/2014/08/30/dreaming-knight-postmortem/">Dreaming Knight: Postmortem</a></h2>
	Finished my second LD a week ago and just managed to get some time to add some post-jam fixes.
	Added some enemy-ai bugfixes, all the random art that I didn't get to in the 72 hours, and <b>FULLSCREEN MODE</b> (that last one's a big one since you're swinging the mouse everywhere in this game!).

If you haven't yet tried my game, give it a shot! (It's a lot of fun I promise :))<br/>
<a href="http://www.ludumdare.com/compo/ludum-dare-30/?action=preview&uid=35477">http://www.ludumdare.com/compo/ludum-dare-30/?action=preview&uid=35477</a>
<br/>
<br/>

<?php imglink("/content/blogimg/ld30-1.png"); ?>
<br/>
<br/>

For the less video-game-playing inclined, I'd describe it as a top-down brawler with RPG (upgrade tree!) and Bullet-Hell (see picture) elements.
It's got two parallel styles of play (sword or crossbow), 3 bosses, some semblance of story and <b>LEL FUNNEH MEMES</b> for all the humor points. (I'd say they're relatively tasteful and fitting though…)
<br/>
<br/>
I'll also take this as an opportunity to write a short post-mortem (since I do love reading others on the front page).
<br/>

<h3>Real Life Stuff</h3>

I met up with my old friend Josh for the Apportable meetup in San Francisco, we were planning on doing this event for a while (and he drove all the way from LA to get here - true sacrifice!).
The meetup itself was pretty dissapointing (I think we only say maybe 1-2 other serious teams there), but can't complain about free food.
We did, however, meet up with our 3rd teammate there, Josephine.

<br/>
<br/>

I wish I took some photos of the meetup, but I'll just have to settle with the dinner-after photo:

<br/>
<br/>

<?php imglink("/content/blogimg/ld30-2.png", "height:300px"); ?>

<br/>
<i>(bottom-right 3 of the photo).</i>
<br/>
<br/>

We spent the rest of the weekend working at Intel HQ in San Jose (Thanks Josephine!).
I also remember being woken up at 2am by the earthquake that made national news while sleeping in a cubicle. Wasn't too bad in the south bay.
<br/>

<h3>Game Design</h3>

I went in really wanting to do something involving RPG elements.
The main influence I had was a game I played during the last LD called Hanoka:
<br/>
<br/>
<a href="http://www.newgrounds.com/portal/view/638425">http://www.newgrounds.com/portal/view/638425</a><br/>

<?php imglink("/content/blogimg/ld30-3.jpg", "height:350px"); ?>
<br/>
<i>(If you haven't, you should totally play this game. It's fucking glorious)</i>

<br/>
<br/>

And this talk by Jan Willem Nijman of Vlambeer:
<br/>
<br/>
<iframe width="560" height="315" src="//www.youtube.com/embed/AJdEqssNZ-U" frameborder="0" allowfullscreen></iframe>
<br/>
<i>(You should also watch this if you haven't, I'd almost consider it required for anyone making any sort of action game).</i>
<br/>
<br/>
We settled on the idea of a dream world pretty quick.
<br/>
Here's the general progression:
<ul>
	<li>"Traveling between dream worlds"</li>
	<li>"Stories from multiple people dreaming" </li>
	<li>"Kid in school dreaming about different historical worlds"</li>
	<li>"minigame-based game with different dreams (dead end)"</li>
	<li>"kid sleeping in class dreaming he's a superhero"</li>
	<li>"kid sleeping in class dreaming he's a zelda-style knight" </li>
	<li>"the bosses are the other kids in the class"</li>
	<li>"his teacher is the princess"</li>
</ul>

<h3>Progress</h3>

The original idea was 4 directions in the same vein as the 2d Zeldas.
Didn't take too many in-progress caps, but check out this ridiculously fun looking prototype:
<br/>
<br/>
<?php imglink("/content/blogimg/ld30-4.png", "height:350px"); ?>
<br/>
<br/>

Sometime around midnight friday, one of us said "Wouldn't it be a lot more fun if we just kept out the sword out the whole time?"
After that, it naturally progressed to a sword-follow-mouse and then a swing-mouse-to-swing-sword style of mechanic.
I usually like to have a fun prototype by the first night, so we were making decent progress. Sure, the game was just "green ball swinging grey stick at blue boxes", but we could tell the "swing sword" mechanic would probably feel pretty great with some knockback, explosions, freeze frame and screen shake (watch the vlambeer video to know why!).

<br/>
<br/>

I do also remember spending a LOT of time working against the flixel hitboxes (specifically Flixel Powertools). I remember just being pretty annoyed the pixel-perfect collision not working properly (basically, any time you have an rotation, scale or offset).

<br/>
<br/>

The next day we met up at Intel HQ and worked on getting the game feel right, and I think we implemented one enemy (the small spider I think).
We were able to use just about everything the two artists made with little iteration, so kept on a good pace.

<br/>
<br/>

<?php imglink("/content/blogimg/ld30-5.png", "height:350px"); ?>

<br/>
<br/>

The day after (Sunday), I was feeling pretty behind so I made a goal of finishing all the enemies (small spider, big spider, jelly, boar) and 3 bosses (snake, spider and fireball). This was basically a day straight of coding/art.
Got all of those done around 2am monday, but was feeling pretty stressed out about the status of the game by then.
Stayed up and implemented most of the UI for the shop.

<br/>
<br/>

Woke up Monday 11-am (took the day off work!) ish feeling REALLY stressed. The game at that stage was just 3 untuned bosses, 4 enemies, and a couple of ideas on how to connect everything together.
<br/>
<br/>
Luckily, was saved by Josh. Since the art was mostly finished, I had him go on level design (enemy patterns, stats tuning) for the rest of the day. This involved some coding for Josh (first time ever I think?) but mainly a lot of playtesting and number-tuning. He did a really great job (you can tell just by the enemy placement and the balance with powerups!).

<br/>
<br/>

<?php imglink("/content/blogimg/ld30-6.png", "height:350px"); ?>
<br/>
<i>(Level code written by our artist!).</i>

<br/>
<br/>

I managed to finish up the scene transitions, shop upgrades, bugfixes and everything else in the last 6 hours (that was the REAL crunch time!)
Did everything sound effect/music related in the last hour before submission. Luckily, I had a ton of general-purpose sound effects from my soon-to-be-released iOS game SpeedyPups, and some great chiptune music from Joshua Kaplan (from a previous game jam) that all fit really well.

<br/>
<br/>

With 10 minutes, added the last sound effects and submitted to the site. Was an intense and stressful 72 hours, but the final product is always worth it afterwards.

<br/>
<br/>

<?php imglink("/content/blogimg/ld30-7.png", "height:350px"); ?>
<br/>
<br/>
<h3>Looking Back</h3>

I was really happy with the final product, managed to get in those RPG mechanics that I wanted to play with (with quite a few elements more-than-inspired by Hanoka…).
I only had a couple of regrets:
<br/>
<br/>
<ul>
	<li>Swing mouse to swing sword felt like a little too wonky/unpredictable mechanic to base a game off of</li>
	<li>Story wasn't really too clear (and ending could have been a little more clever)</li>
</ul>

and unrelated:
<br/>
<br/>
<ul>
	<li>Didn't get too much time to talk to an Apportable Engineer (since I actually am using+have a problem with their SDK!)</li>
</ul>
Will probably try and get this game on FGL once all the Ludum Dare excitement dies down.
<br/>
Thanks for reading, and see you next LD!
</div>
<br/>
<hr/>
<p>
	Finally, <a href="http://www.speedypups.com">SpeedyPups</a> is finished (after two years!). 
	Managed to get it ported to Android using <a href="http://www.apportable.com">Apportable</a>, and launching mid-September.<br/>
	Here goes nothing!
</p>

