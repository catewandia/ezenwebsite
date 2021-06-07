<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
	.chatbot{
		width:300px;
		height:428px;
		background:url('fabric4.jpg');
		z-index:2;
		color:white;
		display:none;
		border-radius:10px;
		bottom: 60px;
		right: 10px;
		float:right;
		position:fixed;
		font-size:12px
		font-family:cursive;
	}
	.chathead{
		border-radius:10px;
		background:#c21a1a;
		width:300px;
		height:4.5rem;
		margin-top:-3.8rem;
	}
	.chatheaderimg{
		border-radius:50%;
		width:50px;
		height:50px;
	}
	.faqs{
		font-size:12px;
	}
	.meee{
		text-align:left;
		width:300px;
		height:300px;
		overflow-y:scroll;
		font-size:12px;
		
	}
	.loadmeso{
		z-index:1;
		position:fixed;
		bottom: 5px;
		right: 10px;
		height:20px;
		float:right;
		font-size:10px;
	}
	.meee::-webkit-scrollbar {
		width:10px;
	}
</style>
<script>
		var mar = document.getElementById('semail').value;
			function disp(){
				document.getElementById('chatbot').style.display = "block";
				document.getElementById('btn').style.display = "none";
				document.getElementById('closer').style.display = "block";
				document.getElementById('meee').innerHTML = "";
				firsttimeopen();
			}
			
			function firsttimeopen(){
				//document.getElementById('meee').innerHTML +="<br><button style='z-index:1;float:left;background:white;color:red;max-width:300px;height:400px;'>Enter Email</button><br>";
			
				document.getElementById('meee').innerHTML +="<center><section id='datacollect' name='datacollect' style='background:#c21a1a;width:300px;z-index:1;color:white;'>Enter Yor Email to proceed to a Chat session<br><br>Email<br><br><input type='email' name='semail' id='semail' style='width:15rem;border-radius:10px;'required><br><br>Phone<br><br><input type='number' id='number' name='number' style='width:15rem;border-radius:10px;'><br><br><button onclick='opencha()'>Submit</button></section></center>";
				
					document.getElementById('send').style.display='none';//document.getElementById('meee').innerHTML +="<br><img src='avatar.png' style='height:2rem;width:2rem;border-radius:50%;float:left;'><button style='float:left;background:rgba(0,0,0,0.5);color:white;max-width:9rem;height:auto;min-height:2rem;'>Welcome to Ezsen Financials how may we be of service today</button><br>";
			}
			function opencha(){
				var mar = document.getElementById('semail').value;
				//var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
				//if(mar.value.match(mailformat)){
				//		document.getElementById('semail').innerHTML = "";
				//		alert('please enter a valid email');
			//	}else{
				//	console.log('not blank');
				var nume = document.getElementById('number').value;
				document.getElementById('datacollect').style.display='none';
				document.getElementById('send').style.display='block';
				document.getElementById('meee').innerHTML +="<br><img src='avatar.png' style='height:2rem;width:2rem;border-radius:50%;float:left;'><button style='float:left;background:rgba(0,0,0,0.5);color:white;max-width:9rem;height:auto;min-height:2rem;'>Welcome to Ezen Financials how may we be of service today</button>"
				document.getElementById('meee').innerHTML +="<br>";
				console.log(mar,nume);
				//}
			}
			function dis(){
				document.getElementById('chatbot').style.display = "none";
				document.getElementById('btn').style.display = "block";
				document.getElementById('closer').style.display = "none";
			}
			function whatis(){
				document.getElementById('meee').innerHTML +="<br>";
				document.getElementById('meee').innerHTML +="<br><img src='avatar.png' style='height:2rem;width:2rem;float:right;border-radius:50%;'><button style='float:right;background:lightgreycolor:white;width:auto-fit;max-width:9rem;height:auto;min-height:2rem;'>What is ezen financials</button><br><br>\n";
				document.getElementById('meee').innerHTML +="<br>";
				console.log('what is');
				document.getElementById('meee').innerHTML +="<br><img src='avatar.png' style='height:2rem;width:2rem;border-radius:50%;float:left'><button style='float:left;background:rgba(0,0,0,0.5);color:white;width:auto-fit;max-width:9rem;height:auto;min-height:2rem;transition-delay: 2s;'>We are a tech company specializing in financial products suited for Real Estate and Property Management </button><br><br>\n";
				document.getElementById('meee').innerHTML +="<br>";
				scroll();
			}
			function located(){
				document.getElementById('meee').innerHTML +="<br><br><img src='avatar.png' style='height:2rem;width:2rem;float:right;border-radius:50%;'><button style='float:right;background:lightgreycolor:white;width:auto-fit;max-width:9rem;height:auto;min-height:2rem;'>Where is Ezen Located</button><br><br>";
				document.getElementById('meee').innerHTML +='<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8218822784856!2d36.81870451411256!3d-1.2805462359795425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d4bf65dc8f%3A0xe534a1f3b7f619!2sTwiga%20Towers%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1619588472856!5m2!1sen!2ske" width="100%" height="290px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>';
				console.log('located');
				document.getElementById('meee').innerHTML +="<br><img src='avatar.png' style='height:2rem;width:2rem;float:left;border-radius:50%;'><button style='float:left;background:rgba(0,0,0,0.5);color:white;width:auto-fit;height:auto;min-height:2rem;'>7<sup>nth</sup>floor<br>Twiga Towers<br>Muranga Rd - Nairobi<br> </button><br><br>";
				scroll();
			}
			
			function products(){
				console.log('products');
				document.getElementById('meee').innerHTML +="<br>";
				document.getElementById('meee').innerHTML +="<br><img src='avatar.png' style='height:2rem;width:2rem;float:right;border-radius:50%;'><button style='float:right;background:lightgreycolor:white;width:auto-fit;max-width:9rem;height:auto;min-height:2rem;'>Ezen Products</button><br><br>";
				document.getElementById('meee').innerHTML +="<br>";
				document.getElementById('meee').innerHTML +="<br><img src='avatar.png' style='height:2rem;width:2rem;float:left;border-radius:50%;'><button style='float:left;background:rgba(0,0,0,0.5);color:white;width:auto-fit;height:auto;min-height:2rem;'>Some of our Products include:<br>Finance<br>Sacco MAnagement<br>Property management</button><br><br>";
				document.getElementById('meee').innerHTML +="<br>";
				scroll();
			}
			function cont(){
				document.getElementById('meee').innerHTML +="<br>";
				document.getElementById('meee').innerHTML +="<br><img src='avatar.png' style='height:2rem;width:2rem;float:right;border-radius:50%;'><button style='float:right;background:lightgreycolor:white;width:auto-fit;max-width:9rem;height:auto;min-height:2rem;'>How can i contact you</button><br><br>";
				console.log('contact clicked');document.getElementById('meee').innerHTML +="<br>";
				document.getElementById('meee').innerHTML +="<br><img src='avatar.png' style='height:2rem;width:2rem;float:left;border-radius:50%;'><button style='float:left;background:rgba(0,0,0,0.5);color:white;width:auto-fit;height:auto;min-height:2rem;'><br>Email:enquiry@ezenfinancials.com<br><br>Email:solutions@ezenfinancials.com<br><br>Phone:(+254)729 523 191<br><br>Phone:(+254)720 893 792<br></button><br><br>";
				document.getElementById('meee').innerHTML +="<br>";
				scroll();
			}
			function messagechat(){
				
				if(document.getElementById('messo').value == "" ){
				}else{
					document.getElementById('meee').innerHTML +="<br>";
					document.getElementById('meee').innerHTML += "<br><img src='avatar.png' style='height:2rem;width:2rem;float:right;border-radius:50%;'><button style='float:right;background:lightgreycolor:white;width:auto-fit;max-width:9rem;height:auto;min-height:2rem;'>" + document.getElementById('messo').value + "</button><br><br>";
					document.getElementById('meee').innerHTML +="<br>";
					chat();
					document.getElementById('meee').focus;
					document.getElementById('messo').value="";
					scroll();
				}
				
			}
			function scroll(){
				var myDiv = document.getElementById("meee");
				myDiv.scrollTop = myDiv.scrollHeight;
			}
			/*function chatemail(){
				var str = document.getElementById('messo').value;
				if (str.length == 0) {
					 document.getElementById("messo").innerHTML = "";
					return;
				} else {
					var xmlhttp = new XMLHttpRequest();
					xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						 document.getElementById("meee").innerHTML += this.responseText;
						 document.getElementById("meee").value +=document.getElementById("meee").innerHTML += this.responseText;
						 console.log('sent');
					}
				};
				xmlhttp.open("POST", "chatemail.php?message=" + str, true);
				xmlhttp.send();
				}
			}*/
			
			function chat(){
				var reply = document.getElementById('messo').value;
				if(reply == "hello" || reply == "hi" || reply == "hae"){
					document.getElementById('meee').innerHTML += "<br><img src='avatar.png' style='height:2rem;width:2rem;float:left;border-radius:50%;'><button style='float:left;background:rgba(0,0,0,0.5);color:white;width:auto-fit;max-width:9rem;height:auto;min-height:2rem;'>hi</button><br><br>";
					console.log(mar);
				}
				if(reply == "how are you" || reply== "how you doing" || reply == "how are you doing"){
					document.getElementById('meee').innerHTML += "<br><img src='avatar.png' style='height:2rem;width:2rem;float:left;border-radius:50%;'><button style='float:left;background:rgba(0,0,0,0.5);color:white;width:auto-fit;max-width:9rem;height:auto;min-height:2rem;'>i am good and you</button><br><br>";
				}
				if(reply == "are you sick"){
					document.getElementById('meee').innerHTML += "<br><img src='avatar.png' style='height:2rem;width:2rem;float:left;border-radius:50%;'><button style='float:left;background:rgba(0,0,0,0.5);color:white;width:auto-fit;max-width:9rem;height:auto;min-height:2rem;'>am feeling fine what about you</button><br><br>";
				}
				if(reply == "who is this" || reply == "what is your name" || reply == "who are you"){
					document.getElementById('meee').innerHTML += "<br><img src='avatar.png' style='height:2rem;width:2rem;float:left;border-radius:50%;'><button style='float:left;background:rgba(0,0,0,0.5);color:white;width:auto-fit;max-width:9rem;height:auto;min-height:2rem;'>I am an Ezen finance assistance chatbot</button><br><br>";
				}
				if(reply == "what is ezen" || reply == "what is Ezen" || reply == "what is EZEN" || reply == "What is ezen"){
					document.getElementById('meee').innerHTML += "<br><img src='avatar.png' style='height:2rem;width:2rem;float:left;border-radius:50%;'><button style='float:left;background:rgba(0,0,0,0.5);color:white;width:auto-fit;max-width:9rem;height:auto;min-height:2rem;'>We are a tech company specializing in financial products suited for Real Estate and Property Management</button><br><br>";
				}else{
					chatemail();
					//document.getElementById('meee').innerHTML += "<br><img src='avatar.png' style='height:2rem;width:2rem;float:left;border-radius:50%;'><button style='float:left;background:rgba(0,0,0,0.5);color:white;width:auto-fit;max-width:9rem;height:auto;min-height:2rem;'>i dont get the message</button><br><br>";
				}
				
			}
			/*function  chatemail(){
				var http = new XMLHttpRequest();
				var url = 'chatemail.php';
				var params = document.getElementById('messo').value;
				http.open('POST', url, true);

				//Send the proper header information along with the request
				http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

				http.onreadystatechange = function() {//Call a function when the state changes.
					if(http.readyState == 4 && http.status == 200) {
						alert(http.responseText);
					}
				}
				http.send(params);
			}*/
			/*function scrollingup(){
				document.getElementById('chatbot').style.position='fixed';
				document.getElementById('loadmeso').style.position='absolute';
			}*/
				function chatemail(){
			    var xhr = new XMLHttpRequest();
			   	var str = document.getElementById('messo').value;
xhr.open('POST', 'chatemail.php', true);
xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
xhr.onload = function () {
    // do something to response
    console.log(this.responseText);
};
xhr.send('message=' + str);
console.log(str);
            }
</script>
<section id="chatbot" class="chatbot">
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
	<div class="meee" id="meee">
		
	</div>
	<div class="send" id="send">
		<input type="text" name="messo" id="messo" placeholder="type your query here" style="width:16rem;height:2rem;font-size:12px;font-family:popins;">
		<button type="submit" name="send" value="send" onclick="messagechat()" style="background:green;">
			<i class="fa fa-paper-plane" aria-hidden="true" ></i>
		</button>
	</div>
</section>
<section class="loadmeso" id="loadmeso" >
	<button style="border:none;background:none; width: 80px;" id="btn" onclick="disp()">
		<img src="download.png" style="width:50px; height:50px;" class="openmesoimg">
	</button>
	<button style="border:none;background:none;display:none; width: 80px;" id="closer" onclick="dis()">
		<img src="close.png" style="border-radius:50%;width:30px;height:30px;">
	</button>
</section>