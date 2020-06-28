<?php
$leadname = array("The" , "Da");

$descriptor = array("Big" , "Young" , "Yung" , "Childish" , "Lil" , "Old");

$midname = array("Dirty" , "Ghostface" , "A$AP" , "Trap" , "Major" , "Dead" , "YNW" , "YBN");

$lastname = array("Bastard" , "Killer" , "Dealer" , "Pump" , "Amigo");

$randdir = array_rand($leadname, 2);
$leadname = $leadname[randdir[0]]  .  "\n";

$randdir1 = array_rand($descriptor, 2);
$descriptor = $descriptor[randdir1[0]]  .  "\n";

$randdir2 = array_rand($midname, 2);
$midname = $midname[randdir2[0]]  .  "\n"; 

$randdir3 = array_rand(lastname, 2);
$lastname = $lastname[randdir3[0]]  .  "\n";

echo "
<html>
<head>
<style>
h1, h2 {
	display: flex;
	justify-content: center;
	align-items: center;
}
</style>
</head>
<body>
<h1>
PRESENTING THE RAPPER NAME GENERATOR</h>
<h2>Refresh the page to get a new name</h2>
<br/><br/><br/>
<h1>
$leadname
$descriptor
$midname
$lastname
</h1>
;

?>

