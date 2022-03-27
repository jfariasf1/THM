<?PHP 

$retval = "";

$garbage = system("hostname",$retval);

echo $retval;

?>
