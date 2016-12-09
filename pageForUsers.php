<?php
session_start();
?>

<!DOCTYPE html>

<html>
    <head>
	<meta charset="utf-8" />
	<title>Labrary: enter for Users</title>
        <link rel="stylesheet" type="text/css" href="./pageForUsers.css">
    </head>
<body>  
<?php

$filename = "database.csv";
$arrayFile = file($filename);
$todayYear = date("Y");
//$username = $_POST["username"];
//$password = $_POST["password"];

function textGreet(){
    echo "
            <h3 style = 'width:50%'>
		Обработка данных зарегистрированных посетителей.
                Добро пожаловать, ".$_SESSION['log'][3]."!<br>
                В настоящий момент находится в стадии разработки.
            </h3>";    
    echo "
            <div class = 'button' ><input type='button' onclick=location.href='index.php'; value='Вернуться на главную'>
            </div>";
    
}

function ageUser($age){
    if($age <= 18){
        echo "
            <div class = 'dataUser1'>
                <p>Специальное предложение для лиц моложе 18 лет!<br>   
                </p>
            </div>";
    }else if($age >= 30){
        echo "
            <div class = 'dataUser1'>
                <p>Сегодня вечеринка: Кому за 30! <br>   
                </p>
            </div>";
    }
}

if (isset($_SESSION['log'])){
    textGreet();
        foreach ($arrayFile as $kk => $vv){
        $userCheck = explode(",", $vv);
            if($userCheck == $_SESSION["log"]){ 
            echo "
            <div class = 'dataUser'><p>
            Фамилия: ".$userCheck[2]."<br>
            Имя: ".$userCheck[3]."<br>
            Отчество: ".$userCheck[4]."<br>
            Email: ".$userCheck[8]."<br>
            Дата рождения: ".$userCheck[5]."<br>   
            </p></div>";            
            if(isset($userCheck[10])){
                $age = $todayYear - $userCheck[10];
                ageUser($age);
            }
        }
    }
}else{
    foreach ($arrayFile as $kk => $vv){
    $userCheck = explode(",", $vv);
        if(($userCheck[0] == $_POST["username"])&&($userCheck[1] == $_POST["password"])){
            $_SESSION["log"] = $userCheck;   
            textGreet();
        echo "
            <div class = 'dataUser'><p>
            Фамилия: ".$userCheck[2]."<br>
            Имя: ".$userCheck[3]."<br>
            Отчество: ".$userCheck[4]."<br>
            Email: ".$userCheck[8]."<br>
            Дата рождения: ".$userCheck[5]."<br>
            </p></div>";
            if(isset($userCheck[10])){
                $age = $todayYear - $userCheck[10];
                ageUser($age);
            }
            exit();
        }    
    }
    echo "<h3 style = 'width:50%'>
	Обработка данных зарегистрированных посетителей.
        Вы не вошли как зарегистрированный пользователь.
        Вернитесь, пожалуйста, на главную страницу и введите логин и пароль.
        </h3>";
    echo "
        <div class = 'button' ><input type='button' onclick=location.href='index.php'; value='Вернуться на главную'>
        </div>";
    exit();
}    
?>
</body>
</html>
