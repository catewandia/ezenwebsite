<html>
	<head>
	<script>
		function chatemail(){
			var str = document.getElementById('messo').value;
			var username = document.getElementById('username').value;
			var useremail = document.getElementById('useremail').value;
			
			console.log(str,username,useremail);
			var xhr = new XMLHttpRequest();
			   	
			xhr.open('POST', 'chatemail.php', true);
			xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhr.onload = function () {
				// do something to response
				//console.log(this.responseText);
				alert(this.responseText);
			};
			xhr.send('message=' + str, 'useremail=' + useremail, 'username=' + username);
			//console.log(str);
			document.getElementById('messagesent').style.display='block';
				document.getElementById('quoteform').style.display='none';
		}
		function dis(){
				document.getElementById('chatbot').style.display = "none";
				document.getElementById('btn').style.display = "block";
				document.getElementById('closer').style.display = "none";
			}
			function disp(){
				document.getElementById('chatbot').style.display = "block";
				document.getElementById('btn').style.display = "none";
				document.getElementById('closer').style.display = "block";
				document.getElementById('meee').innerHTML = "";
				
			}
</script>

<style>
	*{
		outline:none;
	}
	.loadmeso{
		z-index:1;
		position:fixed;
		bottom: 25px;
		right: 10px;
		height:20px;
		float:right;
		font-size:10px;
	}
	.chatbot{
		width:320px;
		height:70%;
		z-index:2;
		display:none;
		border-radius:10px;
		bottom: 60px;
		right: 10px;
		float:right;
		position:fixed;
		font-size:12px
		font-family:cursive;
		background:lightgrey;
	}
	.chathead{
		justify-content:center;
		align-items:center;
		color: rgb(255, 255, 255);
		background: linear-gradient(135deg, rgb(79, 172, 254) 0%, rgb(0, 242, 254) 100%);
		height:6.5rem;
		margin-top:-3.8rem;
		width:-webkit-fill-available;
		padding:10px;
	}
	.chatheaderimg{
		border-radius:50%;
		width:50px;
		height:50px;
	}
	.faqs{
		font-size:12px;
		display:inline-flex;
		border:none;
		background:#c21a1a;
		width:-webkit-fill-available;
		display:none;
		height:2rem;
	}
	input[type=text], input[type=email]{
		width:-webkit-fill-available;
		min-height:3rem;
		margin:0px 8px 2px 8px;
		border:none;
	}
	input:focus{
		outline: none;
	}
	 input[type=button]{
		background:#c21a1a;
		color:#fff;
		border-radius:10px;
		outline:none;
		border:none;
	}
	button{
		margin:2px;
		background:none;
		color: #fff;
		border: none;
		margin:5px;
		border-left:2px solid white;
		cursor: pointer;
		text-align: center;
	}
	textarea{
		width:-webkit-fill-available;
		margin:0px 8px 2px 8px;
		border:none;
		min-height:14rem;
	}
	.details{
		display:flex;
		flex-direction:column;
	}
	.meee{
		text-align:left;
		width:-webkit-fill-available;
		max-height:300px;
		overflow-y:scroll;
		font-size:12px;	
	}		
	.meee::-webkit-scrollbar {
		width:10px;
	}
	.one{
		padding:3px;
	}
	.messagesent{
	    display:none;
	}
	@media screen and (max-width: 800px) {
		.chatbot{
			width:100%;
			margin-left:5px;
		}
		.quoteform{
			width:100%;
		}
		.chathead{
			color: rgb(255, 255, 255);
			background: linear-gradient(135deg, rgb(79, 172, 254) 0%, rgb(0, 242, 254) 100%);
			height:5rem;
			width:-webkit-fill-available;
		}
		.one{
			padding:0px;
			margin:0px;
		}
	}
		</style>
	</head>
	<body>
		<section id="chatbot" class="chatbot">
			<form method="POST" action="" class='quoteform' id='quoteform' >
				<div id="chathead" class="chathead">
					<img src="ezen logo.jpg" class="chatheaderimg">
					Talk to us
				</div>
				<div class="faqs" id="faqs">			
					<button onclick="whatis()" style="font-size:12px;">What is Ezen </button>
					<button onclick="cont()" style="font-size:12px;">Contact us</button>
					<button onclick="located()" style="font-size:12px;">Location</button>
					<button onclick="products()" style="font-size:12px;"> Products</button>
				</div>
				
				<div class='one'>
					<input type='email' placeholder="email@example.com" id='useremail'required><br>
				</div>
				<div class='one'>
					<input type='text' placeholder="your names" id='username'><br>
				</div>
				<div class='one'>
					<textarea rows="4" cols="50" placeholder="Write your Message here..." id='messo' name="messo"></textarea>
				</div>
				<center><input type="button" name="send" value="Send Mail" onclick='chatemail()' style="width:10rem;height:2rem;"></center>
				<div class="meee" id="meee"></div>
			</form>
		</section>
		<section class="loadmeso" id="loadmeso" >
	<button style="border:none;background:none; width: 80px;" id="btn" onclick="disp()">
		<img src="download.png" style="width:50px; height:50px;" class="openmesoimg">
	</button>
	<button style="border:none;background:none;display:none; width: 80px;" id="closer" onclick="dis()">
		<img src="close.png" style="border-radius:50%;width:30px;height:30px;">
	</button>
	<section class='messagesent' id='messagesent'>
	    your message has been sent
	</section>
</section>
	</body>
	
</html>