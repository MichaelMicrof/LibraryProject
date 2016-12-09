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

$reqPos = strpos($_SERVER['REQUEST_URI'], '?') ;
$myURI = substr($_SERVER['REQUEST_URI'], $reqPos) ;

//$arr = array($user,$password,$surName,$firstName,$middleName,$dataBirthday,$placeOfStudy,$telefon,$email,$address);
//$flagTwin = TRUE;


//$fvar = "" ;
$flagUser = FALSE;
$filename = "database.csv";
$arrayFile = file($filename);
foreach ($arrayFile as $kk => $vv){
    $userCheck = explode(",", $vv);
    if($userCheck[0] == $user){
        $flagUser = TRUE;
    }
}

/*$password='';
$Rpassword='';*/ 
//$sertificate = $_SERVER['QUERY_STRING'];
?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <title>Library</title>
 
 <link rel="stylesheet" type="text/css" href="registration.css">
<!-- <script src="registration.js"></script> -->
</head>
<body style="background-image: url(./images/biblioteka3.jpg)">

<div class="h1div"><div id="logo" class="anitab">
  <img src=".\images\LogoKv2.png" alt="Logo" class="logo2">
</div>
<h1>Мы всегда рады видеть Вас у нас в библиотеке!</h1></div>
<br>
<div class="h2div"><h3>Прошу Вас проверить правильность заполнения:</h3>
   
    	<p>
            <span id="idA">
            <?php 
                echo '<a style="color: #FFDAB9" href="./sertificate.php'.$myURI.'"> Текущий вид печатной формы</a><br>'; 
                echo '<a style="color: #FFDAB9" href="./dataFromBD.php'.$myURI.'"> Данные из Базы Данных</a>';
            ?>
            </span>
                <br><br> 
	    <span style="color: whitesmoke; font-style: italic;">( обновляется после нажатия на кнопку "Зарегистрироваться!" )</span>
	</p>
</div>

