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
}
</style>

<script>
var projs = [
	{
		"name":"ScrapePlayer DESKTOP",
		"button":"scrapeplayerdesktop_button.png",
		"banner":"scrapeplayerdesktop_banner.png",
		"link":"https://github.com/spotco/ScrapePlayerDESKTOP",
		"category":"misc",
		"text":"Command line (ncurses) music player with 1) support for just about every filetype, 2) small memory/cpu footprint 3) decent library management. Surprisingly, I never found anything else with all 3 on OSX. I actually use this lol."

	},
	{
		"name":"SHOOT3KILL",
		"button":"shoot3kill_button.png",
		"banner":"shoot3kill_banner.png",
		"link":"http://spotcos.com/shoot3kill/shoot3kill.html",
		"category":"games",
		"text":"Facebook global finals hackathon project AND networks finals project. Online 3d first person shooter with Occulus Rift integration. Will be working on this more, more features and original graphics. <br/><br/>"+
				'<a href="https://github.com/spotco/Shoot3Kill">source</a>'

	},
	{
		"name":"SHOOT2KILL",
		"button":"shoot2kill_button.png",
		"banner":"shoot2kill_banner.png",
		"link":"http://54.245.123.189/shoot2kill/client/3dclient.html",
		"category":"hackathon",
		"text":'Entry for 2013 Facebook PNW Hackathon. We won (GOING TO CALI BABY). Online 3d FPS using webgl and node.js/socket.io.<br/><br/>'+
		"<a href='https://github.com/spotco/shoot2kill'>Fork my dongle</a>"

	},
	{
		"name":"Speedy Pups",
		"button":"runner_button.png",
		"banner":"runner_banner.png",
		"link":"https://github.com/spotco/GOstritch",
		"category":"games",
		"text":'My current project, an iOS platformer/runner using cocos2d. '+
				'I bought a mac mini just for this.'+
				'It was also greatly influenced by Rayman Origins (which I happened to be playing...this was originally supposed to be a much simpler game!).<br/><br/>'+
				'Video(s):<br/>'+
				'<a href="http://www.youtube.com/watch?v=HrmJbr3pLGY">Nov 2012</a><br/>'+
				'<a href="https://www.youtube.com/watch?v=SMFijfINWd8">Mar 2013</a><br/>'+
				'<a href="https://www.youtube.com/watch?v=tqvUtsHpmrw">May 2013</a><br/>'
	},
	{
		"name":"CampusView3D",
		"button":"campus_button.png",
		"banner":"campus_banner.png",
		"link":"http://spotcos.com/misc/CampusView3D.jar",
		"category":"school_teaching",
		"text":'A CSE 331 final project. We were supposed to make a GUI map, and I wanted to make a gps navigator. '+
				'Used JOGL to embed an openGL canvas inside a swing frame. STILL don\'t know the best way to do 3d in java, though this somehow works.<br/><br/>'+
				'<a href="https://github.com/spotco/CampusView3D">source here</a>'
	},
	{
		"name":"Jump, Goober, Jump!!",
		"button":"jgj_button.png",
		"banner":"jgj_banner.png",
		"link":"/jumpdiecreate/jumpdieorcreate.php",
		"category":"games",
		"text":'Platformer made in flash, ~30 levels, multiple bosses and online level editor. '+
				'My first game that other people actually played. It got sponsored, so I actually made some money off it! '+
				'I did all the art too. That won\'t be happening again.<br/><br/>'+
				'<a href="https://github.com/spotco/Jump--goober--Jump--">source here</a>'
	},
	{
		"name":"Save The Princess",
		"button":"stp_button.png",
		"banner":"stp_banner.png",
		"link":"/SaveThePrincess/SaveThePrincess.zip",
		"category":"games",
		"text":'My first "real" game, done in java using the slick library. '+
				'I describe it as 2d metal gear solid + puzzles. In retrospect, it was a little too difficult and definitely needed checkpoints. I\'d like to redo it in 3d someday.<br/><br/>'+
				'<a href="https://github.com/spotco/Save-the-Princess">source here</a>'
	},
	{
		"name":"JavaTetris",
		"button":"tetris_button.png",
		"banner":"tetris_banner.png",
		"link":"/misc/tetris.zip",
		"category":"games",
		"text":'Made this back when I was taking intro programming for fun+challenge. Giant while loop alert. <br/><br/>'+
				'<a href="https://github.com/spotco/JavaTetris">source here</a>'
	},
	{
		"name":"Fill in the ___",
		"button":"fillinthe_button.png",
		"banner":"fillinthe_banner.png",
		"link":"http://spotcos.com/misc/FILLINTHE__/fillinthe_.swf",
		"category":"hackathon",
		"text":'My entry for a yahoo hackathon, a pseudo-search engine. I spent the whole 24 hours doing these pretty effects.<br/><br/>'+
				'<a href="https://github.com/spotco/Fill-In-the-____">source here</a>'

	},
	{
		"name":"FaceMii",
		"button":"facemii_button.png",
		"banner":"facemii_banner.png",
		"link":"/friendmii/facemii.html",
		"category":"hackathon",
		"text":'My entry for some facebook hackathon back in 2011. Looking back, it\'s probably some of the worst code I\'ve ever written, lol (and I don\'t think the 24 hour limit excuses it). '+
				'When it does work, it\'s like a cute little js booklet that shows all your friends and their messages. I think we won a 30$ itunes gift card for it.<br/><br/>'+
				'<a href="https://github.com/spotco/FaceMii">source here</a>'
	},
	{
		"name":"ScrapePlayer2.0",
		"button":"scrape_button.png",
		"banner":"scrape_banner.png",
		"link":"http://spotcos.com/misc/scrapeplayer/",
		"category":"misc",
		"text":'Web scraper and music streamer (think pandora that streams for any http web server).<br/>'+
				'Scriptable with a pseudo-lisp dialect. Now why the hell would you ever want to do that.<br/>' +
				'<a href="https://github.com/spotco/ScrapePlayer">source and documentation here</a>'
	},
	{
		"name":"CSE 190m Extras",
		"button":"extra_button.png",
		"banner":"extra_banner.png",
		"link":"/pdf",
		"category":"school_teaching",
		"text":'My favorite part about TA-ing cse190 was doing lectures about extra material. '+
				'I`d go over all sorts of exciting web technologies such as node.js, css transforms, bootstrap and much more. '+
				'All the materials I used are saved here.'
	},
	{
		"name":"ASHAnet projects page",
		"button":"ashaproj_button.png",
		"banner":"ashaproj_banner.png",
		"link":"/ashaproj",
		"category":"hackathon",
		"text":'Project for Google 24 hours of good hackathon. '+
				'Designed to show off projects of ASHA, a nonprofit involved with helping children in rural india.<br/>'+
				'<a href="https://github.com/spotco/ashaproj">source here</a>'
	},
	{
		"name":"TypeScript 2hu",
		"button":"tshooter_button.png",
		"banner":"tshooter_banner.png",
		"link":"/tshooter",
		"category":"games",
		"text":'shitty game I made a few years ago to see if typescript was any good (it was, but I never touched this again).<br/><br/>'+
				'<a href="https://github.com/spotco/TShooter">source </a>'
	},
	{
		"name":"Genealogy.js",
		"button":"genealogy_button.png",
		"banner":"genealogy_banner.png",
		"link":"http://spotcos.com/misc/genealogy/genealogy.html",
		"category":"misc",
		"text":'Python web scraper for online MathGenealogy site with a web interface. Grabs images from google image search for some occasionally unexpected(-ly hilarious) results. '
	}
];

$(function(){
	projs.forEach(function(i){
		console.log("content/projectsimg/button/"+i["button"]);
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

<div class="row">
	<div class="span6" id="games">
		<h3>Games</h3>
	</div>

	<div class="span6" id="hackathon">
		<h3>Hackathon</h3>
	</div>
</div>

<div class="row">
	<div class="span6" id="school_teaching">
		<h3>School/Teaching</h3>
	</div>

	<div class="span6" id="misc">
		<h3>Misc</h3>
	</div>
</div>