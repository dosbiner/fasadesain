<?php
$phone = '6281380631890';
$message = "Halo Fasa Desain, mau tanya" ;
// DO NOT EDIT BELOW
$message = urlencode($message);
$message = str_replace('+','%20',$message);
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
// check if is a mobile
if ($iphone || $android || $palmpre || $ipod || $berry == true)
{
header('Location: whatsapp://send?phone='.$phone.'&text='.$message);
//OR
echo "<script>window.location='whatsapp://send?phone='.$phone.'&text='.$message</script>";
}
// all others
else {
header('Location: https://web.whatsapp.com/send?phone='.$phone.'&text='.$message);
//OR
echo "<script>window.location='https://web.whatsapp.com/send?phone='.$phone.'&text='.$message</script>";
}
?>