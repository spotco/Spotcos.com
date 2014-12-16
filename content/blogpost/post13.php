<h1>Ricochet Heroes - LD31</h1>
<p>Posted by SPOTCO on Dec 2014</p>
<hr/>
It's been two weeks now but have been meaning to write this while everything's relatively fresh on my mind.
Finished the LD Jam (3rd of the year, though did a few other random game jams) and once again very happy with the way things turned out.
<br/>
<br/>
Here's our game, "Ricochet Heroes"
<br/>
<a href="http://ludumdare.com/compo/ludum-dare-31/?action=preview&amp;uid=35477">http://ludumdare.com/compo/ludum-dare-31/?action=preview&amp;uid=35477</a>
<br/><br/>
<a href="/content/blogimg/12_0.png"><img class="alignnone size-medium wp-image-427820 img-polaroid" src="/content/blogimg/12_0.png" alt="title screen" width="300" height="150" class="img-polaroid" /></a>
<br/><br/>
It's a pinball/pachinko-RPG hybrid, with some obvious (as seen from the title art above) influences from final fantasy/16bit rpgs, and peggle. It worked out surprisingly well, managed to get in all the planned content. Did have to pull a heroic all-nighter sunday night/monday morning, but other than that got a decent amount of sleep.
<br/><br/>
A bit about the team, it was me, Josh (who drove up here to SF all the way from LA, what dedication!) and two others (Josi and Charles) who both had to drop out a day in. Didn't take any selfies or anything, but here's a photo of a desk at work in the Zynga HQ in SF (where we spent most of the contest):
<br/><br/>
<a href="/content/blogimg/12_1.jpg"><img class="alignnone size-medium wp-image-427821 img-polaroid" src="/content/blogimg/12_1.jpg" alt="unnamed" width="300" height="225" /></a>
<br/><br/>
We spent an unusually long amount of time brainstorming (an hour and a half or more?). Here's the general train of thought (sure wish I took a photo of the whiteboards/sketch papers here!)
<br/><br/>
1. We want to make an RPG!<br/>
2. RPG with the entire world map...ON ONE SCREEN<br/>
3. Maybe use a magnifiying glass to see individual parts of the world map?<br/>
4. Send out multiple heroes at once, or maybe one every 10 seconds?<br/>
5. Wait, how would gameplay for this work? Do you have god powers or something?<br/>
6. Specific god powers on cooldown, maybe lightning or swipe the enemies away<br/>
7. This doesn't sound very fun at all think of something more action<br/>
8. Harvest moon + aliens/zombies, defend your land from the invaders IN ONE SCREEN<br/>
9. I still like the idea of watching people walk and fight, RTS-y.<br/>
10. World War 2 D-Day simulator where you control one person on the front lines and you die over and over again<br/>
11. That doesn't sound very exciting either<br/>
12. This is going worse than expected<br/>
13. Go back to that rpg/heroes idea. What if you shoot out the heroes, and they bounce off the walls?<br/>
<br/><br/>
It took a bit of convincing that this idea even fit the theme of "entire game in one screen", especially if we were gonna need to scroll the screen around. However, with idea in hand we were off to the races.
<br/><br/>
<a href="/content/blogimg/12_2.png"><img class="alignnone size-medium wp-image-427826 img-polaroid" src="/content/blogimg/12_2.png" alt="1" width="300" height="148" /></a>
<br/>
(About an hour and a half in)
<br/><br/>
<a href="/content/blogimg/12_3.png"><img class="alignnone size-medium wp-image-427828 img-polaroid" src="/content/blogimg/12_3.png" alt="2" width="300" height="150" /></a>
<br/>
(About 3 hours in)
<br/><br/>
One of our members had a hard time believing that this game was gonna be any fun. I agree, it probably didn't look very fun at this stage. We had a lot of mechanics in mind (tilt, multi-ball, enemies, keys/gates), but how were they all going to be part of a cohesive experience together?
<br/><br/>
<a href="/content/blogimg/12_4.png"><img class="alignnone size-medium wp-image-427829 img-polaroid" src="/content/blogimg/12_4.png" alt="3" width="300" height="147" /></a>
<br/>
(Saturday morning)
<br/><br/>
I had some trouble figuring out how the game was gonna be fun too at this point. There were a couple of directions to go:
Was this game going to be more of a puzzle game,where you had to strategize how and where you were to shoot your balls? Or if not, how could we give it a more action-y feel?
<br/><br/>
It all came together around saturday night, where I was working a bit more on the "launch" mechanics. I wanted players not to just blindly spam clicks and shoot out balls, so that meant some sort of hold click to charge mechanic. At this point, the game didn't have any sense of gravity do there wouldn't have been any point to a "charge to shoot faster" mechanic. Once I added gravity, it all came together.
<br/><br/>
<a href="/content/blogimg/12_5.png"><img class="alignnone size-medium wp-image-427831 img-polaroid" src="/content/blogimg/12_5.png" alt="4" width="300" height="147" /></a>
<br/>
(Saturday night)
<br/><br/>
I made a pretty simple level resembling a simple pachinko machine, and the (imaginary) goal was to kill all the enemies in 3 balls or less. With the addition of gravity, hold to charge and tilting, this was actually a pretty challenging and fun level. With this, we knew where to go to get a fun game.
<br/><br/>
Spent all of sunday making all the mechanics (building entering, combat log, level transitions, enemy types) and the sunday-monday allnighter fixing bugs (which somehow this game had way more than usual) and designing the levels. To actually make the level layouts, I used the level editing tool from my recently released game SpeedyPups (http://speedypups.com/) to draw the mountains and place objects.
<br/><br/>
<a href="/content/blogimg/12_7.png"><img class="alignnone size-medium wp-image-427833 img-polaroid" src="/content/blogimg/12_7.png" alt="Capture d’écran 2014-12-16 à 02.59.43 AM" width="300" height="240" /></a>
<br/>
<a href="http://spotcos.com/gogodoggy/editor.html">http://spotcos.com/gogodoggy/editor.html</a>
<br/><br/>
I get a surprising amount of mileage out of this tool. If you're reading this and interested in a simple vector graphics drawing level editor (that exports to JSON), send me a message and I'll hook you up :)
<br/><br/>
Spent the last few hours adding sound effects and music (just like last time). Big credits to Josh who found the main world theme on newgrounds, I felt the music fit incredibly well and really improved the game. Wish I still had a link to the original on NG so that I could give credit, but it's lost to time.
<br/><br/>
Submitted with about 20 minutes left to spare, and snuck in some physics bugfixes a few hours later.
We (both me and Josh) were considering doing an expanded version of the game possibly for mobile. There's some obvious places where the whole "pinball RPG" could go...more RPG mechanics, upgrading character balls, quests, etc.
<br/><br/>
In the end, we decided to hold off on it for the time being. I'd really like to come back to this idea sometime in the future, but for now working on an "unnamed robot rpg".
<br/><br/>
<a href="/content/blogimg/12_8.jpg"><img class="alignnone size-medium wp-image-427835 img-polaroid" src="/content/blogimg/12_8.jpg" alt="unnamed2" width="300" height="140" /></a>
<br/><br/>
&nbsp;

