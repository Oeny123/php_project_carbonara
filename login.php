<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="login-icon.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">

        <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="rtu.png" alt="RTU" style="width:400px;height:300px;">
              </div>
              <div class="flip-card-back">
                <h1>Team Carbonara</h1> 
                <p>Ash Siebert Joloan</p> 
                <p>Jayrald Pelegrino</p>
                <p>John Patrick Juni</p>
                <p>Niel Ivan Montesa</p>
                <p>Rj Declaro</p>

              </div>
            </div>
          </div>

        <div class="content2">
            
            <a href="signup.php" class="login">SignUp</a>
            <a href="login.php" class="login">Login</a>
           

            <h2>Fill in the form to Login !</h2>

            <?php
            @include 'db.php';
            session_start();

            if (isset($_POST['Login'])) {
               $name = $_POST['name'];
               $email = $_POST['email'];

               $select = "SELECT * FROM users WHERE Name = '$name' && Email = '$email'";

               $result = mysqli_query($conn, $select);
               
            if(mysqli_num_rows($result) > 0){
                $_SESSION['Email'] = $email;
                header('location: homepage.php');
            }else{
                $error = 'Incorrect Inputs !';
                echo '<span class= "login-error-msg">'.$error.'</span>'; 
             }
            }

        ?>

<br><br>
            <form action="login.php" method="POST">

                <input type="text" name="name" placeholder="Enter Your Name" required>            
          
                <input type="email" name="email" placeholder="Enter Your Email" required>

                <input type="submit" name="Login" value="Login" class="register" required>

                <p>Dont have an account click Sign up.</p>

            
            </form>

        </div>

    </div>
    
</body>
</html>