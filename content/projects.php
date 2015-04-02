<style>
#disp_window {
	width:380px;
	height:200px;
	background-color:white;
	opacity: 0.4;
	background-image:url("content/projectsimg/StaticTV.gif");
	border-radius:5px 5px 5px 5px;
	box-shadow: 0 0 5px #777777;
}

.proj_icon {
	width:54px;
	height:54px;
	background-position: -3px -3px;
	border:3px solid transparent;
	background-color:white;
	border-radius:10px;
	float:left;
	margin-right:15px;
	box-shadow: 0 0 5px #777777;
	margin-bottom: 15px;
}
</style>

<script>
var projs = [
	{
		"name":"Empires and Allies",
		"button":"empires_and_allies_button.png",
		"banner":"empires_and_allies_banner.png",
		"link":"https://zynga.com/games/empires-and-allies",
		"category":"major_games",
		"text":'2013, 2014<hr/> What I worked on at Zynga.<br/>Did prototyping, then some networking, UI and social features.'
	},
	{
		"name":"MoeMoeRush 2",
		"button":"moemoerush2_button.png",
		"banner":"moemoerush2_banner.png",
		"link":"https://www.youtube.com/watch?v=FIDD6lTOXx8",
		"category":"other_games",
		"text":"March 2015<hr/>Oculus Rift game controlled with two Wiimotes.<br/> Special thanks to Yunyi, Allen, Ciera and Yasu.<br/><br/><a href='/?post=13'>Post with download</a>"
	},
	{
		"name":"Ricochet Heroes",
		"button":"ricochethero_button.png",
		"banner":"ricochethero_banner.png",
		"link":"http://spotcos.com/ricochet_hero",
		"category":"games",
		"text":"December 2014<hr/>Pinball RPG made for LD31 with Josh, special thanks to Josi and Charles."

	},
	{
		"name":"CrazyCars",
		"button":"crazycars_button.png",
		"banner":"crazycars_banner.png",
		"link":"http://spotcos.com/crazycars",
		"category":"other_games",
		"text":"September 2014<hr/>CrazyTaxi clone made in 48 hours for Advance Game Jam.<br/>Thanks to Josi, Henry, Tatsuro and Takumi."

	},
	{
		"name":"Dreaming Knight: Little Hero",
		"button":"littlehero_button.png",
		"banner":"littlehero_banner.png",
		"link":"http://spotcos.com/littlehero",
		"category":"games",
		"text":"August 2014<hr/>Top-down RPG-Brawler with bullet hell elements.<br/> Made in 72 hours for <a href='http://www.ludumdare.com/compo/ludum-dare-30/'>Ludum Dare 30 Jam</a><br/>(Theme: Connected Worlds). <br/><br/>Thanks to Josh and Josephine."

	},
	{
		"name":"UW GameDev Club",
		"button":"gamedev_button.png",
		"banner":"gamedev_banner.png",
		"link":"http://gamedev.cs.washington.edu",
		"category":"misc",
		"text":"2014/2015<hr/>Club I started/helped run. <br/><br/><a href='/gamedev'>Random Slides</a>"
	},
	{
		"name":"Maniac Pengmaku",
		"button":"pengmaku_button.png",
		"banner":"pengmaku_banner.png",
		"link":"http://spotcos.com/penguin",
		"category":"games",
		"text":"April 2014<hr/>Bullet hell (Danmaku) shooter based on penguins.<br/> Made in 48 hours for <a href='http://www.ludumdare.com/compo/ludum-dare-29/'>Ludum Dare 29 Compo</a><br/>(Theme: Beneath the Surface) <br/><br/><a href='https://github.com/spotco/pingouin_shooter'>Source</a>"

	},
	{
		"name":"Window Cleaner - A Tale of Two Gangs",
		"button":"windowcleaner_button.png",
		"banner":"windowcleaner_banner.png",
		"link":"http://spotco.itch.io/window-cleaner",
		"category":"games",
		"text":"March 2014<hr/>Clean windows in this dystopian cyberpunk world while two rival gangs battle it out. Thanks to Donovan, Ciera, Yasu and Joshua.<br/><br/>Made for the <a href='http://itch.io/jam/cyberpunk-jam'>Cyberpunk Game Jam 2014</a>."

	},
	{
		"name":"MoeMoeRush!!",
		"button":"moemoerush_button.png",
		"banner":"moemoerush_banner.png",
		"link":"http://spotco.itch.io/moemoerush",
		"category":"games",
		"text":"January 2014<hr/>Giant schoolgirl rampages through Tokyo-3 on her way to school. Japanese military does their best to stop her. Cuhrazy rhythm game with real japanese voice acting. <br/><br/>Made in 24 hours, thanks to David, Ciera, Yasu, Kyle and Thomas."

	},
	{
		"name":"ScrapePlayer DESKTOP",
		"button":"scrapeplayerdesktop_button.png",
		"banner":"scrapeplayerdesktop_banner.png",
		"link":"https://github.com/spotco/ScrapePlayerDESKTOP",
		"category":"misc",
		"text":"2013<hr/>Command line (ncurses) music player with 1) support for just about every filetype, 2) small memory/cpu footprint 3) decent library management. Surprisingly, I never found anything else with all 3 on OSX. I actually use this lol."

	},
	{
		"name":"SHOOT3KILL",
		"button":"shoot3kill_button.png",
		"banner":"shoot3kill_banner.png",
		"link":"https://github.com/spotco/Shoot3Kill",
		"category":"other_games",
		"text":"November 2013<hr/>Facebook global finals hackathon project AND networks finals project. Online 3d first person shooter with Occulus Rift integration. <br/><br/>"+
				'<a href="https://github.com/spotco/Shoot3Kill">source</a>'

	},
	{
		"name":"SHOOT2KILL",
		"button":"shoot2kill_button.png",
		"banner":"shoot2kill_banner.png",
		"link":"https://github.com/spotco/shoot2kill",
		"category":"other_games",
		"text":'March 2013<hr/>Entry for 2013 Facebook PNW Hackathon. We won (GOING TO CALI BABY). Online 3d FPS using webgl and node.js/socket.io.<br/><br/>'+
		"<a href='https://github.com/spotco/shoot2kill'>source</a>"

	},
	{
		"name":"Speedy Pups",
		"button":"runner_button.png",
		"banner":"runner_banner.png",
		"link":"http://speedypups.com",
		"category":"major_games",
		"text":'2012-2014<hr/>Our first major mobile game, in development for over a year.<br/>A platformer/infinite runner inspired by retro classics like Sonic and Rayman. Multiple worlds, three bosses, fun minigames and lots of challenge!<br/><br/>Art by <a href="http://heytomchang.com/">Tom</a>.'
	},
	{
		"name":"CampusView3D",
		"button":"campus_button.png",
		"banner":"campus_banner.png",
		"link":"http://spotcos.com/misc/CampusView3D.jar",
		"category":"misc",
		"text":'2012<hr/>Tangentially class related, also OpenGL learning experience.'
	},
	{
		"name":"Jump, Goober, Jump!!",
		"button":"jgj_button.png",
		"banner":"jgj_banner.png",
		"link":"http://www.spotcos.com/goober",
		"category":"games",
		"text":'2012<hr/>Platformer made in flash, ~30 levels, multiple bosses and online level editor. '+
				'My first game that other people actually played. It got sponsored, so I actually made some money off it! '+
				'I did all the art too. That won\'t be happening again.<br/><br/>'+
				'<a href="https://github.com/spotco/Jump--goober--Jump--">source here</a>'
	},
	{
		"name":"Save The Princess",
		"button":"stp_button.png",
		"banner":"stp_banner.png",
		"link":"/SaveThePrincess/SaveThePrincess.zip",
		"category":"other_games",
		"text":'2011<hr/>My first "real" game, done in java using the slick library. '+
				'I describe it as 2d metal gear solid + puzzles. In retrospect, it was a little too difficult and definitely needed checkpoints. I\'d like to redo it in 3d someday.<br/><br/>'+
				'<a href="https://github.com/spotco/Save-the-Princess">source here</a>'
	},
	{
		"name":"ScrapePlayer2.0",
		"button":"scrape_button.png",
		"banner":"scrape_banner.png",
		"link":"http://spotcos.com/scrapeplayer/",
		"category":"misc",
		"text":'2012<hr/>Web scraper, music streamer and lisp(?) interpreter<br/><br/>' +
				'<a href="https://github.com/spotco/ScrapePlayer">source and docs</a>'
	},
	{
		"name":"JavaTetris",
		"button":"tetris_button.png",
		"banner":"tetris_banner.png",
		"link":"/misc/tetris.zip",
		"category":"other_games",
		"text":'2010<hr/>Made this back when I was learning programming for fun+challenge. Giant while loop alert. <br/><br/>'+
				'<a href="https://github.com/spotco/JavaTetris">source here</a>'
	}
];

