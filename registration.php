<?php
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
 <title>Library</title>
 <link rel="stylesheet" type="text/css" href="registration.css">
 <script src="registration.js"></script>
</head>
<body>

<div class="h1div"><div id="logo" class="anitab">
  <img src=".\images\LogoKv2.png" alt="Logo" class="logo2">
</div>
<h1>Мы рады, что Вы решили присоединиться к нам!</h1></div>
<br>
<div class="h2div"><h3>Прошу Вас заполнить приведенную ниже форму регистрации:</h3></div>
<br>

<form action="confirmation.php" method="get">
<table style=margin:auto; class="td4 td2">
<tbody>
 <tr>
  <th>Фамилия</th>
  <td><textarea name="surName" class="tta" placeholder="Иванов"></textarea></td>
 </tr>
  <tr>
  <th>Имя</th>
  <td><textarea name="firstName" class="tta" placeholder="Игорь"></textarea></td>
 </tr>
  <tr>
  <th>Отчество</th>
  <td><textarea name="middleName" class="tta" placeholder="Дмитриевич"></textarea></td>
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
   </td>
 </tr>
 
 <tr>
   <th>Место учебы</th>
   <td>
        <input type="radio" name="placeOfStudy" value="Детсад">Детсад<br>
	<input type="radio" name="placeOfStudy" value="Школа">Школа<br>
	<input type="radio" name="placeOfStudy" value="Колледж">Колледж<br>
	<input type="radio" name="placeOfStudy" value="Институт">Институт<br>
	<input type="radio" name="placeOfStudy" value="Работаю">Работаю<br>
	<input type="radio" name="placeOfStudy" value="Другое">Другое<br>
	<textarea name="placeOfStudyOther" placeholder="Другое место учебы"></textarea><br>
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
        
   </td>
 </tr>
 
 <tr>
   <th>Адрес электронной почты</th>
   <td>
   <textarea name="email" placeholder="id.ivanov@gmail.com"></textarea>
   </td>
 </tr>
 
  <tr>
   <th>Адрес проживания</th>
   <td>
   <textarea name="address" placeholder="Индекс, Город, Адрес"></textarea>
   </td>
 </tr>
 
 <tr>
   <th>Выберете интересующие Вас разделы</th>
   <td class="td2">
        <input type="checkbox" name="section1" value="Детские книжки">Детские книжки<br>
	<input type="checkbox" name="section2" value="Учебники">Учебники<br>
	<input type="checkbox" name="section3" value="Внеклассное чтение">Внеклассное чтение<br>
	<input type="checkbox" name="section4" value="Классическая литература">Классическая литература<br>
	<input type="checkbox" name="section5" value="Современная литература">Современная литература<br>
	<input type="checkbox" name="section6" value="Профессиональные издания">Профессиональные издания<br>
   </td>
 </tr>
 
 <tr>
   <th>Логин для входа в систему</th>
   <td> 
   Ваш логин:<input type="text" name="user" class="td3" placeholder="Ваш логин"><br>
   <br>
   Ваш пароль:<input type="password" name="password" class="td3" placeholder="Ваш пароль"><br>
   <br>
   Повтор пароля: <input type="password" name="Rpassword" class="td3" placeholder="Повтор пароля"><br>
   </td>
 </tr>
 
 </tbody>
 </table>
 <br>
 <table style=margin:auto; class="td5">
 <tr>
	<td><input id="submitButton" name="submit" type="submit" value="Зарегистрироваться"></td>
	<td><input type="button" onclick="location.href='https://ru.wikipedia.org/wiki/Электронная_библиотека';" value="Выйти без регистрации"><br></td>
 </tr>
 </table><br>
</form>

</body>
</html>


