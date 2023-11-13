<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title> Admin </title>
  <link rel="stylesheet" type="text/css" href="admin.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
    <body>
        <div class="kolom">
            <form action="admin.php" method="POST" class="adminkolom">
                <h1 >Selamat Datang</h1>
                <h1 class="admin">Admin</h1>
                
                <div>
                    <input type="text" name="useradmin" placeholder="username" class="inputadmin">
                </div>
                <div>
                <input type="text" name="passwordadmin" placeholder="password" class="inputadmin">
                </div>
                <button type="submit" class="btn" name="buttonadmin">Login</button>
            </form>
        </div>
    </body>
    
    </html>
