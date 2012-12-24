<style>
.arrow {
	margin-top:230px;
}
.center {
	text-align: center
}
#imgtext {
	height:100px;
	overflow:auto;
}
#container {
    width: auto;
    height: 500px;
    background-color: black;
    border: 1px solid black;
    color: white;   /* for error messages */
}
</style>

<script>
var PICS = [
	{
		"deepzoomxml":"10.xml",
		"url":"10.jpg",
		"title":"Goober title page",
		"text":"First bit of art I did for Goober. Decided the whole color scheme of the game."
	},
	{
		"deepzoomxml":"2.xml",
		"url":"2.jpg",
		"title":"Goober bonus art 3",
		"text":"Concept art for world 1 of Goober. Shows after beating world 3."
	},
	{
		"deepzoomxml":"3.xml",
		"url":"3.jpg",
		"title":"Misha",
		"text":"Misha pls go"
	},
	{
		"deepzoomxml":"4.xml",
		"url":"4.jpg",
		"title":"Goober bonus art 2",
		"text":"Concept art for world 2 of Goober. Shows after beating world 2."
	},
	{
		"deepzoomxml":"5.xml",
		"url":"5.jpg",
		"title":"Goober bonus art 1",
		"text":"Concept art for world 1 of Goober. Shows after beating world 1."
	},
	{
		"deepzoomxml":"6.xml",
		"url":"6.jpg",
		"title":"Background for Goober world 2",
		"text":"Mountain-y background for Goober world 2. Took some heavy inspiration from some other games for this."
	},
	{
		"deepzoomxml":"7.xml",
		"url":"7.jpg",
		"title":"UW Daily Arab Spring comic",
		"text":"Comic I did as the Arab Spring was starting. Yes, it's pretty pretentious."
	},
	{
		"deepzoomxml":"8.xml",
		"url":"8.jpg",
		"title":"Background for Goober world 3",
		"text":"Ruined city background for world 3. Having the most experience, this one turned out the best. I do regret it was in the world most people didn't play though :("
	},
	{
		"deepzoomxml":"9.xml",
		"url":"9.jpg",
		"title":"UW Daily april fools comic",
		"text":"Last comic I did for the UW Daily. Never got published, HMM WONDER WHY"
	},
	{
		"deepzoomxml":"1.xml",
		"url":"1.jpg",
		"title":"yogscast",
		"text":"I drew this a looooong time ago, back when I watched yogscast and when they did WoW. It got featured on their site and in their video."
	},
	{
		"deepzoomxml":"11.xml",
		"url":"11.jpg",
		"title":"Background for Goober world 1",
		"text":"First background I did. Learned how to ``digital paint'' through doing this."
	},
	{
		"deepzoomxml":"12.xml",
		"url":"12.jpg",
		"title":"UW Daily wizard comic",
		"text":"Based on true story. words B^U"
	},
	{
		"deepzoomxml":"13.xml",
		"url":"13.jpg",
		"title":"UW Daily WoW Cataclysm comic",
		"text":"Also based on true story, and real roommate."
	},
	{
		"deepzoomxml":"19.xml",
		"url":"19.jpg",
		"title":"GIMMIE THE CHOCOLATE DAVID",
		"text":"Made for friend's birthday. Ugh, not my best work. Those colors..."
	},
	{
		"deepzoomxml":"16.xml",
		"url":"16.jpg",
		"title":"Douglas McArthur",
		"text":"Did looong time ago for history project. This was about as good as I ever got at drawing."
	},
	{
		"deepzoomxml":"17.xml",
		"url":"17.jpg",
		"title":"UW Daily Social Media comic",
		"text":"pretentious to the max also wordwordswords B^U"
	},
	{
		"deepzoomxml":"18.xml",
		"url":"18.jpg",
		"title":"UW Daily Lecture",
		"text":"probably my favorite, based on true story"
	}
];
</script>

<script type="text/javascript" src="/content/seadragon-min.js"></script>
<script type="text/javascript">
    var viewer;

function init() {
    viewer = new Seadragon.Viewer("container");

	var cur_pic = 0;
	var change_pic = function(){
		viewer.openDzi("/content/deepzoom_img/"+PICS[cur_pic].deepzoomxml);
		$("#imgtitle").text(PICS[cur_pic].title);
		$("#imgtext").text(PICS[cur_pic].text);
	};

	$("#prev_arrow").click(function(){
		cur_pic = cur_pic-1 >= 0 ? cur_pic-1 : PICS.length-1;
		change_pic();
	}).hover(function(){
		$("#prev_arrow").attr({"src":"content/artimg/arrow_left_select.png"});
	},function(){
		$("#prev_arrow").attr({"src":"content/artimg/arrow_left.png"});
	});

	$("#next_arrow").click(function(){
		cur_pic = cur_pic+1 >= PICS.length ? 0 : cur_pic+1;
		change_pic();
	}).hover(function(){
		$("#next_arrow").attr({"src":"content/artimg/arrow_right_select.png"});
	},function(){
		$("#next_arrow").attr({"src":"content/artimg/arrow_right.png"});
	});

	$("a .stop").click(function(){
		return false;
	});

	change_pic();
}

Seadragon.Utils.addEvent(window, "load", init);
</script>

<noscript>
	Please enable javascript to see this content!
</noscript>

<div class="row" >
	<div class="span1 arrow">
		<a href="#" class="stop">
			<img src="content/artimg/arrow_left.png" id="prev_arrow" />
		</a>
	</div>
	<div class="span10" id="disp_window">
		<div id="container">
    	</div>
	</div>
	<div class="span1 arrow">
		<a href="#" class="stop">
			<img src="content/artimg/arrow_right.png" id="next_arrow" />
		</a>
	</div>
</div>

<div class="row">
	<div class="span8 offset2">
		<h2 class="center" id="imgtitle"></h2>
		<hr />
		<p class="center" id="imgtext"></p>
	</div>
</div>

<br />
<br />
<br />
<p style="text-align:center; font-size:10px;">Art gallery powered by Seadragon Ajax. Special thanks to <a href="http://www.gasi.ch/">dgasienica</a></p>