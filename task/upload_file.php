<html>
<head>
<title> &copy Jayesh Lahori </title>
<link rel="stylesheet" type="text/css" href="./css/style.css" />
</head>
<body>
<div id="stylized" class="myform">

<?php
if(($_FILES["file"]["type"] == "application/pdf") && ($_FILES["file"]["size"] < 2000000) )
{
if ($_FILES["file"]["error"] > 0)
{
	echo "Error: " . $_FILES["file"]["error"] . "<br>";
}
else
{
	if (file_exists("upload/" . $_FILES["file"]["name"]))
	{
		echo $_FILES["file"]["name"] . " already exists. ";
	}
	else
	{
		move_uploaded_file($_FILES["file"]["tmp_name"],	"upload/" . $_FILES["file"]["name"]);
		echo "File Uploaded Sucessfully !!";
	}
}
}
else
{
	if(($_FILES["file"]["type"] != "application/pdf"))
		echo "Extension " . $_FILES["file"]["type"] . " not allowed ";
	if(($_FILES["file"]["size"] > 2000000) )
		echo " Opps.. I don't have that much Space. ";
}

?>
</div>
<div id="stylized" class="myform">
<a href="index.php">Upload More Files.</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="lof.php">View Uploaded Files.</a>
</div>
</body>
</html>
