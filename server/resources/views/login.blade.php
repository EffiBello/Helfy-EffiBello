
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
          <div class="titleContainer">
            <h1 class="title">Log in</h1>
          </div>

          <div class="inputContainer">
            <label for="username">Username</label>
            <input type="text" placeholder="Enter Username" name="username" required>
          </div>
          
          <div class="inputContainer">
            <label for="password">Password</label>
            <input type="password" placeholder="Enter Password" name="password" required>
          </div>
      
          <button type="submit">Login</button>
          
         
        </div>

    
</body>
</html>