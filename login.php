<?php 
 $db = mysqli_connect('localhost', 'root', '1234', 'keep') or die('Fail'); 
 $email_posted = $_POST['f_email']; 
 $password_posted = $_POST['f_password']; 
 $password_posted = password_hash($password_posted, PASSWORD_DEFAULT);
 $query = "SELECT id_usuario, password FROM tUsuarios WHERE email = '".$email_posted."'";
 $result = mysqli_query($db, $query) or die('Query error'); 
 if (mysqli_num_rows($result) > 0) { 
 $only_row = mysqli_fetch_array($result); 
 if ($only_row[1] == $password_posted) { 
 session_start(); 
 $_SESSION['user_id'] = $only_row[0]; 
 header('Location: main.php'); 
 } else { 
 echo '<p>Contraseña incorrecta</p>'; 
 } 
 } else { 
 echo '<p>Email incorrecto</p>'; 
 } 
?> 
