<html>
    <head>
<style>
    body {
background-color:#6D4F5E;}

h2,h3 {
color: #fff;
  text-align: center;
 
}



 </style>     
</head>
<body>
<header class="heading"> <center><h1>Projet Cloud</h1> <br> <h2> <h1>Création de l'image Docker</h1> </center></header>

<hr> <h2><center>Création reussite ! </center></h2>
<p><h3> <center>La création de l'image ** <?php echo $_POST['name'] ?> ** est en cours de traitement </center> </h3> </p> </hr>


    
<?php
$monText ="FROM php:7.2-apache \nRUN apt-get update \   \n&& apt-get install -y git \ \n&& git clone " . $_POST['lien'] . "\nRUN docker-php-ext-install mysqli pdo_mysql \nRUN mkdir medibed\nRUN cp -r ./PHP-MySQL-CRUD-Web-Application/* medibed/ \nRUN rm -rf ./PHP-MySQL-CRUD-Web-Application/";

?>


<?php       
            file_put_contents('Dockerfile', $monText);
            set_time_limit(500);
            $var = shell_exec('docker build -t hajaramina/' . $_POST['name'] . ' .');
            echo $var;

        ?>





</body>
    </html>