<form action="confirmation.php" method="get">
<table style=margin:auto; class="td4 td2">
<tbody>
 <tr>
  <th>Фамилия</th>                     
  <td>
    <?php 
            if(strlen($surName)>= 1){
                echo '<input name="surName" type="text" class="td3" value="'.$surName.'">';
            }else{
                echo '<textarea name="surName" class="tta" placeholder="Не заполнено"></textarea>';
            }
    ?>
  </td>
 </tr>
  <tr>
  <th>Имя</th>
  <td>    
    <?php 
            if(strlen($firstName)>= 1){
                echo '<input name="firstName" type="text" class="td3" value="'.$firstName.'">';
            }else{
                echo '<textarea name="firstName" class="tta" placeholder="Не заполнено"></textarea>';
            }
    ?>    
 </td>
 </tr>
  <tr>
  <th>Отчество</th>
  <td>
    <?php 
            if(strlen($middleName)>= 1){
                echo '<input name="middleName" type="text" class="td3" value="'.$middleName.'">';
            }else{
                echo '<textarea name="middleName" class="tta" placeholder="Не заполнено"></textarea>';
            }
    ?>
  </td>
 </tr>
  <tr>
   <th>Дата рождения</th>
   <td> 
    <select name="days" class="greenbold">
	 <option value="не_заполнено">&nbsp;</option>
	 <option value="1">1</option>
	 <option value="2">2</option>
	 <option value="3">3</option>
	 <option value="4">4</option>
	 <option value="5">5</option>
	 <option value="6">6</option>
	 <option value="7">7</option>
	 <option value="8">8</option>
	 <option value="9">9</option>
	 <option value="10">10</option>
	 <option value="11">11</option>
	 <option value="12">12</option>
	 <option value="13">13</option>
	 <option value="14">14</option>
	 <option value="15">15</option>
	 <option value="16">16</option>
	 <option value="17">17</option>
	 <option value="18">18</option>
	 <option value="19">19</option>
	 <option value="20">20</option>
	 <option value="21">21</option>
	 <option value="22">22</option>
	 <option value="23">23</option>
	 <option value="24">24</option>
	 <option value="25">25</option>
	 <option value="26">26</option>
	 <option value="27">27</option>
	 <option value="28">28</option>
	 <option value="29">29</option>
	 <option value="30">30</option>
	 <option value="31">31</option>
	</select>
	
	<select name="month">
	 <option value="не_заполнено">&nbsp;</option>
	 <option value="Январь">Январь</option>
	 <option value="Февраль">Февраль</option>
	 <option value="Март">Март</option>
	 <option value="Апрель">Апрель</option>
	 <option value="Май">Май</option>
	 <option value="Июнь">Июнь</option>
	 <option value="Июль">Июль</option>
	 <option value="Август">Апрель</option>
	 <option value="Сентябрь">Сентябрь</option>
	 <option value="Октябрь">Октябрь</option>
	 <option value="Ноябрь">Ноябрь</option>
	 <option value="Декабрь">Декабрь</option>
	</select>
	
	<select name="year">
	 <option value="не_заполнено" >&nbsp;</option> <!--label=" "-->
	 <option value="Отказать в выдаче книг :)">более 35 лет</option>
	 <option value="1980">1980</option>
	 <option value="1981">1981</option>
	 <option value="1982">1982</option>
	 <option value="1983">1983</option>
	 <option value="1984">1984</option>
	 <option value="1985">1985</option>
	 <option value="1986">1986</option>
	 <option value="1987">1987</option> 
	 <option value="1988">1988</option>
	 <option value="1989">1989</option>
	 <option value="1990">1990</option>
	 <option value="1991">1991</option>
	 <option value="1992">1992</option>
	 <option value="1993">1993</option>
	 <option value="1994">1994</option>
	 <option value="1995">1995</option>
	 <option value="1996">1996</option>
	 <option value="1997">1997</option> 
	 <option value="1998">1998</option>
	 <option value="1999">1999</option>
	 <option value="2000">2000</option>
	 <option value="2001">2001</option>
	 <option value="2002">2002</option>
	 <option value="2003">2003</option>
	 <option value="2004">2004</option>
	 <option value="2005">2005</option>
	 <option value="2006">2006</option>
	 <option value="2007">2007</option>
	 <option value="2008">2008</option>
	 <option value="2009">2009</option>
	 <option value="2010">2010</option>
	 <option value="2011">2011</option>
	 <option value="2012">2012</option>
	 <option value="2013">2013</option>	
	</select>
    <?php
    if(strlen($dataBirthday)>0){
        echo '<br><input name="dataBirthday" type="text" class="td3" value="'.$dataBirthday.'"><br>';
    }else{
        echo '<br><textarea name="dataBirthday" class="tta" placeholder="Не заполнено"></textarea>';
    }
    ?>         
   </td>
 </tr>
 
 <tr>
   <th>Место учебы</th>
   <td>
    <?php
        if($placeOfStudy === 'Детсад'){
            echo '<input type="radio" name="placeOfStudy" checked value="Детсад">Детсад<br>';
        }else{
            echo '<input type="radio" name="placeOfStudy" value="Детсад">Детсад<br>';
        }
        if($placeOfStudy === 'Школа'){
            echo '<input type="radio" name="placeOfStudy" checked value="Школа">Школа<br>';
        }else{
            echo '<input type="radio" name="placeOfStudy" value="Школа">Школа<br>';
        }
        if($placeOfStudy === 'Колледж'){
            echo '<input type="radio" name="placeOfStudy" checked value="Колледж">Колледж<br>';
        }else{
            echo '<input type="radio" name="placeOfStudy" value="Колледж">Колледж<br>';
        }
        if($placeOfStudy === 'Институт'){
            echo '<input type="radio" name="placeOfStudy" checked value="Институт">Институт<br>';
        }else{
            echo '<input type="radio" name="placeOfStudy" value="Институт">Институт<br>';
        }        
        if($placeOfStudy === 'Работаю'){
            echo '<input type="radio" name="placeOfStudy" checked value="Работаю">Работаю<br>';
        }else{
            echo '<input type="radio" name="placeOfStudy" value="Работаю">Работаю<br>';
        }        
        if(($placeOfStudy === 'Другое')&(isset($placeOfStudyOther))){
            echo '<input type="radio" name="placeOfStudy" checked value="Другое">Другое<br>';
            echo '<input name="placeOfStudyOther" type="text" class="td3" value="'.$placeOfStudyOther.'">';
        }elseif (($placeOfStudy === 'Другое')&(!isset($placeOfStudyOther))) {
            echo '<input type="radio" name="placeOfStudy" checked value="Другое">Другое<br>';
            echo '<textarea name="placeOfStudyOther" placeholder="Не заполнено"></textarea><br>';
        }else{
            echo '<input type="radio" name="placeOfStudy" value="Другое">Другое<br>';
            echo '<textarea name="placeOfStudyOther" placeholder="Другое место учебы"></textarea><br>';
        }    
    ?>    
   </td>
 </tr>
 
 <tr>
   <th>Номер телефона</th>
   <td>
        <input type="radio" name="numberTel2" value="1">
        <input type="hidden" name="country" value="+7">
	<select name="operator">
	<option value="не_заполнено">&nbsp;</option>
	<option value="495">495</option>
	<option value="499">499</option>
	<option value="903">903</option>
	<option value="905">905</option>
	<option value="906">906</option>
	<option value="909">909</option>
	<option value="910">910</option>
	<option value="916">916</option>
	<option value="926">926</option>
	</select><br>
	<textarea name="numberTel" class="tta" placeholder="123-45-67"></textarea><br>
	<br>
        <input type="radio" name="numberTel2" value="2">
	<input type="hidden" name="country" value="+7"> <br>
	<textarea name="otherNumber" class="tta" placeholder="Другой номер"></textarea><br>
    <?php
        if($numberTel2 === '1'){
            echo '<input name="telFirst" type="text" class="td3" value="'.$telFirst.'">';
        }elseif ($numberTel2 === '2') {
            echo '<input name="telOther" type="text" class="td3" value="'.$telOther.'">';
        }else{
            echo '<textarea name="telFirst" class="tta" placeholder="Не заполнено"></textarea>';
        }
    ?>
   </td>
 </tr>
 
 <tr>
   <th>Адрес электронной почты</th>
   <td>
    <?php 
        if(strlen($email)>= 1){
            echo '<input name="email" type="text" class="td3" value="'.$email.'">';
        }else{
            echo '<textarea name="email" class="tta" placeholder="Не заполнено"></textarea>';
        }
    ?>
   </td>
 </tr>
 
  <tr>
   <th>Адрес проживания</th>
   <td>
    <?php 
        if(strlen($email)>= 1){
            echo '<input name="address" type="text" class="td3" value="'.$address.'">';
        }else{
            echo '<textarea name="address" class="tta" placeholder="Не заполнено"></textarea>';
        }
    ?>
   </td>
 </tr>
 
 <tr>
   <th>Выберете интересующие Вас разделы</th>
   <td class="td2">
    <?php
        if(isset($section1)){
            echo '<input type="checkbox" name="section1" id="s1" checked value="Детские книжки">Детские книжки<br>';
        }else{
            echo '<input type="checkbox" name="section1" id="s1" value="Детские книжки">Детские книжки<br>'; 
            unset($section1);
            }
        if(isset($section2)){
            echo '<input type="checkbox" name="section2" id="s2" checked value="Учебники">Учебники<br>';
        }else{
            echo '<input type="checkbox" name="section2" id="s2" value="Учебники">Учебники<br>'; 
        }
        if(isset($section3)){
            echo '<input type="checkbox" name="section3" id="s3" checked value="Внеклассное чтение">Внеклассное чтение<br>';
        }else{
            echo '<input type="checkbox" name="section3" id="s3" value="Внеклассное чтение">Внеклассное чтение<br>'; 
        }
        if(isset($section4)){
            echo '<input type="checkbox" name="section4" id="s4" checked value="Классическая литература">Классическая литература<br>';
        }else{
            echo '<input type="checkbox" name="section4" id="s4" value="Классическая литература">Классическая литература<br>'; 
        }
        if(isset($section5)){
            echo '<input type="checkbox" name="section5" id="s5" checked value="Современная литература">Современная литература<br>';
        }else{
            echo '<input type="checkbox" name="section5" id="s5" value="Современная литература">Современная литература<br>'; 
        }
        if(isset($section6)){
            echo '<input type="checkbox" name="section6" id="s6" checked value="Профессиональные издания">Профессиональные издания<br>';
        }else{
            echo '<input type="checkbox" name="section6" id="s6" value="Профессиональные издания">Профессиональные издания<br>'; 
        }        
        /*if(isset($section1)){
            echo '<input name="section1" type="text" class="td3" value="'.$section1.'"><br>';
        }
        if(isset($section2)){
            echo '<input name="section2" type="text" class="td3" value="'.$section2.'"><br>';
        }
        if(isset($section3)){
            echo '<input name="section3" type="text" class="td3" value="'.$section3.'"><br>';
        }
        if(isset($section4)){
            echo '<input name="section4" type="text" class="td3" value="'.$section4.'"><br>';
        }
        if(isset($section5)){
            echo '<input name="section5" type="text" class="td3" value="'.$section5.'"><br>';
        }
        if(isset($section6)){
            echo '<input name="section6" type="text" class="td3" value="'.$section6.'"><br>';
        }*/
        if(!(isset($section1))&!(isset($section2))&!(isset($section3))&!(isset($section4))&!(isset($section5))&!(isset($section6))){
            echo '<textarea name="sections" class="tta" placeholder="Не заполнено"></textarea>';
        }
    ?>         
   </td>
 </tr>
 
 <tr>
   <th>Логин для входа в систему</th>
   <td> 
    <?php 
        if(strlen($user)>=1){
            echo 'Ваш логин:<input type="text" name="user" class="td3" value="'.$user.'"><br>';
        }else{
            echo 'Ваш логин:<input type="text" name="user" class="td3" placeholder="Не заполнено"><br>';
        }
        echo '<br>';
        
        if(strlen($password)>=1){
            echo 'Ваш пароль:<input type="text" name="password" class="td3" value="'.$password.'"><br>';
        }else{
            echo 'Ваш пароль:<input type="text" name="password" class="td3" placeholder="Не заполнено"><br>';
        }
        echo '<br>';
        
        if($flagUser == TRUE){
            echo 'Повтор пароля:<input type="text" name="Rpassword" class="td3" value="'.$Rpassword.'"><br>';
            echo '<input type="text" name="Rpassword" class="td6" disabled="disabled" value="Логин занят!!!"><br>';
        }else if((strlen($Rpassword)>=1)&($password===$Rpassword)){
            echo 'Повтор пароля:<input type="text" name="Rpassword" class="td3" value="'.$Rpassword.'"><br>';
        }else if(isset($Rpassword)&($password!==$Rpassword)){
            echo 'Повтор пароля:<input type="text" name="Rpassword" class="td3" value="'.$Rpassword.'"><br>';
            echo '<input type="text" name="Rpassword" class="td3" disabled="disabled" value="Пароли не совпадают"><br>';
        }else{
            echo 'Повтор пароля:<input type="text" name="Rpassword" class="td3" placeholder="Не заполнено"><br>';
        } 
   ?>
   </td>
 </tr>
 
 </tbody>
 </table>
 <br>
 <table style=margin:auto; class="td5">
 <tr>
    <td>
        <input id="submitButton" name="submit" type="submit" value="Исправить данные">;
    </td>
    <td>
        <input type="button" onclick="location.href='index.php'" value="Перейти на Главную страницу"><br>
    </td>
 </tr>
 </table><br>
</form>

</body>
</html>
