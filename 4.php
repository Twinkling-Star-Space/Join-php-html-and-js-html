
<?php
include='5.php';
$x=$_post["name"];
$y=$_post["address"];
$z=$_post["email"];
$w=$_post["gender"];

if($x=="" || $x==NULL && $y=="" || $y==NULL &&$z=="" || $z==NULL &&$w=="" || $w==NULL)
{
    echo "FILL THE FORM CORRECTLY";
}
?>
