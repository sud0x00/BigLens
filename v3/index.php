<!DOCTYPE html>
<html>
<head>
<title>Scan And Shop App</title>
</head>
<style>

#rcorners1 {
  background: #84E32B;
  padding: 20px; 
  width: 300px;
  height: 40px;  
}
.button {
  border: none;
  color: white;
  background-color: #B04CAD;	
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1:hover {
  background-color: #4CAF50;
  color: white;
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}

</style>
<center>
<body>
<form action="upload.php" method="POST" enctype="multipart/form-data">
<link rel="stylesheet" href="mystyle.css">
<h1 id="rcorners1" style="border:2px solid #7fb265;color:white;">Scan And Shop</h1>
		
		
<p id="rcorners1" style="color:darkblue">
			Upload image to search - 
			<input style="color:black;" type="file" name="files[]" multiple class="custom-file-input">
			<br><br>
			<button type="submit" name="submit" class="button button1">Upload</button>
		</p>

	</form>
</body>
</center>
</html>				
