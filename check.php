<?php
   $name=$_POST['name'];
   $vid=$_POST['vid'];
   $phone=$_POST['phone'];
   $mysql=mysqli_connect('127.0.0.1', 'root', '', 'alpinadom');
   
       $mysql->query("INSERT INTO `сообщения` (`ФИО`, `Вид_работ`, `Телефон`)
           VALUES ('$name', '$vid', '$phone')");
   
       $mysql->close();
   
       header('Location: ../html/reg.html')
   ?>