$(function(){
	projs.forEach(function(i){
		//console.log("content/projectsimg/button/"+i["button"]);
		var n_button = $("<div>").attr({"class":"proj_icon"}).css({"background-image":"url(\"content/projectsimg/button/"+i["button"]+"\")"});
		$("#"+i["category"]).append(n_button);
		n_button.click(function(){
			$("#cur_proj_name").text(i["name"]);
			$("#cur_proj_desc").html(i["text"]);
			$("#disp_window").css({"background-image":"url(\"content/projectsimg/banner/"+i["banner"]+"\")","opacity":1.0});
			$(".cur_proj_link").attr({"href":i["link"]});
		});
		n_button.hover(function(){
			n_button.css({"border":"3px solid red"});
		},function(){
			n_button.css({"border":"3px solid transparent"});
		});
	});
	$('.proj_icon').css('cursor', 'pointer');
});

</script>


<div class="row" style="height:255px;">
	<a class="cur_proj_link" href=""><div class="span6" id="disp_window"></div></a>
	<div class="span6">
		<a class="cur_proj_link" href=""><h2 id="cur_proj_name"></h2></a>
		<p id="cur_proj_desc">Click on an icon to see more info!</p>
		<noscript>
			Please enable javascript to see this content!
		</noscript>
	</div>
</div>

<hr />
<div class="row" style="width:1000px">
	<div class="span12" id="major_games">
		<h3>Major Games</h3>
	</div>
	<!--
	<div class="span6" id="hackathon" style="margin-left:30px;">
		<h3>Hackathon</h3>
	</div>
    -->
</div>
<br/>
<div class="row" style="width:1000px">
	<div class="span12" id="games">
		<h3>Short Games</h3>
	</div>
	<!--
	<div class="span6" id="hackathon" style="margin-left:30px;">
		<h3>Hackathon</h3>
	</div>
    -->
</div>
<br/>
<div class="row" style="width:1000px">
	<div class="span12" id="other_games">
		<h3>Other Games</h3>
	</div>
	<!--
	<div class="span6" id="hackathon" style="margin-left:30px;">
		<h3>Hackathon</h3>
	</div>
    -->
</div>
<br/>
<div class="row" style="width:1000px">
	<!--
	<div class="span6" id="school_teaching">
		<h3>School/Teaching</h3>
	</div>
	-->
	<div class="span12" id="misc" style="">
		<h3>Misc</h3>
	</div>
</div>
