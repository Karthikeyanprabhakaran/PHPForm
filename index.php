<html>
<head>
<title>
Form Page
</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
p{
	color:red;
	font-size:25px;
}
</style>
</head>
<?php
$nameErr=$name="";
$pErr=$pswd="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	 if (empty($_POST["uname"])){ 
	 $nameErr = "UName is required";}
   else {
    $name =$_POST["uname"];
  }
    if (empty($_POST["pwd"])) {
    $pErr = "Password is required";}
  else 
  {$pswd =$_POST["pwd"];}
}
?>
<body>
<div class="container text-center" id="div1"><span class="col-md-4"></span><span class="col-md-4">
<h1 style="color:green;">Form:</h1>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<p>User name:<input type="text" name="uname" ><span><?php echo $nameErr;?></span></p>
<p>Password:<input type="password" name="pwd"><span><?php echo $pErr;?></span></p>
<p>
<input type="submit" value="Submit"></p>
</form>
<?php
if(($name && $pswd) !="")
{
echo "<p>Details:</p>";
echo "<p>".$name."</p>";
echo "<p>".$pswd."</p>";
}
?></span>
</div>
</body>
</html>

