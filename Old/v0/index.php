<!DOCTYPE html>
<html lang="en">
<head>
<link rel = "icon" href = "images/icon.jpg" type = "image/x-icon">
</head>
<style>
#rcorners1 {
  border-radius: 25px;
  background: #FF7300;
  padding: 20px; 
  width: 300px;
  height: 170px;  
}
#rcorners2 {
  border-radius: 25px;
  background: url(images/title.gif);
  background-position: left top;
  background-repeat: repeat;
  padding: 20px; 
  width: 300px;
  height: 95px;  
}
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1{background-color: #4CAF50;}
.button2{background-color: #808080;}
</style>
<style>
.sudoku-board {
 min-height: 22.75rem;
 margin-top: 3px;
 margin-bottom: 1em;
}

.sudoku-board-cell {
 display: inline-block;
 position: relative;
 border: 1px solid #ddd;
 background: white;
 max-width: 11.11111%;
}

[data-board-size="9"].sudoku-board .sudoku-board-cell:nth-of-type(9n+1) {
 border-left-width: 2px;
 border-left-color: #808080;
}

[data-board-size="9"].sudoku-board .sudoku-board-cell:nth-of-type(n):nth-of-type(-n+9) {
 border-top-width: 2px;
 border-top-color: #808080;
}

[data-board-size="9"].sudoku-board .sudoku-board-cell:nth-of-type(3n) {
 border-right-width: 2px;
 border-right-color: #808080;
}

[data-board-size="9"].sudoku-board .sudoku-board-cell:nth-of-type(n+19):nth-of-type(-n+27),
[data-board-size="9"].sudoku-board .sudoku-board-cell:nth-of-type(n+46):nth-of-type(-n+54),
[data-board-size="9"].sudoku-board .sudoku-board-cell:nth-of-type(n+73):nth-of-type(-n+81) {
 border-bottom-width: 2px;
 border-bottom-color: #808080;
}

.sudoku-board-cell input {
 background: none;
 font-size: 19.2px;
 font-size: 1.2rem;
 text-align: center;
 width: 2em;
 max-width: 100%;
 height: 2em;
 border: 0;
 position: relative;
 z-index: 1; /*on top of candidates*/
}

.sudoku-board-cell .highlight-val {
 color: #00d;
}

.sudoku-board-cell .board-cell--error {
 background: #d00;
 color: #eee;
}

.sudoku-board-cell .candidates {
 display: none; /*hidden by default*/
 position: absolute;
 top: 0; bottom: 0; left: 0; right: 0;
 text-align: center;
 font-size: .75em;
 letter-spacing: -.5px;
 font-family: monospace, sans-serif;
 line-height: 0;
 text-align: justify;
}

.sudoku-board .candidates:after {
 content: "";
 display: inline-block;
 width: 100%;
}

@media(max-width: 23em){
 .sudoku-board .candidates {
  letter-spacing: -2px;
 }
}
 .showCandidates .candidates {
  display: block;
 }

.sudoku-board .candidates div {
 display: inline-block;
 width: 20%;
 line-height: 1.13;
 vertical-align: top;
 *display: inline;
 *zoom: 1;
}

.candidate--highlight {
 background-color: yellow;
}
.candidate--to-remove {
 background-color: red;
 color: white;
}

.sudokubutton1,.sudokubutton2,.sudokubutton3,.sudokubutton4,
.sudokubutton5,.sudokubutton6,.sudokubutton7 {
color: white;
-webkit-transition-duration: 0.3s;
transition-duration: 0.3s;
padding: 1px 6px;
}
.sudokubutton1 {
background-color: #3cbf71;
}
.sudokubutton2 {
background-color: #ff9224;
}
.sudokubutton3 {
background-color: #ff3c3c;
}
.sudokubutton4 {
background-color: #020202;
}
.sudokubutton5,.sudokubutton6 {
background-color: #4040ff;
}
.sudokubutton7 {
background-color: #899db6;
}
.sudokubutton1:hover,.sudokubutton2:hover,.sudokubutton3:hover,.sudokubutton4:hover,
.sudokubutton5:hover,.sudokubutton6:hover,.sudokubutton7:hover {
background-color: #EDEDED;
color: black;
cursor: pointer;
}

* {
 margin:0; padding:0;
 -moz-box-sizing: border-box;
 -webkit-box-sizing: border-box;
 box-sizing: border-box;
}

.wrap {
 padding: 2em 1em;
 width: 400px;
 max-width: 100%;
 margin-left: auto;
 margin-right: auto;
}

@media(min-width: 30em) {
 .wrap {
  width: 490px;
 }
 .sudoku-board input {
  font-size: 24px;
  font-size: 1.5rem;
 }
 .sudoku-board .candidates {
  font-size: .8em;
 }
}
</style>
<title>Scanry</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#band" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SCAN</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <div class="w3-dropdown-hover w3-hide-small">
      </div>
    </div>
    
  </div>
</div>
<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ABOUT</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">SCAN</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
 
  <div class="mySlides w3-display-container w3-center">
    <img src="images/abc1.jpg" style="width:50%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3 style="color:#D2042D;"><b>Scan</b></h3>
      <p style="color:black;"><b>Scan or upload image of any object by choosing from your files!</b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="images/abc2.jpg" style="width:50%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3 style="color:#FFFF00;"><b>Upload</b></h3>
      <p style="color:white;"><b>Click on "Upload" button after scanning!</b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="images/abc3.jpg" style="width:50%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3 style="color:#E75480;"><b>Result</b></h3>
      <p style="color:black;"><b>You will get the results of that image search!</b></p>    
    </div>
  </div>

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">SCANRY</h2>
    <p class="w3-justify">1. An application that facilitates searching the items that users find attractive and find them on eCommerce stores or online shops to buy them instantly.
</p>
<p class="w3-justify">2. It allows users to interact and communicate smoothly with catalogs, items, in-store signage, or print advertising.

</p>
  </div>

  <!-- The Tour Section -->
  <div class="w3-black" id="tour">
  <br><br>
   <center><h2 class="w3-wide">SCAN</h2>
   <br><br>
   <form action="upload.php" method="POST" enctype="multipart/form-data">
<h1 id="rcorners2" style="border:2px solid Tomato;color:white;">Scan And Shop</h1>
<p id="rcorners1" style="color:darkblue">
			Upload image to search - 
			<input style="color:blue;" type="file" name="files[]" multiple>
			<br><br>
			(Note :- Acceptable formats are jpg, jpeg, png)
<br><br>
<br><br>
			<button type="submit" name="submit" class="button button1">Upload</button>
		</p>
</center>
<br><br>
<br><br>
<br><br>
    </div>
  </div>

  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Any Queries/Feedback?</i></p>
	<p class="w3-opacity w3-center"><i>Wanna Report Some Bug?</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Bengaluru, India<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +91 9101971185<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: support@scanry.com<br>
      </div>
      <div class="w3-col m6">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
      </div>
    </div>
  </div>
  
<!-- End Page Content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
<center><img src="icon.jpeg" alt="centered image" height="60" width="60"> </center>
  <p class="w3-medium">Powered by <a href="https://github.com/labhayl" target="_blank">Abhay</a> & <a href="https://github.com/sud0x00" target="_blank">Sudhanva</a></p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
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
  setTimeout(carousel, 2500);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>
