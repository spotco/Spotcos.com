<h1>MoeMoeRush2 - Oculus Rift + 2 Wiimotes</h1>
<p>Posted by SPOTCO on April 2015</p>
<hr/>
Over the past two months, made MoeMoeRush2 (sequel to <a href="http://spotco.itch.io/moemoerush">MoeMoeRush!!</a>) for a school-related project. 
It's got some interesting tech - was basically given free reign pursue any audio-related idea, and to use all the crazy gadgets in the lab.
<br/>
<br/>
Here's some screenshots of the final game:
<br/>
<?php show_image("/content/blogimg/mm2_ss1.png",300,"margin:10px"); ?>
<?php show_image("/content/blogimg/mm2_ss2.png",300,"margin:10px"); ?>
<?php show_image("/content/blogimg/mm2_ss4.png",300,"margin:10px"); ?>
<?php show_image("/content/blogimg/mm2_ss5.png",300,"margin:10px"); ?>
<br/>
<br/>

Demo video:
<br/>
<iframe width="560" height="315" style="margin:10px" src="https://www.youtube.com/embed/iG5trMf0crc" frameborder="0" allowfullscreen></iframe>
<br/>
<br/>
And (OSX-only)<br/><br/>
<div style="font-size:30px">
	<a href="http://spotcos.com/moemoerush2/MoeMoeRush2.zip">Game Download</a> 
	/
	<a href="https://github.com/spotco/moemoerush2-unity5">Unity Source</a> 
</div>
<br/>
<hr/>
The game was designed for the Oculus Rift (now works on both DK1 and DK2!), and to be controlled by two Wiimotes (both with Wii MotionPlus).
This super specific hardware combination basically prevents most people from playing this game, 
but if you've got all of the above (or at least one Wiimote with MotionPlus)
this is how you set everything up (it's got a couple of steps).
<br/>
<br/>
Get two Wiimotes with Wii MotionPlus attachment:<br/>
<?php show_image("/content/blogimg/mm2_two_wiimotes.png",300,"margin:10px"); ?>
<br/><br/>
Run the WiimoteSocketApp (included in zip), press "Find Wiimote":<br/>
<?php show_image("/content/blogimg/mm2_wiimotesocketapp.png",300,"margin:10px"); ?>
<br/><br/>
After pressing "Find Wiimote", press the Sync button on a Wiimote. Repeat until both are connected.<br/>
<?php show_image("/content/blogimg/mm2_wiimote_sync.png",300,"margin:10px"); ?>
<br/><br/>
Start the MoeMoeRush2 app with Oculus Rift attached, pick a uncompressed WAV file to play.<br/>
<?php show_image("/content/blogimg/mm2_file_select.png",300,"margin:10px"); ?>
<br/><br/>
After it loads, alt+tab to WiimoteSocketApp and press "Reconnect Unity". Hold the Wiimotes still until both are connected and calibrated.<br/>
<?php show_image("/content/blogimg/mm2_ready_state.png",300,"margin:10px"); ?>
<br/><br/>
For best results, put a (powered) Wii sensor bar directly infront of the player. 
I don't use the IR values to track (that's what the MotionPlus is for), but it'll recenter when facing the IR bar (which is necessary, since the MotionPlus has a lot of drift).<br/>
<?php show_image("/content/blogimg/mm2_sensor_bar_setup.png",300,"margin:10px"); ?>
<br/><br/>
This was a whole lot of fun in that I was able to create the polished, VR-focused game that I've always been meaning to do.
However, I was really surprised by how buggy the latest DK2-Compatible Oculus Unity SDK was (wrong colors, un-disable-able warning message, program hang if enable+disable multiple times).
And, I'm also convinced that the Wiimote (even with MotionPlus) is unusable for any serious (no discrepancy, one-to-one movement) VR application.
In retrospect, would have liked to use something like <a href="http://sixense.com/wireless">the Stem Sixsense</a> which would have probably proved a much better user experience.
<br/><br/>
Finally, special thanks to Yunyi and Allen for their work, and Ciera and Yasu for their art + voice acting skills.
In addition, the project wouldn't have been possible without the <a href="http://code.google.com/p/wjoy/">WJoy Library</a>,
and this really great
<a href="http://wiibrew.org/wiki/Wiimote">Wiibrew Wiimote spec</a>.
<br/>
<hr/>
Also started work on a new game, Hanoka Mobile. So pretty!
<br/>
<?php show_image("/content/blogimg/hm_above_ss.png",300,"margin:10px"); ?>
<?php show_image("/content/blogimg/hm_below_ss.png",300,"margin:10px"); ?>
<br/>
Coming out this summer.

<?php
function show_image($url,$width,$style="") {
	?>
	<a href="<?=$url?>">
	<img class="alignnone size-medium wp-image-427820 img-polaroid" style="<?=$style?>" src="<?=$url?>" alt="<?=$url?>" width="<?=$width?>"/>
	</a>
	<?php
}
?>