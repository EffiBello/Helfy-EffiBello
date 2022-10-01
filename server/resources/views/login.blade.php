
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Log-in</title>
</head>
<body>
    
    <form action="/login" method="post">
      @csrf
        <div class="container">
          <label for="username">Username</label>
          <input type="text" placeholder="Enter Username" name="username" required>
      
          <label for="password">Password</label>
          <input type="password" placeholder="Enter Password" name="password" required>
      
          <button type="submit">Login</button>
          
         
        </div>

    
</body>
</html>