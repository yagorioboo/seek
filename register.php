<?php 
 $db = mysqli_connect('localhost', 'root', '1234', 'keep') or die('Fail'); 
 $nick_posted = $_POST['f_nick']
 $email_posted = $_POST['f_email']; 
 $password_posted = $_POST['f_password']; 
 $passwordR_posted = $_POST['f_passwordR'];
 if ($password_posted != $passwordR_posted){
     echo '<h1>Contraseña no igual</h1>'
     echo '<p><a href="register.html">Volver a intentarlo</a></p>'
 }else{
    $password_posted = password_hash($password_posted, PASSWORD_DEFAULT);
    $query = "INSERT INTO tUsuarios(nick, email, password)  VALUES ('".$nick_posted."',".$email_posted.",".$password_posted.")"; 
    mysqli_query($db, $query) or die('Error');
    echo '<h1>Usuario registrado</h1>'
    echo '<p><a href="login.html">Logueate</a></p>' 
 }
 ?> 
