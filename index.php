<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Staff Application</title>
    </head>
    <body>

    <?php

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    ini_set("SMTP", "smtp.gmail.com");

    if($name){

        //MESSAGE ON THE SITE:
        echo 'I have send you an email, if you did not receive this email you need to contact me!';
        echo '- Daniel Geensen';

        //MAIL TO $name's email:
        mail($email, "Successfully entered your application!", "Hi $name, you successfully send your application!", "From: Daniel.geensen1@gmail.com");

        //MAIL
        //.. mail("Daniel.geensen1@gmail.com", "New staff application!", "Name: $name" + "Username: $username" + "Email: $email", "From: Daniel.geensen1@gmail.com");
    }else{

     ?>

        <form method="post" action"<?php echo $_SERVER["PHP_SELF"]; ?>">

        Name: <input type="text" name="name"> <br>
        Username: <input type="text" name="username"> <br>
        Email address:  <input type="text" name="email"> <br>
        <input type="submit" name="submit" value="Enter!">

        </form>

     <?php
    }
    ?>

    </body>
</html>