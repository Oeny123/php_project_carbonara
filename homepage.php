<?php
@include 'db.php';

session_start();

if(!isset($_SESSION['Email'])){
   header('location: login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="icon" type="image/x-icon" href="homepage-icon.png">
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
            
          <div class="card">

            <h1>Welcome!</h1>
            <p>Hi there <?php echo $_SESSION['Email']; ?></p>

            <img src="profile.png" id="profile-pic">
            <label for="input-file">Upload Profile Picture</label>
            <input type="file" accept="image/jpeg, image/png, image/jpg" id="input-file">

            <a class="logout" href="logout.php">Logout</a>

          </div>
            
        </div>

    </div>
    
    <script>
      let profilePic = document.getElementById("profile-pic");
      let inputFile = document.getElementById("input-file");

      inputFile.onchange = function(){
        profilePic.src = URL.createObjectURL(inputFile.files[0]);
      }

    </script>

</body>
</html>