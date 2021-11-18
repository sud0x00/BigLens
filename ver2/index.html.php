<!DOCTYPE html>
<html>

<head>
	<title>
		Document Similarity
	</title>
</head>

<body>

	<!-- multipart/form-data ensures that form
	data is going to be encoded as MIME data -->
	<form action="upload.php" method="POST"
			enctype="multipart/form-data">

		<h2>Upload Files</h2>
		
		
<p>
			Upload files to check if they are similar or not:
			
			<!-- name of the input fields are going to
				be used in our php script-->
			<input type="file" name="files[]" multiple>
			
			<br><br>
			
			<input type="submit" name="submit" value="Upload" >
		</p>

	</form>
</body>

</html>				
