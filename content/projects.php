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
		"name":"Doggy Runner",
		"button":"runner_button.png",
		"banner":"runner_banner.png",
		"link":"https://github.com/spotco/GOstritch",
		"category":"games",
		"text":'My current project, an iOS platformer/runner using cocos2d. '+
				'I bought a mac mini just for this.'+
				'It was also greatly influenced by Rayman Origins (which I happened to be playing...this was originally supposed to be a much simpler game!).<br/><br/>'+
				'Video(s):<br/>'+
				'<a href="http://www.youtube.com/watch?v=HrmJbr3pLGY">Nov 2012</a><br/>'
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
		"text":'Everyone must make their own tetris clone at least once in their life. I mine in one weekend while taking cse 143. '+
				'WARNING: giant while loop alert<br/><br/>'+
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
		"name":"JGJ2",
		"button":"jgj2_button.png",
		"banner":"jgj2_banner.png",
		"link":"http://spotcos.com/misc/JGJ2.swf",
		"category":"games",
		"text":'2d platformer tech demo with box2d and flixel. And let me tell you, that isn\'t a pretty stack. \'O\' to change character, \'P\' to reverse gravity. '+
				'<a href="https://github.com/spotco/Jump-Die-Create-2">source here</a>'
	},
	{
		"name":"ScrapePlayer",
		"button":"scrape_button.png",
		"banner":"scrape_banner.png",
		"link":"/misc/scrapeplayer/scrapeplayer.swf",
		"category":"misc",
		"text":'So I had a great idea as I was grading finals (and listening to turntable.fm). What if I streamed my own music from my own webserver? '+
				'So I made this, a web crawler and music streamer in flash. The "command-line" gui is pretty shitty, so it\'s basically something that only I can(or want) use.<br/><br/>'+
				'<a href="https://github.com/spotco/ScrapePlayer">source here</a>'
	},
	{
		"name":"CSE 190m Extras",
		"button":"extra_button.png",
		"banner":"extra_banner.png",
		"link":"/pdf",
		"category":"school_teaching",
		"text":'My favorite part about TA-ing cse190 was doing lectures about extra material. '+
				'I`d go over all sorts of exciting web technologies such as node.js, css transforms, bootstrap and much more. '+
				'All the materials I used is saved here.'
	},
	{
		"name":"ASHAnet projects",
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
		"text":'Challenge: lets see how much performance we can get out of html canvas no frameworks final destination. '+
				'Answer: not that much. Also done in typescript. Will work on again whenever I get time. Arrow keys to move, space to shoot. <br/>'+
				'<a href="https://github.com/spotco/TShooter">source here</a>'
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