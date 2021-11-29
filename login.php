<html>
<head>
    <title>User Login And Registration</title>
    
    <link rel="stylesheet" type="text/css" href="style1.css">
     </head>
    
    
<body>
    <div id="divborder">
    <div class="login-left">
        <div id="div-border">
        <h2>Login Here</h2>
        <form action="validation.php" method="post">
            
            
             <label>Username</label><br>
             <input type="text" name="user" class="form-control" required>
         
         <br>
             <label>Password</label><br>
             <input type="password" name="password" class="form-control" required><br>
            <button type="submit" class="btn1">Login</button>
            
            </form>
        </div>
    
        
        <div class="login-right">
        <h2 id="he">Register Here</h2><br>
        <form action="registration.php" method="post">
            
            <div class="form-group">
             <label>Username</label><br>
             <input type="text" name="user" class="form-control" required><br>
           </div> 
         <div class="form-group">
             <label>Password</label><br>
             <input type="password" name="password" class="form-control" required><br>
            </div>
            <button type="submit" class="btn2">Register</button>
            </form>
        </div>
        
    </div>
    
    

    </div>
    
    </body>


</html>