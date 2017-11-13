<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <title>Library</title>
</head>
<body>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_GET['surName'])) {$surName = $_GET['surName'];}
else{$surName='';}
if(isset($_GET['firstName'])) {$firstName = $_GET['firstName'];}
else{$firstName='';}
if(isset($_GET['middleName'])) {$middleName = $_GET['middleName'];}
else{$middleName='';}
$days = $_GET['days'];
$month = $_GET['month'];
$year = $_GET['year'];
$dataBirthday = "";
if($days != "Не заполнено"){$dataBirthday = $dataBirthday.$days;}
if($month != "Не заполнено"){$dataBirthday = $dataBirthday.".".$month;}
if($year != "Не заполнено"){$dataBirthday = $dataBirthday.".".$year;}
if(isset($_GET['placeOfStudy'])){$placeOfStudy = $_GET['placeOfStudy'];}
    else if(isset($_GET['placeOfStudyOther'])){$placeOfStudy = $_GET['placeOfStudyOther'];}
        else{$placeOfStudy = '';}
$country = $_GET['country'];
if(isset($_GET['operator'])) {$operator = $_GET['operator'];}
if(isset($_GET['numberTel'])){$numberTel = $_GET['numberTel'];}
else{$numberTel = '';}
if(isset($_GET['numberTel2'])){$numberTel2 = $_GET['numberTel2'];}
else{$numberTel2 = '';}
if(isset($_GET['otherNumber'])){$otherNumber = $_GET['otherNumber'];}
else{$otherNumber = '';}
$telefon = '';
if($numberTel != ''){$telefon = $country."-".$operator."-".$numberTel;}
    else if($numberTel2 != ''){$telefon = $country."-".$operator."-".$numberTel2;}
    else if($otherNumber != ''){$telefon = $country."-".$otherNumber;}
    else{$telefon = '';}
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

$arr = array($user,$password,$surName,$firstName,$middleName,$dataBirthday,$placeOfStudy,$telefon,$email,$address,$year);
$flagTwin = TRUE;
$flagRun = TRUE;

$fvar = "" ;
$filename = "database.csv";

if(!file_exists($filename)){
    $fvar=fopen($filename,"w");
    if(!$fvar){
        echo "<p>Создать файл с именем".$filename."невозможно. Работа прервана.</p> \n"."</body> \n "."</html>" ;
        exit(0);
    } else {
        fclose($filename);
        echo"<p>Создан файл $filename </p>\n";
    }
}

$fvar = "";
if(is_readable($filename)){
    if (($fvar = fopen($filename,"r")) !== FALSE){
        while (($strLine = fgetcsv($fvar, 1000, ",")) !== FALSE){
            if($flagTwin == TRUE){
                if($strLine[0] == $user){
                    fclose($fvar);
                    $flagTwin = FALSE;
                    $flagRun = FALSE;
                    break;
//                    echo"<p>Пользователь с ником $user уже существует</p>\n"."</body> \n "."</html>";
//                    exit(0);
                }
            }    
        }
    }
    if($flagRun == TRUE){
        if(is_writable($filename)){
            $fvar = fopen($filename,"a+");
            echo"<p>Регистрация нового пользователя с логином $user успешно начата\n";
            fputcsv($fvar, $arr);
            echo "<p>Данные внесены в файл $filename </p>\n";
        }else if(!(is_writable($filename))){
            echo "<p>Файл $filename недоступен для записи</p>\n"."</body> \n "."</html>";
            exit(0);
        }
            fclose($fvar);
            $flagTwin = FALSE;
            $flagRun = FALSE;
    }    
} else {
        echo "<p>Файл $filename недоступен для чтения</p>\n"."</body> \n "."</html>";
        exit(0);
}

//if(is_writable($filename)){
//    $fvar=fopen($filename,"a+");
//    	fputcsv($fvar, $arr);
//     	fclose($fvar);
//}else{
//    echo "<p>Файл $filename недоступен для записи</p>\n"."</body> \n "."</html>";
//    exit(0);
//}

echo"<hr>\n<h2>Список пользователей</h2>\n<hr>\n";

$num = 1;
if (($fvar = fopen($filename, "r")) !== FALSE) 
    {
    while (($strLine = fgetcsv($fvar, 1000, ",")) !== FALSE){
        echo "<p><b>$num : </b>";
        $num++;
        $sum = count($strLine);
        for ($i=0; $i < $sum; $i++){
            echo $strLine[$i] . ", \n";
        }
        echo "</p> \n";
    }
    fclose($fvar);
}

echo "<hr> \n <p>  Работа завершена </p> \n";
exit(0);
?>
    
</body>
</html>
