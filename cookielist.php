<html>
<head>
<title> Choose List Cookies </title>
<style> #footer {
Position: fixed;
padding: 20px 20px 20px 10px; bottom: 0;
width: 100%; 
height: 40px;
}
</style>
</head>
<body>
<form action="displaycookie.php" method="POST"/>
<input type="submit" name="submit" value="List Cookies"/>
</form>
<?php
setcookie("Name","Manasa");
setcookie("user","srit");
setcookie("user1","srit1");
?>
<div id = "footer">
<p align = "center"> &copy; B.Manasa all rights --reserved </p>
</div>
</body>
</html>