<?php

$name = $_POST["name"];
$phone = $_POST["phone"];
$city = $_POST["city"];
$zip = $_POST["zip"];

print "$name  $phone  $city  $zip<br/>";

print "<h3>Validating name</h3>\n";

if (!preg_match("/^[a-z]+,[ ]*[a-z]+$/i", $name)) {
	print "Invalid name<br/>";
}
else {
	print "The name is valid<br/>";
}

print "<h3>Validating phone number</h3>\n";

if (!preg_match("/^\([0-9]{3}\)[ ]?[0-9]{3}-[0-9]{4}$/", $phone)) {
	print "Invalid phone number<br/>";
}
else {
	print "The phone number is valid<br/>";
}

 print "<h3> Validating City and State</h3>";
 if (!preg_match('/^[A-Za-z]+,[ ]*[A-Z]{2}$/', $city))  {
print "Invalid city and state<br/>";
 }
else {
	
    print "The city and state is valid<br />"; 
 }

print "<h3> Validating Zip Code</h3>";
if(!preg_match('/^[0-9]{5}$/', $zip))   {
	print "Invalid zip code <br />";
}
else  {
        print "The zip code is valid <br />";
}	
?>
</div>
</body>
</html>
