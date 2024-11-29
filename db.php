<?php
$nsoro=mysqli_connect("localhost","root","","student");
if($nsoro==true){
    echo "<script>alert('successful connected')</script>";
}
else{

echo "<script>alert('connected failed')</script>";
}

?>