Get hyped?
<br/><br/>
Follow us at
<a href="https://twitter.com/spotco">https://twitter.com/spotco
</a>or
<a href="http://spotcos.com">http://spotcos.com</a>
<br/>
<br/>
<h2>LD Recommendations:</h2>
<br/>
I've played about 60 other games, and found 3 that I really liked.
<br/><br/>
"Lawbreaker" by deepnight<br/>
<a href="http://ludumdare.com/compo/ludum-dare-31/?action=preview&amp;uid=2982">http://ludumdare.com/compo/ludum-dare-31/?action=preview&amp;uid=2982</a><br/>
2d GTA on one screen. As always, deepnight does the incredible in 48 hours (something that I'd probably have trouble doing in 72 with an artist). Lots of really great little details, like hijacking tanks and helicopters.
<br/><br/>
"Juoi" by teameagle<br/>
<a href="http://ludumdare.com/compo/ludum-dare-31/?action=preview&amp;uid=23493">http://ludumdare.com/compo/ludum-dare-31/?action=preview&amp;uid=23493</a><br/>
One bossfight - the game. It's one very pretty and well animated boss fight, with lots of action-y screenshake-y goodness.
<br/><br/>
"Snowball juggling Olympuio" by Benjamin<br/>
<a href="http://ludumdare.com/compo/ludum-dare-31/?action=preview&amp;uid=2952">http://ludumdare.com/compo/ludum-dare-31/?action=preview&amp;uid=2952</a><br/>

Snowball juggling. My favorite out of all that I played, incredible amounts of detail (just look at the animation on that snowman). Really fun in a "flappy birds keep trying to beat the score" sort of way, also really does replicate the feeling of juggling.