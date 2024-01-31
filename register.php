<?php


$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$Number  = $_POST['Number'];
$place = $_POST['place'];
$gender = $_POST['gender'];
$Password = $_POST['Password'];

echo" 

<style>

    .b1
    {
      transition: 0.4s;
      position: absolute;
      top: 640px;
      background-color: transparent;
      width: 170px;
      border: 4px solid #8BF5FA;
      font-family: 'Carme', sans-serif;
      font-weight: 900;
      height: 70px;
      left:1300px;
      font-size: 25;
      color:#8BF5FA;
      cursor: pointer;

    }
    .b1:hover
{
    color: black;
    border: 4px solid black;
    width: 300px;
    letter-spacing:0.2cm;
    padding-right: 0px;
    left: 1220px;
    transition: 0.5s;
}
    h1
    {
      position: absolute;
      top: 300px;
      left: 415px;
      font-size:60px;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      width:900px;
      color:black;
      
      
    }
    .back
    { position: fixed;
      top:-10px;
      left:-10px;
      width:120%;
      height:120%;
      background-color:yellow;
    }
    .back2
    { position: fixed;
      top:-10px;
      left:-10px;
      width:120%;
      height:120%;
      background-color:red;
    }
</style>";

// Database connection
$conn = new mysqli('localhost','root','','trek tales');
$stmt2 = $conn->prepare("SELECT * FROM info WHERE email=?");
$stmt2->execute([$email]); 
$user = $stmt2->fetch();
if ($user) {
    // email found
    echo '<form method="POST" action="register.html  ">
    <back class="back2"></back>
    <h1>User is already registered</h1>
    <button class="b1" type="submit">BACK </button>
    
  </form>';
   
return;
    
}


if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into info(name, email, date, number, place, gender,password) values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssisss", $name, $email, $date, $Number, $place, $gender,$Password);
    $execval = $stmt->execute();
   // echo $execval;
    //echo "Registration successfully...";
    
    

    echo '<form method="POST" action="start.html  ">
    <back class="back"></back>
    <h1>Registration successfully...</h1>
    <button class="b1" type="submit">HOME</button>
    
  </form>';
    
    $stmt->close();
    $conn->close();
}

?>