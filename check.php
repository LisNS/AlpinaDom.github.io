   <?php
   $name=$_POST['name'];
   $vid=$_POST['vid'];
   $phone=$_POST['phone'];
   $mysql=mysqli_connect('127.0.0.1', 'root', '', 'alpinadom');
   
       $mysql->query("INSERT INTO `сообщения` (`name`, `vid`, `phone`)
           VALUES ('$name', '$vid', '$phone')");
   
       $mysql->close();
   
       header('Location:reg.html')
   ?>
   
