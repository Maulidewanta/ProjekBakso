<?php
require ('koneksi.php');

session_start();

if( isset($_POST['login']) ) {
    $email = $_POST['user'];
    $pass = $_POST['pass'];
    
    if(!empty(trim($email)) && !empty(trim($pass)))  {
        $query ="SELECT * FROM kasir WHERE username = '$email'";
        $result = mysqli_query($koneksi, $query);
        $num = mysqli_num_rows($result);
    }

    while ($row = mysqli_fetch_array($result))  {
      $userVal = $row['username'];
      $passVal = $row['password'];
    }

    if($num != 0) {
      if($userVal==$email && $passVal==$pass) {
        header('location: kasir.php');
    }else{
      
      
      
     
    }
    }
}
?>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title> Login </title>
  <link rel="stylesheet" href="kel5.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="kotak-login">
      <form action ="login.php" method="POST" class="logincss">
        <h1> Login Kasir </h1>
        <div class="inputbox">
        <i class='bx bxs-user-account'></i>
          <input type="text" placeholder="Username" name="user" required>
          
        </div>
        <div class="inputbox">
        <i class='bx bxs-lock-alt'></i>
          <input type="password" placeholder="Password" name="pass" required>
          
        </div>

        <div class="rememberforgot">
          <label><input type="checkbox" name="ingat"> Remember me </label>
          <a href="admin.php" class="admin">Admin</a>
        </div>
        
        <button type="submit" class="btn" name="login"> Login </button>
       
      </form>
      
    </div>

      </form>
</body>
