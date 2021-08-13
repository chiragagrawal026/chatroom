<!DOCTYPE html>
<html>

<head>
<title>Anonymous Meet</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<style>
.text-block {
  position: absolute;
  bottom: 170px;
  right: 20px;
  background-color: white;
  color: black;
  padding-top: 20px;
  padding-left: 40px;
  padding-right: 40px;
  margin-left: 350px;
  border: black;
  border-radius: 20px;
}
</style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Aryan's site</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="tut2boots.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Go to sale</a>
        </li>
        
        <li class="nav-item active">
          <a class="nav-link" href="contact.html">Contact Us <span class="sr-only">(current)</span></a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  

<div class="w3-content w3-section">
  <img class="mySlides" src="img/Train carriage in Astoria OR.jpg" width="1300px" height="570px">
  <img class="mySlides" src="img/Sunset Paris France.jpg" width="1300px" height="570px">
  <img class="mySlides" src="img/Sunset during a storm over Lake Champlain VT.jpg" width="1300px" height="570px">
  <img class="mySlides" src="img/When the graffiti titles the picture for you.jpg" width="1300px" height="570px">
</div>
<div class="text-block">
  <h4>Join a Meeting:)</h4>
  <button class="btn btn-lg btn-primary btn-block" id="" onclick="">Generate a Link</button>
  <br><hr>
  <h4>Join via Link:)</h4>
  <button class="btn btn-lg btn-primary btn-block" id="">Enter yr Link Here</button>
  <br><br><br>
</div>

<script>

  // for image slider
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 5000); // Change image in every 5 seconds
}
  // for random link to generate
  function makelink() {
  var text = "";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

  for (var i = 0; i < 22; i++)
    text += possible.charAt(Math.floor(Math.random() * possible.length));

  return text;
}

console.log(makelink());
</script>

<script type=text/javascript>
  document.getElementById(#)
	window.location = "display_student_info.php";
</script>


</body>
</html>
