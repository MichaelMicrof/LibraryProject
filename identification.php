<?php
session_start();
if ((isset($_POST['out']))&&($_POST['out']=="Выйти из профиля")){
        unset($_SESSION['log']);
} 
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>Library</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="identification.css">
</head>
<body>
    <?php
    if (isset($_SESSION['log'])){
        echo "
        <div id='greet'><h1>
		Добро пожаловать в нашу библиотеку, ".$_SESSION['log'][3]."!</h1>;
        <br><h3>
		Мы рады привествовать Вас снова!</h3>;
            <form action='' method=POST id='butForm'>
                <input type='button' onclick=location.href='pageForUsers.php'; value='Войти в библиотеку'>
                <input type=submit name=out value='Выйти из профиля'>
            </form>
        </div>    
        ";       
    }else{
    echo "
    <h1>Добро пожаловать в нашу библиотеку</h1>
    <div class = 'div_p'>
        <p id = 'p1'>Наша библиотека является общественным заведением и получить доступ сюда может каждый.
        Здесь Вы сможете найти книги по интересующим Вас темам, а также , при желании, 
        оставить свой след в истории!</p>
        <p id = 'p2'>Если Вы уже зарегистрированны, пожалуйста, введите Ваш логин и пароль и пользуйтесь
        любыми книгами из библиотеки.</p>
        <p id = 'p3'> Если еще нет, то Вы регистрация займет всего несколько минут.
        </p>
        <p id = 'p4'>Спасибо, что воспользовались нашей библиотекой!</p>
    </div>
   
    <form class = 'forma' action='pageForUsers.php' method = 'post'>
        <h3>Вход для зарегистрированных пользователей</h3>
        Логин&nbsp;&nbsp;:<input required type='text' name='username' class='us' placeholder='Ваш логин'><br><br>
        Пароль:<input required type='password' name='password' class='pw' placeholder='Ваш пароль'><br>
    
        <div id = 'buttonEnter'><input name='buttonEnter' type='submit' value='Войти в библиотеку'></div><br>
        <div id = 'buttonTransition'><input type='button' onclick=location.href='registration.php'; value='Регистрация нового пользователя'></div><br>
    </form>
    ";
    }
       
?>
</body>
</html>

