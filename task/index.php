<html>
<head>
<title> &copy Jayesh Lahori </title>
<link rel="stylesheet" type="text/css" href="./css/style.css" />
<script>
function validateForm()
{
var x1=document.forms["form1"]["file"].value;
var x2=document.forms["form1"]["name"].value;
if (x1==null || x1=="" || x2==null || x2=="")
  {
  alert("Fill Complete Details");
  return false;
  }
}
</script>

</head>
<body>
<div id="stylized" class="myform">
<form name="form1" action="upload_file.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
<h1>PDF Viewer</h1>
<p>Upload your file here</p>

<label>Name
<span class="small">Add your Name</span>
</label>
<input type="text" name="name" id="name" />

<label>File
<span class="small">Add your File</span>
</label>
<input type="file" name="file" id="file" />

<button type="submit">Submit</button>
<div class="spacer"></div>

</form>
</div>
<div id="stylized" class="myform">
<a href="lof.php">View Uploaded Files </a>
</div>
</body>
</html>

