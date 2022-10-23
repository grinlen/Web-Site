<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
  <title> lab1 </title>
 </head>
 <body>

 <style>
  body { font-size: 40px;
  text-align: center;
  background-color:beige;

   }
</style>
<style>
form{
  border: 10px solid black;
}
</style>
     <form action="index.php" method="get">
 <h2> Вычисление площади квадрата </h2> 
     <h1>Введите сторону квадрата</h1>
     Сторона: <input type="text" name="a"><br>
     <input type="submit" value="Считать">
     </form>
<?php
if($_GET == true ){
  echo $b = "Результат= ";
  echo $v = $b + ($_GET["a"] * $_GET["a"]);
} 
else{
  echo "Данные не введены";
}

?> 
     
 </body>
</html>
