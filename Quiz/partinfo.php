<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quiz App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Quiz</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="webquiz.php">WEB</a></li>
                    <li><a href="english.php">ENGLISH</a></li>
                    <li><a href="math.php">MATHEMATICS</a></li>
                    <li><a href="partinfo.php">PARTICIPANT<br/>INFORMATION</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <input type="submit" name="" value="SEARCH">
            </div>

        </div> 
        <div class="content">
            <div>

            <?php 
 session_start();
include_once('connection.php'); 
?>
 <form action="" method="post">
      <div> Enter Your Name:<br/> <input placeholder="Name" type="text" name="pname" value="" style="height: 40px; width:300px; background-color:black; color:white; border-radius: 10px;"/> </br>
      Enter Your Class: <br/><input placeholder="Class" type="text" name="pclass" value="" style="height: 40px; width:300px; background-color:black; color:white; border-radius: 10px;"/></br>
      Enter Your Score: <br/><input placeholder="Score" type="text" name="pscore" value="" style="height: 40px; width:300px; background-color:black; color:white; border-radius: 10px;"/></br>
      <input type="submit" name="submit" value="Insert" style="height: 35px; width:70px; background-color:black; color:white; border-radius: 10px; padding-top: 5px;"/></div>
</form>
  
  
<?php 
if(isset($_POST['submit']))
{

  if(!empty ($_POST['pname']) && !empty ($_POST['pclass']) && !empty ($_POST['pscore'])){
    $paname= $_POST['pname'];
    $paclass= $_POST['pclass'];
    $pascore= $_POST['pscore'];

    
    
  $sql = "INSERT INTO participant_info(pname, pclass, pscore) VALUES('$paname','$paclass','$pascore')";
 
  
  $run =mysqli_multi_query($mysqli,$sql) or die(mysqli_query());
  
  if($run){
    
  }
    else{
      
              
  }
  }
  else{
    
  }
}

?>

            </div>
            
                
              <div class="footer">
              <p>Copyright @Rabiul</p>
              </div>
            </div>
          </div>
         </div>
        </div>
      </div>
    </div>
    
    <script src="scripteng.js"></script>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
  </body>
</html>