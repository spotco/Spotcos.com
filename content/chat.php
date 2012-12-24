<script src="https://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js" type="text/javascript"></script>
<script>
var jsdump;
jQuery(function(){
	if (jsdump && jsdump.destroy ) {
		jsdump.destroy();
	}
	jsdump = new Object();
	jsdump.refreshMsgDisplay = setInterval(updateDisplay, 2000);
	jsdump.msgold = "";
	jsdump.destroy = function() {
		clearInterval(jsdump.refreshMsgDisplay);
	};
	updateDisplay();
	$("submitbutton").observe("click",sendMSG);
});

function updateDisplay() {
	new Ajax.Request('chat/getchat.php?notags=true', {
		method: 'post',
		onSuccess: refreshList
	});
}

function refreshList(e) {
	if (jsdump.msgold != e.responseText) {
		$("viewmessage").innerHTML = e.responseText.substring(0,e.responseText.length-1);
		jsdump.msgold = e.responseText;
		$("viewmessage").scrollTop = $("viewmessage").scrollHeight;
	}
}

function sendMSG(e) {
	e.stop();
	new Ajax.Request('chat/sendchat.php', {
		method: 'post',
		onSuccess: updateDisplay,
		parameters: {name:$("namefield").value, msg:$("entryfield").value}
	});

	$("entryfield").value = "";
}

</script>


<h2>Chat!</h2>
<p>This is an <b>unmoderated</b> message board, so post whatever you'd like!</p>
<hr />


<div class="row">
	<div class="span12">
		<textarea id="viewmessage" style="width:100%;height:200px;">
Please enable javascript to see this content!
		</textarea>
	</div>
</div>


<div class="row">
	<div class="span8">
		Msg:<input type="text" id="entryfield" style="width:100%" />
	</div>
	<div class="span3">
		Name:<input type="text" id="namefield" style="width:100%" />
	</div>
	<div class="span1">
		<button id="submitbutton" style="width:100%;height:38px;margin-top:15px;">Send</button>
	</div>
</div>



