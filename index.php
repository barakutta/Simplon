<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./style.css">
</head>
<body >
  <div class= "edit">
    <!-- out put your information  -->
<?php

$date = new DateTime();
$timestamp = $date->getTimestamp();
$filename = './messages.txt';
if ($_POST['name'] && $_POST['message']) {
    // paramêtre get, message
    $name = $_POST['name'];
    $message = $_POST['message'];
    // chaine complète
    $chaine = $timestamp . ' ' . $name . ' ' . $message . '<br>';
    // ajoute au fichier
    file_put_contents($filename, $chaine, FILE_APPEND);
} 
// lit le fichier entier
$file = fopen($filename,"r");
$contents = fread($file, filesize($filename));
fclose($file);
?>
<h2>input your information </h2>
<!-- form for input  -->
<form method="POST" action="">  
  user_name: <input type="text" name="name" placeholder="Your name..">
  <br><br>
  
  <!-- message: <textarea name="message" rows="5" cols="20"  placeholder="Write something.."> </textarea> -->
   <div class="col-75">
       message:<textarea id="message" name="message" placeholder="Write something.." style="height:100px" ></textarea>
    </div>
    <br><br>
  send your message :<input type="submit" name="send" value="send">  
<h2>   out put your information</h2>
</form>
</div>
<p style="text-align:center; color:red; padding:15px"><?php echo $contents; ?></p> 
<div>

</body>
  </html>



