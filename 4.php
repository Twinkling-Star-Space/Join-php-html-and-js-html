
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$x=$_POST["name"];
$y=$_POST["address"];
$z=$_POST["email"];
$w=$_POST["gm"];
}

if($x=="" || $x==NULL && $y=="" || $y==NULL &&$z=="" || $z==NULL &&$w=="" || $w==NULL)
{
    echo "FILL THE FORM CORRECTLY";
}
else{
    echo "Form submitted successfully";
}
?>
