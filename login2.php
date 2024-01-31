<?php



$email = $_POST['name'];
$Password = $_POST['pass'];

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
      left: 515px;
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
$sql= "SELECT * FROM info WHERE email = '$email' AND password = '$Password' ";
$result = mysqli_query($conn,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
    echo '<form method="POST" action="start.html  ">
    <back class="back"></back>
    <h1>Login successfully...</h1>
    <button class="b1" type="submit">HOME</button>
    
  </form>';
}else{
    echo '<form method="POST" action="login2.html  ">
    <back class="back2"></back>
    <h1>Invaid Email or Password</h1>
    <button class="b1" type="submit">BACK</button>
    
  </form>';
}

?>