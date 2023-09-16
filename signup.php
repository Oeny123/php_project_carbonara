<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="icon" type="image/x-icon" href="reg-icon.png">
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
            
            <a href="signup.php">SignUp</a>
            <a href="login.php">Login</a>
           

            <h2>Fill in the form to Sign-up!</h2>

            <?php
            @include 'db.php';
            session_start();

            if (isset($_POST['Register'])) {
                $name = $_POST['name'];
                $birthday = $_POST['birthday'];
                $course = $_POST['course'];
                $email = $_POST['email'];

                $select = "SELECT * FROM users WHERE Name = '$name' && Birthday = '$birthday' && Course = '$course' && Email = '$email' ";

                $result = mysqli_query($conn, $select);

                if(mysqli_num_rows($result) > 0){
                    $error = 'User Already Exist';  
                    echo '<span class= "error-msg">'.$error.'</span>';                 
                }
                else{
                    $insert = "INSERT INTO users(Name,Birthday,Course,Email) values('$name','$birthday','$course','$email')";
                    mysqli_query($conn, $insert);
                    header('location: login.php');
                }
            }

?>
            <br>

            <form action="signup.php" method="POST">

                <input type="text" name="name" placeholder="Enter Your Name" required>
          
                <input type="date" name="birthday" placeholder="Enter Your Birthday" required>
            
                <input type="text" name="course" placeholder="Enter Your Course" required>
          
                <input type="email" name="email" placeholder="Enter Your Email" required>

                <input type="reset" name="reset" placeholder="Clear" class="reset">
            
                <input type="submit" name="Register" value="Register" class="register" required>

                <p>Already have an account click Log in.</p>
            
            </form>

        </div>

    </div>
    
</body>
</html>