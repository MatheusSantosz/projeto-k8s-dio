<html>
 <head>
  <title>MyApp PHP 1.0</title>
 </head>
 <body>
    <h1>MyApp PHP 1.0</h1>
 <?php 

 echo gethostname(); // pega o nome da maquina
 echo "<br>";
 echo $_SERVER["REMOTE_ADDR"]; //pega o ip do servidor
 echo "<br>";
 echo date('Y-m-d H:i:s'); //exibit a data e hora
 
 ?>
 </body>
</html>
