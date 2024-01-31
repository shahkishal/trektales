<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trek Tale_registration</title>
    <link rel="stylesheet" href="register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Carme&display=swap" rel="stylesheet">
    <link href='https://fonts.google.com/'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="register.js"></script>
</head>

    
        <a href="login.html"><img class="background" src="loginbg.jpg" width="100%" height="100%"></a>    
<form action="register.php" method="post"> 
    <div class="login">
        <div class="bg1"></div>
        <p class="t1">Register</p>
        <!------------Name------------>
        <p class="t2">Name:-</p>
        <input class="a" placeholder="Full Name" type="name" name="name" id="xx" style="width: 17%; height: 4%; border-radius: 15px;" maxlength="50" required></input>
        <!------------Email-Id------------>
        <p class="t3">Email-Id:-</p>
        <input class="aa" placeholder="xyz@gmail.com" type="email" name="email" id="email" style="width: 17%; height: 4%; border-radius: 15px;" maxlength="25" required></input>
        <!------------Date of Birth------------>
        <p class="t4">Date of Birth:-</p>
        <input class="b" placeholder="Date of Birth" type="date" name="date" id="xx" style="width: 17%; height: 4%; border-radius: 15px;" maxlength="50" required></input>
        <!------------Gender------------>
        <p class="t5">Gender:-</p>
        <div class="bb">
            <input type="radio" name="gender" value="Male" required>Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gender" value="Female" required>Female 
        </div>
        <!------------Mobile Number------------>
        <p class="t6">Mobile Number:-</p>
        <input class="c" placeholder="Number" type="Number" name="Number" id="xx" style="width: 17%; height: 4%; border-radius: 15px;" minlength="0" maxlength="10" required></input>            
        <!------------City, Country------------>
        <p class="t7">Place:-</p>
        <input class="cc" placeholder="City" type="place" name="place" id="xx" style="width: 17%; height: 4%; border-radius: 15px;" maxlength="40" required></input>
        <!------------Password------------>
        <p class="t8">Password:-</p>
        <input class="d" placeholder="Password" type="Password" name="Password" id="xx" style="width: 17%; height: 4%; border-radius: 15px;" maxlength="20"></input>
        <!------------Confirm Password------------>
        <p class="t9">Confirm Password:-</p>
        <input class="dd" placeholder="Password" type="Password" name="ConPassword" id="xx" style="width: 17%; height: 4%; border-radius: 15px;" maxlength="20"></input>
        <button type="submit" class="btnn">Sign Up</button>
    </form>
    </div>

    

