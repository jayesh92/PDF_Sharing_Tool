<html>
<head>
<title> &copy Jayesh Lahori </title>
<link rel="stylesheet" type="text/css" href="./css/style.css" />
<style type="text/css">
h1
{
margin: 0px,0px,0px,20px;
}
</style>
</head>
<body>
<div id="stylized" class="myform">
<h1>Select File</h1>
<p>Selcet from the list</p>
<label>File Name:
<span class="small">Select Your File</span>
</label>
<?php
echo "<form action=\"./pdfjs/web/viewer.php\" method=\"post\">
      <select name=\"x\">";
?>
<?php
if ($handle = opendir('upload/')){
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
	    echo "<option value ='$entry'>". $entry . "</option>";
        }
    }
    closedir($handle);
}
?>
</select>
<button type="submit">Submit</button>
<div class="spacer"></div>

</form>
</div>
</body>
</html>
