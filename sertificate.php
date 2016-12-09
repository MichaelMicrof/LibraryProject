<?php
if(isset($_GET['surName'])) {$surName = $_GET['surName'];}
$firstName = $_GET['firstName'];
$middleName = $_GET['middleName'];
$dataBirthday="";
$days = $_GET['days'];
$month = $_GET['month'];
$year = $_GET['year'];
/*$dataBirthday = $days.' '.$month.' '.$year;*/
if((strlen($days)>0)&(strlen($days)<3)){$dataBirthday=$dataBirthday.$days.' ';}
if((strlen($month)>0)&(strlen($month)<10)){$dataBirthday=$dataBirthday.$month.' ';}
if((strlen($year)>0)&(strlen($year)<5)){$dataBirthday=$dataBirthday.$year;}
if(isset($_GET['placeOfStudy'])){$placeOfStudy = $_GET['placeOfStudy'];}
else{$placeOfStudy = '';}
if(isset($_GET['placeOfStudyOther'])){$placeOfStudyOther = $_GET['placeOfStudyOther'];}
else{$placeOfStudyOther = '';}
$country = $_GET['country'];
if(isset($_GET['operator'])) {$operator = $_GET['operator'];}
$numberTel = $_GET['numberTel'];
if(isset($_GET['numberTel2'])){$numberTel2 = $_GET['numberTel2'];}
else{$numberTel2 = '';}
$otherNumber = $_GET['otherNumber'];
if(isset($_GET['operator'])) {$telFirst = $country."-".$operator."-".$numberTel;}
$telOther = $country."-".$otherNumber;
$email = $_GET['email'];
$address = $_GET['address'];
if(isset($_GET['sections'])) {$sections = $_GET['sections'];}
    if(isset($_GET['section1'])) {$section1 = $_GET['section1'];}
    if(isset($_GET['section2'])) {$section2 = $_GET['section2'];}
    if(isset($_GET['section3'])) {$section3 = $_GET['section3'];}
    if(isset($_GET['section4'])) {$section4 = $_GET['section4'];}
    if(isset($_GET['section5'])) {$section5 = $_GET['section5'];}
    if(isset($_GET['section6'])) {$section6 = $_GET['section6'];}
$user = $_GET['user'];
$password = $_GET['password'];
$Rpassword = $_GET['Rpassword'];


header("Content-Type: image/jpg");
$im=imagecreatefromjpeg("./images/sertificate2.jpg");
$txt_color=imagecolorallocate($im,255,0,0);
$shadow=imagecolorallocate($im,128,128,128);
$font="./fonts/9573.ttf";

imagettftext($im, 85, 0, 350, 450, $shadow, $font, "Карточка читателя.");
imagettftext($im, 85, 0, 346, 446, $txt_color, $font, "Карточка читателя.");

$txt_color=imagecolorallocate($im,0,0,255);
$font="./fonts/9575.ttf";

imagettftext($im, 65, 0, 400, 650, $txt_color, $font, "Фамилия:   ".$surName);
imagettftext($im, 65, 0, 400, 750, $txt_color, $font, "Имя:           ".$firstName);
imagettftext($im, 65, 0, 400, 850, $txt_color, $font, "Отчетство: ".$middleName);

ImageLine ($im, 400, 900, 1500, 900, $txt_color); 
ImageLine ($im, 400, 901, 1500, 901, $txt_color); 
ImageLine ($im, 400, 902, 1500, 902, $txt_color); 
ImageLine ($im, 400, 903, 1500, 903, $txt_color); 

$font="./fonts/9573.ttf";

imagettftext($im, 50, 0, 400, 1050, $txt_color, $font, "Дата рождения:   ".$dataBirthday);
imagettftext($im, 50, 0, 400, 1150, $txt_color, $font, "Email:    ".$email);


imagejpeg($im,NULL,75);
?>