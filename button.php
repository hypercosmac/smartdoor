<?php
$file = "buttonStatus.txt";
$handle = fopen($file,'w+');
if (isset($_POST['1']))
{
$onstring = "1";
fwrite($handle,$onstring);
fclose($handle);
print "
";
}
else if(isset($_POST['2']))
{
$offstring = "2";
fwrite($handle, $offstring);
fclose($handle);
print "
";
}
else if(isset($_POST['3']))
{
$offstring = "3";
fwrite($handle, $offstring);
fclose($handle);
print "
";
}

?>