<!-- <img id="chat-circle" class="chatbot" src="bot.GIF" alt="Chat bot"> -->
<img id="chat-circle" class="chatbot"
		src="./images/robot.png" alt="Chat bot">

	<div id="chat-overlay"></div>

	<div style="z-index:10;" class="chat-box">
		<div class="chat-box-header">
			ChatBot
			<span class="chat-box-toggle"><i class="material-icons">close</i></span>
		</div>
		<div class="chat-box-body">
			<div class="chat-box-overlay">
			</div>
			<div class="chat-logs">

			</div>
			<!--chat-log -->
		</div>
		<div class="chat-input">
			<form>
				<input type="text" id="chat-input" placeholder="Send a message..." />
				<button type="submit" class="chat-submit" id="chat-submit"><i class="material-icons">send</i></button>
			</form>
		</div>
	</div>