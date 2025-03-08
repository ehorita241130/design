<!--
######################################################################
File: "handler01.php".
On nepi40 : (*home-common="/cygdrive/g/home2/"):
(concat "/cygdrive/g/xampp/htdocs/P5683/design/"
  "handler01.php")
By Horita.
On (2025 Feb 28).
######################################################################
GENEALOGY:
<- File: "example2.php".
On nepi40 : (*home-common="/cygdrive/g/home2/"):
(concat "/cygdrive/g/xampp/htdocs/P4644/WCBCafe/"
  "example2.php")
By Horita.
On (2025 Feb 28).
-- On 2025_2_28.
######################################################################
-->
<?php
$inpName = null;
if( array_key_exists('name', $_REQUEST) ){
  $inpName  = $_REQUEST['name'];
}
$inpEmail = null;
if( array_key_exists('email', $_REQUEST) ){
  $inpEmail  = $_REQUEST['email'];
}
$inpMessage = null;
if( array_key_exists('message', $_REQUEST) ){
  $inpMessage  = $_REQUEST['message'];
}
?>
<!DOCTYPE html>
<html lang='ja'>
<head>
<meta charset='utf-8'>
<title>handler01 by PHP</title>
</head>
<body>
  <a href='./index.html'>←Top-page</a><br/>
  <a href='./contact.html'>←Contanct-page</a>
  <h3>受信</h3>
<p>以下の data を受信しました：</p>
<span style='font-weight:bold;'>Your-name：</span>
<?php
echo $inpName;
?>
<br/>
<span style='font-weight:bold;'>Your-email：</span>
<?php
echo $inpEmail;
?>
<br/>
<span style='font-weight:bold;'>Your-Message：</span>
<pre>
<?php
echo $inpMessage;
?>
</pre>
</body>
</html>
