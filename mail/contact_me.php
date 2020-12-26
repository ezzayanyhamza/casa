<?php
<?php

if (isset($_POST['submit'])){
   $name=$_POST['name'];
   $mailfrom=$_POST['email'];
   $message=$_POST['message'];

   $mailto ="hamzaziyani590@gmail.com";
   $headers = "From:".$mailfrom;
   $txt = "you have received mail from ".$name.".\.\".$message;

   mail($mailto, $txt ,$headers);
   header("Location: index.html?mailsen");
}			
?>
