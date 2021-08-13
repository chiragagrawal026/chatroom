<?php
include "db_connect.php";
$roomname = "aryan";
?>

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
	<head>
		<title>Chat</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="a.css">
        <script type="text/javascript" src="a.js"></script>
	</head>
	<body>
		<div class="container-fluid h-100">
			<div class="row justify-content-center h-100">
				<div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header">
					<div style="color:white;">#RoomName</div>
						<div class="input-group">
							<input type="text" placeholder="Search..." name="" class="form-control search">
							<div class="input-group-prepend">
								<span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
							</div>
						</div>
					</div>
					<div class="card-body contacts_body">
						<ui class="contacts">
						<li class="active">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span>Khalid</span>
									<p>Kalid is online</p>
								</div>
							</div>
						</li>
						<li>
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="https://2.bp.blogspot.com/-8ytYF7cfPkQ/WkPe1-rtrcI/AAAAAAAAGqU/FGfTDVgkcIwmOTtjLka51vineFBExJuSACLcBGAs/s320/31.jpg" class="rounded-circle user_img">
									<span class="online_icon offline"></span>
								</div>
								<div class="user_info">
									<span>Taherah Big</span>
									<p>Taherah left 7 mins ago</p>
								</div>
							</div>
						</li>
						<li>
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="https://i.pinimg.com/originals/ac/b9/90/acb990190ca1ddbb9b20db303375bb58.jpg" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span>Sami Rafi</span>
									<p>Sami is online</p>
								</div>
							</div>
						</li>
						<li>
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="http://profilepicturesdp.com/wp-content/uploads/2018/07/sweet-girl-profile-pictures-9.jpg" class="rounded-circle user_img">
									<span class="online_icon offline"></span>
								</div>
								<div class="user_info">
									<span>Nargis Hawa</span>
									<p>Nargis left 30 mins ago</p>
								</div>
							</div>
						</li>
						<li>
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="https://static.turbosquid.com/Preview/001214/650/2V/boy-cartoon-3D-model_D.jpg" class="rounded-circle user_img">
									<span class="online_icon offline"></span>
								</div>
								<div class="user_info">
									<span>Rashid Samim</span>
									<p>Rashid left 50 mins ago</p>
								</div>
							</div>
						</li>
						</ui>
					</div>
					<div class="card-footer"></div>
				</div></div>
				<div class="col-md-8 col-xl-6 chat">
					<div class="card">
						<div class="card-header msg_head">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span>Chat with Khalid</span>
									<p>1767 Messages</p>
								</div>
								<div class="video_cam">
									<span><i class="fas fa-video"></i></span>
									<!--<span><i class="fas fa-phone"></i></span>-->
								</div>
							</div>
							<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
							<div class="action_menu">
								<ul>
									<li><i class="fas fa-user-circle"></i> View profile</li>
									<li><i class="fas fa-users"></i> Add to close friends</li>
									<li><i class="fas fa-plus"></i> Add to group</li>
									<li><i class="fas fa-ban"></i> Block</li>
								</ul>
							</div>
						</div>
						<div class="card-body msg_card_body">
							<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
								</div>
								<div class="msg_cotainer">
									Hi'I am khalid.
									<span class="msg_time">8:40 AM, Today</span>
								</div>
							</div>
							<div class="d-flex justify-content-end mb-4">
								<div class="msg_cotainer_send">
									Hi Khalid i am good tnx how about you?
									<span class="msg_time_send">8:55 AM, Today</span>
								</div>
								<div class="img_cont_msg">
							<img class="rounded-circle user_img_msg">
								</div>
							</div>

							<div class="d-flex justify-content-start mb-4">
								<div class="img_cont_msg">
									<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
								</div>
								<div class="msg_cotainer">
									Bye, see you
									<span class="msg_time">9:12 AM, Today</span>
								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="input-group">
								<div class="input-group-append">
									<span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
								</div>
								<textarea name="usermsg" class="form-control type_msg" id="usermsg" placeholder="Type your message..."></textarea>
								<div class="input-group-append">
									<span class="input-group-text send_btn"><i name="submitmsg" id="submitmsg" class="fas fa-location-arrow"></i></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<script type="text/javascript">
// check for new messages every 1 second
setInterval(runFunction, 1000);
function runFunction()
{
	$.post("htcont.php", {room: '<?php echo $roomname ?>'},
	function(data, status)
	{
		document.getElementsByClassName('card-body msg_card_body')[0].innerHTML = data;
	});
};

//code to send message via Enter Key press
var input = document.getElementById("usermsg");
input.addEventListener("keyup", function(event) {
if (event.keyCode === 13) {
    event.preventDefault();
    document.getElementById("submitmsg").click();
 }
});

   //if user click on send button
   $('#submitmsg').click(function(){
   	var clientmsg = $("#usermsg").val();
   $.post("postmsg.php", {text: clientmsg , room:'<?php echo $roomname ?>', ip: '<?php echo $_SERVER['REMOTE_ADDR'] ?>'},
   function(data, status){
	   document.getElementsByClassName('card-body msg_card_body')[0].innerHTML = data;});
	   $('#usermsg').val('');
	   return false; 
});
</script>
	</body>
</html>
